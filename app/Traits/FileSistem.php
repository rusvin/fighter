<?php

namespace App\Traits;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Config;

trait FileSystem
{
    public static function storeImage($image, $config_paths, $old_image)
    {
        $img = Image::make($image);
        $img_name = str_random(8) . uniqid() . '.' .Config::get('images.avatar_img_format');
        foreach (config($config_paths) as $path) {
            $img->resize($path['width'], $path['height'])->stream();
            Storage::disk('local')->put($path['path'] . $img_name, $img);
        }
        return $img_name;
    }

    public static function makeImageFromBase64($base64image){
            $img = Image::make($base64image);
            $img->encode(Config::get('images.avatar_img_format'), 100);
        return $img;
    }

    public static function updateImage($image, $config_paths, $old_image)
    {
        //$img = Image::make($image);
        $img = $image;
        $img_name = uniqid() . '.' . Config::get('images.avatar_img_format');
        foreach (config($config_paths) as $path) {
            if ($old_image) {
                if (Storage::disk('local')->exists($path['path'] . $old_image)) {
                    Storage::delete($path['path'] . $old_image);
                }
            }
            //update
            $img->resize($path['width'], $path['height'])->stream();
            Storage::disk('local')->put($path['path'] . $img_name, $img);
        }
        return $img_name;
    }
}
