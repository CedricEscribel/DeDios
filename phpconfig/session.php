<?php 

function getUserById($UserID, $db){
    
    $sql = "SELECT * FROM signup WHERE UserID = ?";
	$stmt = $db->prepare($sql);
	$stmt->execute([$UserID]);
    
    if($stmt->rowCount() == 1){
        $signup = $stmt->fetch();
        return $signup;
    }else {
        return 0;
    }
}

 ?>