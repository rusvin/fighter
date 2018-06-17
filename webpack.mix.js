let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
//

mix.styles([
    'resources/assets/cabinet/font-awesome/css/font-awesome.css',

    'resources/assets/cabinet/css/lib/fenqyuanchen-cropper/cropper.css',
    'resources/assets/cabinet/css/lib/toastr/toastr.min.css',
    'resources/assets/cabinet/css/vendor/animate.css',
    'resources/assets/cabinet/css/vendor/bootstrap.min.css',
    'resources/assets/cabinet/css/vendor/style.css',
], 'public/cabinet/css/cabinet.css')
    .mix.copy('resources/assets/cabinet/font-awesome/fonts', 'public/cabinet/fonts')
    .mix.copy('resources/assets/cabinet/img', 'public/cabinet/img');

mix.scripts([
    'resources/assets/cabinet/js/vendor/jquery-2.1.1.js',
    'resources/assets/cabinet/js/vendor/bootstrap.min.js',

    'resources/assets/cabinet/js/lib/chartJs/Chart.min.js',
    'resources/assets/cabinet/js/lib/clipboard/clipboard.min.js',
    'resources/assets/cabinet/js/lib/flot/jquery.flot.js',
    'resources/assets/cabinet/js/lib/flot/jquery.flot.tooltip.min.js',
    'resources/assets/cabinet/js/lib/flot/jquery.flot.spline.js',
    'resources/assets/cabinet/js/lib/flot/jquery.flot.resize.js',
    'resources/assets/cabinet/js/lib/flot/jquery.flot.pie.js',
    'resources/assets/cabinet/js/lib/peity/jquery.peity.min.js',
    'resources/assets/cabinet/js/lib/pace/pace.min.js',
    'resources/assets/cabinet/js/lib/jquery-ui/jquery-ui.min.js',
    'resources/assets/cabinet/js/lib/gritter/jquery.gritter.min.js',
    'resources/assets/cabinet/js/lib/sparkline/jquery.sparkline.min.js',
    'resources/assets/cabinet/js/lib/chartJs/Chart.min.js',
    'resources/assets/cabinet/js/lib/toastr/toastr.min.js',
    'resources/assets/cabinet/js/lib/fenqyuanchen-cropper/cropper.js',
    'resources/assets/cabinet/js/lib/inputmask/jasny-bootstrap.js',
], 'public/cabinet/js/cabinet.js')
  //  .mix.copy('resources/assets/cabinet/js/app/profile.js', 'public/cabinet/js/profile.js')
    .version();
