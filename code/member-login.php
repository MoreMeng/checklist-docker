<?php

    if ( check_post( $_POST, ['mem_user', 'mem_pass'] ) ) {
        if ( md5( $_POST['mem_user'] ) == 'b7b1dc541ba98a721295e3d2a9079e7a' && md5( $_POST['mem_pass'] ) == '1bd0588c0ddcf19912172271c78ce7ff' ) {
            $s = '2021-07-01'; //create date salt

            $_SESSION['access_key'] = sha1( $s . $_POST['mem_user'] . $_POST['mem_pass'] );

            $output = '';
            echo '<script>window.location.href="./";</script>';

        } else {

            $output = '<div class="alert alert-danger fs-3" role="alert"> <i class="fas fa-exclamation-triangle"></i> ชื่อผู้ใช้ หรือ รหัสผ่านผิด</div>';
        }

    }

    /**
     * [check_post Modified : 2014-03-17] check $_POST value is not NULL return true
     * @param  array  $post  [$_POST]
     * @param  array  $check [POST keyname]
     * @return [type]        [boolean]
     */
    function check_post( array $post, array $check ) {
        $cnt = 0;

        if ( !empty( $post ) ) {
            foreach ( $check as $postName ) {
                if ( array_key_exists( $postName, $post ) ) {
                    if ( !empty( $post[$postName] ) ) {
                        $cnt += 1;
                    }

                }
            }
        }

        if ( count( $check ) != $cnt ) {
            return false;
        } else {
            return true;
        }

    }

?>
<div class="d-flex vh-100 align-items-center justify-content-center">
  <!-- <div class="d-inline-flex w-75 align-items-center justify-content-center bg-dark"> -->
    <div class="col-10 col-sm-6 col-lg-4 col-xl-3 mr-3 card text-light align-items-stretch" id="login-box">
      <h1 class="login-title mt-3 mx-auto"><?php echo Q_TITLE; ?></h1>
      <form action="" method="post" class="form-signin mx-auto" name="login" id="login">
        <div class="text-center"> <i class="far fa-user-circle fa-8x"></i></div>

        <div class="mt-3 mb-3">
          <div id="output"><?php echo $output; ?></div>
          <input name="mem_user" type="text" class="form-control form-control-lg" placeholder="Username" autocomplete="off" required autofocus>
          <input name="mem_pass" type="password" class="form-control form-control-lg" placeholder="Password" required>
        </div>
        <div class="d-grid gap-2 mx-auto mb-4">
          <button class="btn btn-outline-danger btn-lg" type="submit"><i class="fas fa-fw fa-sign-in-alt"></i> Sign In </button>
        </div>
      </form>
      <!-- <div class="card-footer"> -->
        <a class="card-footer btn-outline-light text-center" href="https://goo.gl/r9wXQT" target="_blank"><i class="fas fa-fw fa-book"></i> คู่มือการใช้งาน</a>
      <!-- </div> -->
    <!-- </div> -->
  </div>
</div>
