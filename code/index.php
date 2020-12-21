<?php
    session_start();
    error_reporting( E_ALL ^ E_NOTICE );
    mb_internal_encoding( 'UTF-8' );
    // if ($_COOKIE['survey']) {
    //     $GET_SURVEY = true;
    // } else {
    //     if (empty($_GET['f'])) {
    //         $GET_SURVEY = false;
    //     } else {
    //         $GET_SURVEY = true;
    //         setcookie("survey", true);
    //     }
    // }
    // setcookie("survey", 0, 0);
    // print_r( $_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Locker! Docker</title>

  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous"> -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href='https://fonts.googleapis.com/css?family=Kanit&subset=latin,thai' rel='stylesheet' type='text/css'>
  <style type="text/css">
    html,
    body {
      font-family: 'Kanit', sans-serif;
      height: 100%;
      width: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .form-signin {
      /* max-width: 330px; */
      padding: 15px;
      margin: 0 auto;
    }

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }

    .form-signin .checkbox {
      font-weight: normal;
    }

    .form-signin .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    #login-box {
      background-color: rgba(10, 10, 10, 0.6) !important;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.9);
      border: solid 2px rgba(255, 255, 255, 0.2);
    }

    .login-title {
      color: #FFF;
      display: block;
      text-shadow: 0px 2px 2px rgb(31, 31, 36);
    }

    .blur {
      -webkit-filter: blur(35px);
      -moz-filter: blur(35px);
      -o-filter: blur(35px);
      -ms-filter: blur(35px);
      filter: blur(35px)
    }

    #bg {
      transition: all 1s ease-out;
      position: fixed;
      background: no-repeat center center;
      background-size: cover;
      z-index: -1;
      opacity: 0;
      width: 110%;
      height: 110%;
      top: -5%;
      left: -5%
    }
  </style>

  <link rel="shortcut icon" href="favicon.ico">
</head>

<div id="bg"></div>

<?php
    if ( $_SESSION['access_key'] ) {
        echo '<iframe width="100%" height="100%" frameborder="0" src="filemanager/dialog.php?type=2&editor=mce_0&lang=eng&fldr=&akey=' . $_SESSION['access_key'] . '">Loading...</iframe>';
    } else {
        require 'member-login.php';
    }
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script defer src="loadbg.js"></script>

</body>

</html>