<?php
include "./config.php";

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Role = $_POST['Role'];

$emailValid = "select * from signup where (Email='$Email');";

$res = mysqli_query($con, $emailValid);

if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    if ($Email == isset($row['Email'])) {
        $em = "email already exists";
        header("Location: ../login.php?errorsign=$em");
    }
} else {

    $Password = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO signup (Name, Email, Password, Role) 
                    VALUES(?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$Name, $Email, $Password, $Role]);
    header("Location: ../login.php?successsign=Your account has been created successfully");
    exit;
}
