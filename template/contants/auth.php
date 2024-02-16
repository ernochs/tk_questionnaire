<?php
include '../includes/config.php';
include_once '../includes/AdminSession.php';
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$chekUser = mysqli_query($conn,"SELECT * FROM users 
LEFT JOIN user_role ON users.role_id=user_role.role_id 
LEFT JOIN location ON location.location_id=users.location_id 
LEFT JOIN pharmacy ON pharmacy.pharmacy_id=users.pharmacy_id
WHERE username= '$username' AND password = '$password'") or die(mysqli_error($conn));
$row = mysqli_fetch_array($chekUser);
$first_name = $row['first_name'];
$middle_name = $row['middle_name'];
$last_name = $row['last_name'];
$contact_number = $row['contact_number'];
$user_name = $row['username'];
$role_name = $row['role_name'];
$user_id =$row['user_id'];
$location_id = $row['location_id'];
$location_name = $row['location_name'];
$pharmacy_id = $row['pharmacy_id'];
$pharmacy_name = $row['pharmacy_name'];
$pharmacy_tel = $row['pharmacy_tel'];
$pharmacy_logo = $row['pharmacy_logo'];
$profile_photo = $row['profile_photo'];
$user_updated_on = $row['user_updated_on'];
$user_created_at = $row['user_created_at'];
$username = $first_name . " ".$last_name;