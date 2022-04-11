<?php 
session_start();
include "conn.php";
if(isset($_POST['mail']) && isset($_POST['pass'])){
    
    function validate($data){
         $data=trim($data);
         $data=stripslashes($data);
         $data=htmlspecialchars($data);
         return $data;
    }
     $umail=validate($_POST['mail']);
     $pass=validate($_POST['pass']);
    if(empty($umail)){
     header("locastion :index.php?error=User Name is required");
     exit();
    }else if(empty($pass)){
     header("locastion :index.php?error=Password is required");
     exit();
    }else{
         $sql="SELECT * FROM etudiants WHERE email='$umail' AND pass='$pass'";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)===1){
               $row=mysqli_fetch_assoc($result);
               if($row['email']===$umail && $row['pass']===$pass){
                    header("Location:/page3.html");
               }  else{
                    header("Location: index.php?error=Incorect User name or password");
                     exit();
                 
               }
             
          }  else{

               header("Location: index.php?error=Incorect User name or password");
                exit();
              
          }
     }
}

else{
     header("location: index.php");
     exit();
}
?>
