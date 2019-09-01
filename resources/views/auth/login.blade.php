<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>


<body class="hold-transition login-page">

<div class="login-box">

    <div class="login-logo">
        <h1><b>Welcome!</b></h1>
    </div>


    <div class="card">

        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" value="{{ old('password') }}" placeholder="Password">


                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="row">

                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>


                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>

                </div>

            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="{{route('register')}}" class="btn btn-block btn-primary">
                    <i class=" mr-2"></i>Register a new membership
                </a>
                <a href="{{route('password.request')}}" class="btn btn-block btn-danger">
                    <i class=" mr-2"></i>I forgot my password
                </a>
            </div>

        </div>

    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="{{asset('/')}}plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>
