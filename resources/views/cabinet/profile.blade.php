@extends('cabinet.layout')

@section('title')
    Профіль
@endsection
@section('content')
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
            <div class="col-md-5">

                <div class="profile-image">
                    <img src="{{url('/')}}/img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                    <span class="btn btn-warning btn-sm">Змінити фото</span>
                </div>
                <div class="profile-info">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                Alex Smith
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
            <div class="col-md-3">
                <small>Sales in last 24h</small>
                <h2 class="no-margins">206 480</h2>
                <div id="sparkline1">
                    <canvas style="display: inline-block; width: 247px; height: 50px; vertical-align: top;" width="247"
                            height="50"></canvas>
                </div>
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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group"><label class="col-sm-2 control-label">Ім'я</label>
                                <div class="col-sm-10"><input type="text" name="name" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Прізвище</label>
                                <div class="col-sm-10"><input type="text" name="last_name" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Дата народження</label>
                                <div class="col-sm-10"><input type="text" name="birthday" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-info pull-right" type="submit">Зберегти зміни</button>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Старий пароль</label>
                                <div class="col-sm-10"><input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Новий пароль</label>
                                <div class="col-sm-10"><input type="password" name="old_password" class="form-control">
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
@endsection