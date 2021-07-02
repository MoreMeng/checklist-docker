<?php
    session_start();
    error_reporting( E_ERROR | E_WARNING | E_PARSE );
    mb_internal_encoding( 'UTF-8' );

    define( 'Q_VERSION', '1.0.1' );
    define( 'Q_TITLE', 'COVID-19 LAB Locker ' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="MoreMeng, moremeng@dv4.biz">

  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="subject" content="">
  <meta name="robots" content="noindex,noarchive,snippet">

  <title><?php echo Q_TITLE . Q_VERSION; ?> </title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


    .form-signin .form-control {
      box-sizing: border-box;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="text"] {
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .form-signin input[type="password"] {
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script defer src="loadbg.js"></script>

</body>
</html>
