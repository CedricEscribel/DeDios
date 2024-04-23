<?php
include "../phpconfig/config.php";
session_start();

if (
   isset($_POST['Emaillog']) &&
   isset($_POST['Passwordlog'])
) {

   $Emaillog = $_POST['Emaillog'];
   $Passwordlog = $_POST['Passwordlog'];

   $data = "Emaillog=" . $Emaillog;

   if (empty($Emaillog)) {
      $em = "Email is required";
      header("Location: ../login.php?error=$em&$data");
      exit;
   } else if (empty($Passwordlog)) {
      $em = "Password is required";
      header("Location: ../login.php?error=$em&$data");
      exit;
   } else {

      $sql = "SELECT * FROM signup WHERE Email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$Emaillog]);

      if ($stmt->rowCount() == 1) {
         $user = $stmt->fetch();

         $Email =  $user['Email'];
         $Password =  $user['Password'];
         $Name =  $user['Name'];
         $UserID =  $user['UserID'];
         $Role =  $user['Role'];

         if ($Email === $Emaillog) {
            if (password_verify($Passwordlog, $Password)) {
               $_SESSION['UserID'] = $UserID;
               $_SESSION['Name'] = $Name;
               $_SESSION['Role'] = $Role;

               header("Location: ../index.php ");
               exit;
            } else {
               $em = "Incorrect Password";
               header("Location: ../login.php?error=$em&$data");
               exit;
            }
         } else {
            $em = "Incorrect Email or Password";
            header("Location: ../login.php?error=$em&$data");
            exit;
         }
      } else {
         $em = "Incorrect Email";
         header("Location: ../login.php?error=$em&$data");
         exit;
      }
   }
} else {
   header("Location: ../login.php?error=error");
   exit;
}
