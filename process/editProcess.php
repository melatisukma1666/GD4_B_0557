<?php

session_start();

if(isset($_POST['save'])){
    
    include('../db.php');
   
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $job = $_POST['job'];
    
    $query = mysqli_query($con,"UPDATE users SET email ='$email', name ='$name', phonenum='$phonenum', job='$job' WHERE id = ".$_SESSION ['user']['id']);
        
    if($query){
        echo
        '<script>
        alert("Save Success");
        window.location = "../page/profilePage.php"
        </script>';
    }else{
        echo
        '<script>
        alert("Save Failed");
        </script>';
    }

}else{
    echo
    '<script>
    window.location = "../page/profilePage.php"
    </script>';
}
?>