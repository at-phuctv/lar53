<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Registration Page</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('/assets/fonts/font-awesome/font-awesome.min.css') }}">

        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('/assets/fonts/ionicons/ionicons.min.css') }}">

        <!-- web-icons -->
        <link rel="stylesheet" href="{{ asset('/assets/fonts/web-icons/web-icons.min.css') }}">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('/assets/dist/css/AdminLTE.min.css') }}">
        <link href={!!asset('/css/common.css')!!} rel="stylesheet">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="{{ asset('/assets/dist/css/skins/skin-blue.min.css') }}">
    </head>
    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="{{ url('/register') }}"><b>Admin</b>LTE</a>
            </div>

            <div class="register-box-body">
                <p class="login-box-msg">Register a new membership</p>

                <form  role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="glyphicon glyphicon-envelope form-control-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                        <span class="glyphicon glyphicon-envelope form-control-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        @if ($errors->has('password'))
                        <span class="glyphicon glyphicon-envelope form-control-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                        @if ($errors->has('password_confirmation'))
                        <span class="glyphicon glyphicon-envelope form-control-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                        Google+</a>
                </div>

                <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.register-box -->
    </body>
</html>
<!-- jQuery 2.1.4 -->
<script src="{!! asset('/assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{!! asset('/assets/bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! asset('/js/icheck.min.js')!!}"></script>
<script>
$(function () {
$('input').iCheck({
checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
        });
});
</script>