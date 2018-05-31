<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Лого</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Головна</a></li>
                <li><a href="#">Рейтинг</a></li>
                <li><a href="#">Ігри</a></li>
                <li><a href="#">Обговорення</a></li>
                <li><a href="#">Фото</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="modal" data-target="#loginModal" href="#">
                        <span class="glyphicon glyphicon-log-in"></span>
                        Login
                    </a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#registerModal" href="#">
                        <span class="glyphicon glyphicon-user"></span>
                        Sign Up
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container text-center">
        <h1>ГІПАНІС</h1>
        <p>Клуб любителів настільного тенісу</p>
    </div>
</div>

<div class="container-fluid bg-3 text-center">
    <h3>Some of my Work</h3><br>
    <div class="row">
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
    </div>
</div>
<br>

<div class="container-fluid bg-3 text-center">
    <div class="row">
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-3">
            <p>Some text..</p>
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
        </div>
    </div>
</div>
<br><br>


<!-- Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 text-center">
                        <img src="/images/login-img.png">
                    </div>
                </div>
                <br>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        {{--<label for="email" class="col-sm-3 col-form-label text-md-right">Email</label>--}}

                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {{--<label for="password" class="col-md-3 col-form-label text-md-right">Пароль</label>--}}
                        <div class="col-md-1"></div>

                        <div class="col-md-10">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Пароль" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    {{--<div class="form-group row">--}}
                    {{--<div class="col-md-12 text-center">--}}
                    {{--<div class="checkbox">--}}
                    {{--<label>--}}
                    {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запам'ятати мене--}}
                    {{--</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-info btn-block">
                               <b> ВХІД </b>
                            </button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <b>Забули пароль?</b>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->

<!-- Register Modal -->
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 text-center">
                        <img class="img-responsive"  src="/images/registration-img.png">
                    </div>
                </div>
                <br>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input id="email" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   placeholder="Ім'я" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-1"></div>

                        <div class="col-md-10">
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Пароль" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>

                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control"
                                   placeholder="Повторіть пароль" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-info btn-block">
                                <b>ПРИЄДНАТИСЯ</b>
                            </button>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Register Modal -->


<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
