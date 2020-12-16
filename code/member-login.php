<?php

    if ( check_post( $_POST, [ 'mem_user', 'mem_pass' ] ) ) {
        if ( md5( $_POST['mem_user'] ) == '21232f297a57a5a743894a0e4a801fc3' && md5( $_POST['mem_pass'] ) == '21232f297a57a5a743894a0e4a801fc3' ) {

            $s                      = '2020-12-17'; //create date salt
            $_SESSION['access_key'] = sha1( $s . $_POST['mem_user'] . $_POST['mem_pass'] );

            $output = '';
            echo '<script>window.location.href="./";</script>';

        } else {

            $output = '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <i class="fa fa-exclamation-triangle"></i> ชื่อผู้ใช้ หรือ รหัสผ่านผิด</div>';
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
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
      <h1 class="login-title text-center">ลงชื่อเข้าใช้งานระบบ</h1>
      <div class="account-wall">
        <form action="" method="post" class="form-signin" name="login" id="login">
          <div class="col-ms-12 text-center">
            <!-- <img class="profile-img" src="https://lh3.googleusercontent.com/OcZqAqKdfVXT_g8_6L69_N1c5L-77qjEt_lLoj8lGRFBWIEZYLl47rGlZ-w3zfHH5CEF7Q=w1366-h768-rw-no" width="100" height="100"> -->
          </div>
          <div id="output"><?php echo $output; ?></div>
          <input name="mem_user" type="text" class="form-control" placeholder="Username" required autofocus>
          <input name="mem_pass" type="password" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-info btn-block" type="submit"><i class="glyphicon glyphicon-log-in"> ลงชื่อเข้าใช้งาน</i>
          </button>
        </form>
        <a class="btn btn-default btn-block" href="https://goo.gl/r9wXQT" target="_blank"><i class="glyphicon glyphicon-book"></i> คู่มือการใช้งาน</a>
        <span class="clearfix"></span>
      </div>
    </div>
  </div>
</div>