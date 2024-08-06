<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SWU AMS ADMIN</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="./Styles/styles.css" />
</head>

<body>
  <section class="loginpage d-flex justify-content-center align-items-start vh-100">
    <div class="container align-items-center">
      <div>
        <img src="././Resources/swubg.jpg" class="img-fluid loginbg" />
        <div class="black-film"></div>
      </div>

      <div class="row d-flex justify-content-center text-align-center login">
        <div class="col-4 col-4">
          <div class="login-frame">


            <form action="./Admin/dashboard.php" method="post">
              <div class="row flex-column text-center align-items-center">
                <div class="col-4">
                  <img src="./Resources/swuphinmared.png" class="logoswu img-fluid" alt="swulogo" />
                </div>
                <div class="col pt-3">
                  <h3>Login to your account</h3>
                </div>


                <div class="col">
                  <input type="text" name="txtname" id="name" placeholder="Username" />
                </div>
                <div class="col">
                  <input type="password" name="txtpass" id="pass" placeholder="Password" />
                </div>
                <div class="col">
                  <input type="submit" name="submit" value="Login" href="./Admin/Pages/dashboard.php" />
                </div>
                <div class="p-3">
                  <a href="#"> Forgot password?</a>
                </div>
              </div>
            </form>
          </div>



        </div>
      </div>
      <span>© Southwestern University PHINMA 2024. All Rights Reserved | Design
        by: Kurt Hydein P. Imperial
      </span>
    </div>
  </section>
</body>

</html>