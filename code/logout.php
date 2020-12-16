<?php
@session_start();
@session_destroy();

if (isset($_GET['continue']))
    echo '<script>window.location.href="'.$_GET['continue'].'";</script>';
else
    echo '<script>window.location.href="../";</script>';
?>