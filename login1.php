<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <title>Samantha | Login</title>
   <?php
  $imagePaths = "image/SJM_Icon.png";
  ?>
  <link rel="icon" href="<?php echo $imagePaths; ?>" type="image/png" />
  <?php
  $imagePath = "image/Samantha1.png";
  ?>
  <link rel="icon" href="<?php echo $imagePath; ?>" type="image/png" />
  <style>
    .side-image {
      background-image: url("<?php echo $imagePath; ?>");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      position: relative;
      border-radius: 10px 0 0 10px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="container main">
      <div class="row">
        <div class="col-md-6 side-image"></div>
        <div class="col-md-6 right">
          <form method="post" action="login.php">
            <div class="input-box">
              <header>Login</header>
              <div class="input-field">
                <input type="text" class="input" id="email" name="email" required autocomplete="off" />
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="password" name="password" required />
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input type="submit" class="submit" value="Login" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>