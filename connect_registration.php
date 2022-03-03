<?php
  $barangay_id = $_POST['rbid'];
  $house_no  = $_POST['rhn'];
  $first_name = $_POST['rfn'];
  $middle_name = $_POST['rmn'];
  $last_name = $_POST['rln'];
  $no_of_members = $_POST['rnom'];
  $email = $_POST['re'];
  $contact_number = $_POST['rcn'];
  $street = $_POST['rs'];
  $barangay = $_POST['rb'];
  $v_s = "verifying";
  $package = $_POST['rp'];


  //database connections
  $conn = new mysqli('localhost','root','','ayudasys');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(barangay_id, house_no, first_name, middle_name, last_name, no_of_members, email, contact_number, street, barangay, verification_status, package) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssissssss", $barangay_id, $house_no, $first_name, $middle_name, $last_name, $no_of_members, $email, $contact_number, $street, $barangay, $v_s, $package);
    $execval = $stmt->execute();
  	echo $execval;
  	echo "Registration successfully...";
  	$stmt->close();
  	$conn->close();

  }

?>
