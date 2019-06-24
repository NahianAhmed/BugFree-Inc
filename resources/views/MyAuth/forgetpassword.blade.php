<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



    <link rel="stylesheet" href="public/asset/login-page-asset/css/style.css">


</head>

<body >
  <div class="logmod" >
  <div class="logmod__wrapper" >
    <span class="logmod__close">Close</span>
    <div class="logmod__container" >

      <ul class="logmod__tabs">
      @if(session('msg'))
      <p class="alert alert-danger text-center">{{session('msg')}}</p>
       @endif
        <h2 style=" text-align: center" data-tabtar="lgm-1"> Recover Password </h2>

      </ul>
      
      <div class="logmod__tab-wrapper" >
      <div class="logmod__tab lgm-1"  >
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email to <strong> Recover account</strong></span>
        </div>
        <div class="logmod__form">




          <form accept-charset="utf-8" action="{{url('/sent_password_reset_link')}}" method="POST" class="simform">
          @csrf
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>

               <input class="string optional" maxlength="255" name="email"  type="email" size="50" required>

              </div>
            </div>

            <div class="simform__actions">
              <input class="sumbit" name="" type="submit" value="Sent reset link" />
              <span class="simform__actions-sidetext">We will sent password reset Link to you email </span>
            </div>
          </form>
        </div>

      </div>

      </div>
    </div>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="public/asset/login-page-asset/js/index.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>


</body>
</html>
