<?php
    include_once 'db.inc.php';
    $username = mysqli_real_escape_string($conn, $_POST['p']);
    $password  = mysqli_real_escape_string($conn, $_POST['pc']);