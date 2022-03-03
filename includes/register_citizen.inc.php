
<?php
    include_once 'db.inc.php';
    $barangay_id = mysqli_real_escape_string($conn, $_POST['rbid']);
    $house_no  = mysqli_real_escape_string($conn, $_POST['rhn']);
    $first_name = mysqli_real_escape_string($conn, $_POST['rfn']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['rmn']);
    $last_name = mysqli_real_escape_string($conn, $_POST['rln']);
    $no_of_members = mysqli_real_escape_string($conn, $_POST['rnom']);
    $street = mysqli_real_escape_string($conn, $_POST['rs']);
    $barangay = mysqli_real_escape_string($conn, $_POST['rb']);



    $sql = "insert into personal_information (barangay_id, house_no, first_name, middle_name, last_name, no_of_members, street, barangay) values ('$barangay_id', '$house_no', '$first_name', '$middle_name', '$last_name', '$no_of_members', '$street', '$barangay');";
    $result = mysqli_query($conn, $sql);
    

    header("Location: ../register_citizen.html?register=success");
?>