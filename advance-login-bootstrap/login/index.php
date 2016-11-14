<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="../css/style.css" media="screen" title="no title">


    </head>
    <body>
      <div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="pr-wrap">
              <div class="pass-reset">
                <formaction="recover/initiate.php" method="post">
                  <label>
                      Enter the email you signed up with</label>
                  <input type="email" placeholder="Email" />
                  <input type="submit" value="Submit" name="pass-reset-submit" class="pass-reset-submit btn btn-success btn-sm" />
                  </form>
              </div>
          </div>
          <div class="wrap">
              <p class="form-title">
                  Sign In</p>
              <form class="login" method="post" action="process_login.php">
              <input type="text" name="username" placeholder="Username" />
              <input type="password" name="password" placeholder="Password" />
              <input type="submit" name="sign-in" value="Sign In" class="btn btn-success btn-sm" />
              <div class="remember-forgot">
                  <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="remember-me" value="86400" />
                                  Remember Me
                              </label>
                          </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                      <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
                    </div>
                  </div>
              </div>
            </form>
          </div>
          </div>
        </div>
      <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>
    </div>
  </body>
</html>
<script>
$(document).ready(function () {
   $('.forgot-pass').click(function(event) {
     $(".pr-wrap").toggleClass("show-pass-reset");
   });

   $('.pass-reset-submit').click(function(event) {
     $(".pr-wrap").removeClass("show-pass-reset");
   });
});
</script>
