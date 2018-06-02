@extends('cabinet.layout')

@section('title')
    Профіль
@endsection
@section('content')
    <style>
        .page-title-box {
            display: none
        }

        .container {
            max-width: 640px;
            margin: 20px auto;
        }

        img {
            max-width: 100%;
        }

        .overlay {
            cursor: pointer;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #7c7c7f;
        }

        .select-inner:hover .overlay {
            opacity: 0.8;
        }


    </style>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Профіль</h2>
            <ol class="breadcrumb">
                <li>
                    <span>Кабінет</span>
                </li>
                <li class="active">
                    <strong>Профіль</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row m-b-lg m-t-lg">
            <div class="col-md-8">
                <form id="hidden_form" method="POST" enctype="multipart/form-data" action="{{route('user.update-avatar')}}">
                    {{ csrf_field() }}
                    <input id="hidden_photo" name="avatar" type="hidden">
                </form>

                <div class="profile-image">
                    <img id="avatar" src="{{($user->avatar) ? asset(config('images.users.small.public_path') . $user->avatar):asset(config('images.default_avatar')) }}" alt="avatar"
                         class="img-circle circle-border m-b-md"
                         alt="profile">
                    <label>
                        <div class="select-inner">
                            <input type="file" class="sr-only" id="change_avatar" name="image" accept="image/jpeg">
                            <span class="btn btn-warning btn-sm">Змінити фото</span>
                        </div>
                    </label>
                </div>
                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{$user->name}} {{$user->last_name}}
                            </h2>
                            <h4>Founder of Groupeq</h4>
                            <small>
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form Ipsum available.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <table class="table small m-b-xs">
                    <tbody>
                    <tr>
                        <td>
                            <strong>142</strong> Зіграно ігор
                        </td>
                        <td>
                            <strong>22</strong> Зіграно цьогоріч
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <strong>12</strong> Найвище місце
                        </td>
                        <td>
                            <strong>16</strong> Поточне місце
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>154</strong> Найвищий рейтинг
                        </td>
                        <td>
                            <strong>32</strong> Поточний рейтинг
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Редагувати профіль</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" class="form-horizontal" enctype="multipart/form-data"
                              action="{{route('user.update', auth()->user()->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" autocomplete="off"
                                           value="{{old('email')?old('email'):$user->email}}">
                                    @if($errors->has('email'))
                                        <span class="help-block m-b-none">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Телефон</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" autocomplete="off"
                                           value="{{old('phone')?old('phone'):$user->phone}}"
                                           data-mask="+380999999999">
                                    @if($errors->has('phone'))
                                        <span class="help-block m-b-none">{{$errors->first('phone')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('nickname') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Нікнейм</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nickname" class="form-control" autocomplete="off"
                                           value="{{old('nickname')?old('nickname'):$user->nickname}}">
                                    @if($errors->has('nickname'))
                                        <span class="help-block m-b-none">{{$errors->first('nickname')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('birthday') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Дата народження</label>
                                <div class="col-sm-10">
                                    <input type="text" name="birthday" class="form-control" autocomplete="off"
                                           value="{{old('birthday')?old('birthday'):$user->birthday}}"
                                           data-mask="9999-99-99"
                                    >
                                    @if($errors->has('birthday'))
                                        <span class="help-block m-b-none">{{$errors->first('birthday')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ім'я</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Прізвище</label>
                                <div class="col-sm-10">
                                    <input type="text" disabled class="form-control" value="{{$user->last_name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-info pull-right" type="submit">Зберегти зміни</button>
                                </div>
                            </div>
                        </form>
                        <div class="hr-line-dashed"></div>
                        <form method="POST" class="form-horizontal" enctype="multipart/form-data"
                              action="{{route('user.update-password')}}">
                            {{ csrf_field() }}
                            <div class="form-group {{$errors->has('old_password') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Старий пароль</label>
                                <div class="col-sm-10">
                                    <input type="password" name="old_password" class="form-control">
                                    @if($errors->has('old_password'))
                                        <span class="help-block m-b-none">{{$errors->first('old_password')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Новий пароль</label>
                                <div class="col-sm-10"><input type="password" name="password" class="form-control">
                                    @if($errors->has('password'))
                                        <span class="help-block m-b-none">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                <label class="col-sm-2 control-label">Повторіть пароль</label>
                                <div class="col-sm-10"><input type="password" name="password_confirmation"
                                                              class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 ">
                                    <button class="pull-right btn btn-warning" type="submit">Змінити пароль</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cropper-modal modal fade" id="modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-center" id="modalLabel"><b>Выбор фото</b></h4>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <img id="image" src="">
                    </div>
                    <br>
                    <div class="load-image text-center">
                        <label>
                            <span id="zoomIn" class="btn btn-info"><i class="fa fa-search-plus"></i></span>
                            <span id="rotate" class="btn btn-info"><i class="fa fa-rotate-right"></i></span>
                            <span id="zoomOut" class="btn btn-info"><i class="fa fa-search-minus"></i></span>
                            <br>
                            <br>
                            <div class="btn-group">
                                <span id="crop" class="btn btn-warning" style="border-radius: 15px 0px 0px 15px">Сохранить</span>
                                <span id="reload" class="btn btn-primary" style="border-radius: 0px 15px 15px 0px"
                                      data-dismiss="modal">Другое фото</span>
                            </div>

                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')

    @if(session()->has('status'))
        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    @if(session()->get('fields') == 'profile')toastr.success('Ви успішно оновили свій профіль', 'Чудово!');@endif
                    @if(session()->get('fields') == 'password')toastr.success('Ви успішно змінили пароль', 'Чудово!');@endif
                    @if(session()->get('fields') == 'avatar')toastr.success('Ви успішно змінили фото профілю', 'Чудово!');@endif
                }, 1300);
            });
        </script>
    @endif

    <script>
        window.addEventListener('DOMContentLoaded', function () {
            var avatar = document.getElementById('avatar');
            var image = document.getElementById('image');
            var input = document.getElementById('change_avatar');
            var $modal = $('#modal');
            var cropper;
            var max_size = 1000;
            input.addEventListener('change', function (e) {
                oFReader = new FileReader(),
                        oFReader.onload = function (oFREvent) {
                            var img = new Image();
                            img.onload = function () {
                                var canvas = document.createElement("canvas");
                                var ctx = canvas.getContext("2d");
                                prop = img.width / img.height;
                                canvas.width = (prop > 1) ? max_size : max_size * prop;
                                canvas.height = (prop > 1) ? max_size / prop : max_size;
                                ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
                                image.src = canvas.toDataURL();
                                input.value = '';
                                $modal.modal('show');
                            }
                            img.src = oFREvent.target.result;
                        };

                if (input.files.length === 0) {
                    return;
                }
                var oFile = input.files[0];
                if (oFile.type != 'image/jpeg') {
                    swal("Выберите фото в формате: jpeg");
                    return;
                } else {
                    oFReader.readAsDataURL(oFile);
                }
            });
            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    dragMode: 'move',
                    cropBoxResizable: false
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });
            document.getElementById('zoomIn').addEventListener('click', function () {
                cropper.zoom(0.1);
            });
            document.getElementById('zoomOut').addEventListener('click', function () {
                cropper.zoom(-0.1);
            });
            document.getElementById('rotate').addEventListener('click', function () {
                cropper.rotate(90);
            });
            $('#reload').on('click', function () {
                $('.select-inner').click();
            });

            document.getElementById('crop').addEventListener('click', function () {
                var canvas;
                $modal.modal('hide');
                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        maxWidth: max_size,
                        maxHeight: max_size
                    });
                    avatar.src = canvas.toDataURL();
                    $('#hidden_photo').attr('value', avatar.src).closest('form').submit();
                }
            });
        });
    </script>
@endsection
