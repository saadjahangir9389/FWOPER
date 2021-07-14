<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P-E-R SYSTEM</title>
    <link rel="icon" href="logo.jpg" type="image/ico">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>

      body{
        background-color:rgb(209, 209, 209);
      }
      </style>
  </head>
  <body>
    <div class="container">
      <div class="info">
      <img src="logo1.png" width="350" height="200" class="d-inline-block align-top" alt="">
         <h3 class="loginTitle">Employees Performance Evaluation System</h3>
          <div class="col-md-6 col-md-offset-3">
            <br><br>
                    <h4 class="loginTitle">Log in with your credentials <span class="glyphicon glyphicon-lock"></h4><br/>
                            <div class="block-margin-top">
                              <?php

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>

                              <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">
                                  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
                                  <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
                             </form>
                           </div>
            </div>

      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>


</html>
