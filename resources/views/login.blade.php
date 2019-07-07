<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="author" content="W | K - Project Sangar" />
  <title>Login Form Admin</title>

  <link href="public/css/login_style.css" rel="stylesheet" type="text/css">
  <link href="public/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

  <link rel="shortcut icon" href="public/img/logoW-K.png"/>

</head>
<body>
  <div class="logo"></div>
  
<!-- Login -->
  <div class="login"> 
    <h1>Welcome Admin</h1>

    <form class="form" method="post" action="/belajar_laravel/beranda"><br>
      {{ csrf_field() }}

      <p class="field">
        <input type="text" name="u_adm" placeholder="Username or email" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="p_adm" placeholder="Password" required/>
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit"><input type="submit" name="commit" value="Login"></p>

      <p class="remember">
        <input type="checkbox" id="remember" name="remember" />
        <label for="remember"><span></span>Remember Me</label>
      </p>

      <p class="forgot">
        <a href="#">Forgot Password?</a>
      </p>

    </form>
  </div> 
<!--/ Login-->

  <div class="copyright">
    <p>
      Copyright &copy;       
      <script type="text/javascript">
        document.write(new Date().getFullYear());
      </script>, 
      <a style="color: gold" href="" target="_blank"> W | K. </a>
    </p>
  </div>
</body>
</html>
