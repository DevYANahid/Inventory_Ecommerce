<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" />
    <title>Login</title>
  </head>
  <body>
   
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          
          <form action="#" method="post" class="sign-in-form">
            {{ csrf_field() }}
            <h2 class="title">Login</h2>
            @include('admin.layouts._massage')
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
            <img src="{{asset('assets/images/register.svg')}}" class="image" alt="" />
          <div class="content">
            <h3>?</h3>
          </div>
        </div>
       
      </div>
    </div>

    <script src="{{asset('assets/app.js')}}"></script>
  </body>
</html>