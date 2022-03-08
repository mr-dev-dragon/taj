
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet" />
        <title>log-in</title>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

</head>
<body>
<div class='mt-5'></div>
    <div style='height: 2vh;'></div>
    <main class='d-grid gap-2 col-4  mx-auto'>
    <div class="">
      <!-- Modal body -->
      <div class="">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" data-mdb-toggle="pill" href="#navbarLogin-login" role="tab" aria-selected="true" style=" background:#D3A589;">Login</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link " data-mdb-toggle="pill" href="#navbarLogin-signup" role="tab" aria-selected="false" style=" background:#D3A580;">Register</a>
          </li>
        </ul>

        <!-- Pills panels -->
        <div class="tab-content">

          <!--Panel 1-->
          <div class="tab-pane fade in" id="navbarLogin-login" role="tabpanel">

            <!-- Default form login -->
            <form id="login" class="text-center needs-validation" action="cpu.php" method="post" name="login-form">

              <p class="status"></p>

              <div class="text-center mb-3">
                <div class="wp-social-login-widget">
                    <div class="wp-social-login-connect-with">Connect with:</div>
                    <div class="wp-social-login-provider-list">
                        <a rel="nofollow" name="undefind" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook btn  btn-floating mx-1 ripple-surface" data-provider="Facebook" role="button" style="min-width: 37px; background:#D3A589;"><i class="fab fa-facebook-f"></i></a>
                        <a rel="nofollow" name="undefind" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google btn  btn-floating mx-1" data-provider="Google" role="button"  style=" background:#D3A589;"><i class="fab fa-google"></i></a>
                        <a rel="nofollow" name="undefind" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter btn  btn-floating mx-1" data-provider="Twitter" role="button"  style=" background:#D3A589;"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
              </div>

              <p class="text-center">or:</p>
              <!-- Email input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="text" id="username" class="form-control active" name="username" required="" autocompleted="">
                <label class="form-label" for="username" style="margin-left: 0px;">Your e-mail or username</label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 146.4px;"></div><div class="form-notch-trailing"></div></div></div>

              <!-- Password input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="password" id="password" class="form-control active" name="password" autocomplete="off" required="" autocompleted="">
                <label class="form-label" for="password" style="margin-left: 0px;">Your password</label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 92.8px;"></div><div class="form-notch-trailing"></div></div></div>
              <!-- 2 column grid layout for inline styling -->
              <div class="justify-content-center mb-4">
                  <a name="undefind">Forgot password?</a>
              </div>

              <button class="btn  btn-block mb-4" type="submit" value="LOGIN" name="log_in" style=" background:#D3A589;">Sign in</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Not a member? <a name="undefind" class="auth-modal-toggle" data-auth-modal-tab="sign-up">Register</a></p>
              </div>

            </form>
            <!-- Default form login -->
          </div>
          <!--/.Panel 1-->

          <!--Panel 2-->
          <div class="tab-pane fade active" id="navbarLogin-signup" role="tabpanel">

            <!-- Default form register  -->
            <form id="register" class="text-center needs-validation" action="cpu.php" method="post" name="register-form">


            
              <!-- farst Name input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="text" id="f-name" class="form-control" name="f-name" required="" minlength="3" >
                <label for="f-name" class="form-label" style="margin-left: 0px; ">Your ferst name</label>
                <div class="invalid-feedback">Please provide  your farst name.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- last name input -->
                <div class="form-outline form-auth-mdb mb-4">
                <input type="text" id="l-name" class="form-control" name="l-name" required="" minlength="3">
                <label for="l-name" class="form-label" style="margin-left: 0px;">Your last name</label>
                <div class="invalid-feedback">Please provide  your last name.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 93.6px;"></div><div class="form-notch-trailing"></div></div></div>

                            <!-- adress input -->
                <div class="form-outline form-auth-mdb mb-4">
                <input type="text" id="adriss" class="form-control" name="adriss" required="" minlength="6">
                <label for="adriss" class="form-label" style="margin-left: 0px;">Your adress</label>
                <div class="invalid-feedback">Please provide  your adress.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 93.6px;"></div><div class="form-notch-trailing"></div></div></div>

                            <!--phone input -->
                <div class="form-outline form-auth-mdb mb-4">
                <input type="number" id="phone" class="form-control" name="phone" required="" minlength="10">
                <label for="phone" class="form-label" style="margin-left: 0px;">Your phone</label>
                <div class="invalid-feedback">Please provide  your a valid phone.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 93.6px;"></div><div class="form-notch-trailing"></div></div></div>


              <!-- Email input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="email" id="email" class="form-control" name="email" required="">
                <label for="email" class="form-label" style="margin-left: 0px;">Your email</label>
                <div class="invalid-feedback">Please provide a valid email.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>

              <!-- Password input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="password" id="password1" class="form-control" name="password1" autocomplete="off" required="" >
                <label for="password1" class="form-label" style="margin-left: 0px;">creat a password</label>
                <div class="invalid-feedback">Please provide a password.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 92.8px;"></div><div class="form-notch-trailing"></div></div></div>

              <!-- Repeat Password input -->
              <div class="form-outline form-auth-mdb mb-4">
                <input type="password" id="password2" class="form-control" name="password2" autocomplete="off" required="" >
                <label for="password2" class="form-label" style="margin-left: 0px;">Repeat password</label>
                <div id="repeat-password-feedback" class="invalid-feedback">Please repeat the password creactly.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 106.4px;"></div><div class="form-notch-trailing"></div></div></div>
               <!--img input -->
               <div class="form-outline form-auth-mdb mb-4">
                <input type="url" id="img-" class="form-control  " name="img" autocomplete="off" required="" >
                <label for="img-" class="form-label" style="margin-left: 0px;">inter your profile img url</label>
                <div id="repeat-password-feedback" class="invalid-feedback">Please inter your profile img url creactly.</div>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 106.4px;"></div><div class="form-notch-trailing"></div></div></div>
               <!-- Subscribe checkbox -->
              

              <!-- Subscribe checkbox -->

              <button  class="btn  btn-block mb-3" id="AJAXAuthRegisterBtn" type="submit" value="SIGNUP" name="log_up" style=" background:#D3A589;">
                Sign up
              </button>

            </form>
            <!-- Default form register  -->

          </div>
          <!--/.Panel 2-->

        </div>
        <!-- Pills panels -->

      </div>

      </div>
    </div>
    </main>
  <script src="cpu.js"></script>
</body>
</html>