<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print Finity</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header class="header">
      <p class="logo">PrintFinity</p>

      <ul class="navlist mb-0 ps-0">
        <li><a href="">Home</a></li>
        <li><a href="">Product</a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="">Contact</a></li>
      </ul>
      <div class="nav-icon"></div>
    </header>
    <section>
        <div class="content-log">
            <div class="content-img">
                <img src="img/login-illus.png" alt="">
            </div>
            <div class="form-login">
                <div class="formbox-login">
                    <form action="logindb.php" method="post">
                        <h1>Nice to see you again!</h1>
                        <div class="input-box">
                            <input type="text" placeholder="Email or Phone number" name="user"><br>
                        </div>
                        <div class="input-box mb-5">
                            <input type="password" name="pass" placeholder="Enter password">
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox" required /> Remember me</label>
                            <p>Forgot password?</p>
                        </div>

                        <button type="submit" name="submit" class="btn btn-dark w-100" value="login">Log In</button>

                        <hr>

                        <div class="dont-have">
                            <p>Don't have an account? <span><a href="register.html">Sign up</a></span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
  </body>
</html>
