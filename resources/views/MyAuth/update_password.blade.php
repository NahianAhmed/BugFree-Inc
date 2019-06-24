<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
    <title>Recover Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/public')}}/asset/login-page-asset/css/style.css">
</head>

<body >
  <div class="logmod" >
  <div class="logmod__wrapper" >
    <span class="logmod__close">Close</span>
    <div class="logmod__container" >

      <ul class="logmod__tabs">
                
                 @if(count($errors)>0)
                @foreach($errors->all() as $error )
               <p class="alert alert-danger text-center">{{$error}}</p>
                @endforeach
                 @endif


        <h2 style=" text-align: center" data-tabtar="lgm-1"> Recover Password </h2>

      </ul>
      <div class="logmod__tab-wrapper" >
      <div class="logmod__tab lgm-1"  >
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email to <strong> Recover account</strong></span>
        </div>
        <div class="logmod__form">




          <form accept-charset="utf-8" action="{{url('/update-password')}}" method="POST" class="simform">
          @csrf
          <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" name="password" placeholder="Password" type="password" size="50"  required/>
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" name="password_confirmation" placeholder="Repeat password" type="password" size="50"  required />
              </div>
            </div>
           <input type="hidden" value={{$email}} name="email">
           <input type="hidden" value={{$token}} name="token">
            <div class="simform__actions">
              <input class="sumbit" name="" type="submit" value="Update Password" />
              
            </div>
          </form>
        </div>

      </div>

      </div>
    </div>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{asset('/public')}}/asset/login-page-asset/js/index.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>

</body>
</html>
