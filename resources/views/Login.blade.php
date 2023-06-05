<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css') }}">

</head>
<body>
    

 
<section class="login-container">
      <article class="form-container">
        <div class="intro">
          <h1>{!! $mainHeadingText !!}</h1>
          <p>Welcome Back, Please Enter Your details</p>
        </div>

        <form onsubmit="return false;" class="form">
          <div class="email-input">
            <span class="material-icons-round icon-size">  </span>
            <span id="seperator"></span>
            <div class="input-container">
              <p class="sub-title">Email Address</p>
              <input type="email" name="usermail" id="email" />
            </div>
          </div>

          <div class="email-input">
            <span class="material-icons-round icon-size">  </span>
            <span id="seperator"></span>
            <div class="input-container">
              <p class="sub-title">Password</p>
              <input type="password" name="userpass" id="password" />
            </div>
          </div>

          <button id="submit">Continue</button>
        </form>

        <article class="outro">
          <div class="ending">
            <p>Or Continue With</p>
          </div>

          <div class="socials">
            <a class="social-btn" href="" id="g-btn"><p>Google</p></a>
            <a class="social-btn" href="" id="a-btn"><p>Apple</p></a>
            <a class="social-btn" href="" id="fb-btn"><p>Facebook</p></a>
          </div>
        </article>
      </article>
      <article class="login-side-bg"></article>
    </section>

</body>
</html>