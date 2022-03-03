
<?php
    include_once 'db.inc.php';
    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $barangay_id = mysqli_real_escape_string($conn, $_POST['rbid']);
    $house_no  = mysqli_real_escape_string($conn, $_POST['rhn']);
    $first_name = mysqli_real_escape_string($conn, $_POST['rfn']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['rmn']);
    $last_name = mysqli_real_escape_string($conn, $_POST['rln']);
    $no_of_members = mysqli_real_escape_string($conn, $_POST['rnom']);
    $email = mysqli_real_escape_string($conn, $_POST['re']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['rcn']);
    $street = mysqli_real_escape_string($conn, $_POST['rs']);
    $barangay = mysqli_real_escape_string($conn, $_POST['rb']);
    $v_s = "Verifying";
    $package = mysqli_real_escape_string($conn, $_POST['rp']);
    $qr_code = generateRandomString();


    $sql = "insert into registration (barangay_id, house_no, first_name, middle_name, last_name, no_of_members, email, contact_number, street, barangay, verification_status, package, qr_code) values ('$barangay_id', '$house_no', '$first_name', '$middle_name', '$last_name', '$no_of_members', '$email', '$contact_number', '$street', '$barangay', '$v_s', '$package', '$qr_code');";
    $result = mysqli_query($conn, $sql);
    
    /* include QRBarCode class */
    include "QRBarCode.php";
    $qr = new QRBarCode();
    /* create text QR code  */
    $qr->text($qr_code);
    /* display QR code image */
     $qr->qrCode(250, 'images/AyudaQR');
    
    class QR{
        public function returnQR(){
         return $this->qr_code;
        }
    }
    header("Location: ../register_successfully.php");
    exit();
?>