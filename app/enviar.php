<?php 

include 'cors-header.php';
include 'config.php';

print_r($_POST);
if(isset($_POST['oleNLForm'])){
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email  = $_POST['email'];
        
        // Create connection
        $link = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DB_NAME);
        
        
        // Check connection
        if($link === false){
            $res = 50000;
        }
        
        
        $stmt = $link->prepare("SELECT * FROM ". TBL_NAME ." WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        if( $stmt->num_rows > 0 )
    {
        $res = 409;
    }else{
    
        $stmt = $link->prepare("INSERT INTO ". TBL_NAME ."(nombre, email) VALUES (?,?)");
        $stmt->bind_param('ss', $name,$email);
    
        if($stmt->execute()){
            $res = 200;
        }else{
            $res = 500;
        }
    
    }
        
        // Close connection
        mysqli_close($link);    
        echo $res;
        
    }else{
    
        echo 500000;
    }
}else{
    echo 500000000;
}




