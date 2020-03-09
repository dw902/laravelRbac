<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admilte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/admilte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
<!--  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/admilte/index2.html"><b>博客后台管理系统</b>EVA</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">登录开始您的操作</p>

      <form action="/admin/login" method="post">
          {{ csrf_field() }}
        <div class="input-group mb-3">
          <input  name='name' type="text" class="form-control" placeholder="用户名">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input  name='password' type="password" class="form-control" placeholder="密码">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                记住密码
              </label>
            </div>
          </div>
          <!-- /.col -->
            @include('admin.layout.error')
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">登录</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<!--      <div class="social-auth-links text-center mb-3">-->
<!--        <p>- OR -</p>-->
<!--        <a href="#" class="btn btn-block btn-primary">-->
<!--          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook-->
<!--        </a>-->
<!--        <a href="#" class="btn btn-block btn-danger">-->
<!--          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+-->
<!--        </a>-->
<!--      </div>-->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">忘记密码</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">注册一个新的账户</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/admilte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admilte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admilte/dist/js/adminlte.min.js"></script>

</body>
</html>
