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

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Checklist! Docker</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Kanit&subset=latin,thai' rel='stylesheet' type='text/css'>
  <style type="text/css">
    html,
    body {
      font-family: 'Kanit', sans-serif;
      height: 100%;
      width: 100%;
      margin: 0;
      padding: 0;
    }

    .form-signin {
      max-width: 330px;
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

    .account-wall {
      margin-top: 20px;
      padding: 30px 0px 20px 0px;
      background-color: rgba(251, 251, 251, 0.8);
      -moz-box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    }

    .login-title {
      font-family: 'Kanit', sans-serif;
      color: #FFF;
      display: block;
      text-shadow: 0px 2px 2px rgb(31, 31, 36);
    }

    .profile-img {
      width: 96px;
      height: 96px;
      margin: 0 auto 30px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
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