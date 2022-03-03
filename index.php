<?php
    /* include QRBarCode class */
    include "QRBarCode.php";
    $qr = new QRBarCode();
    /* create text QR code  */
    $qr->text('helloworld');
    /* display QR code image */
    $qr->qrCode(350, 'images/AyudaQR.jpg');

?>
