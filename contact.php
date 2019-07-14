<?php
  require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<body>
   
   
    <?php
       if(isset($_POST['create'])){
         $uname   = $_POST['uname'];
      
         $email       = $_POST['email'];
         $phonenumber = $_POST['phonenumber'];
         
         $messagearia = $_POST['messagearia'];

         $sql = "INSERT INTO userip (uname, email, phonenumber, messagearia ) VALUES (?,?,?,?)";
        
          $stmtinsert = $db->prepare($sql);

          if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
            { 
               echo "<center><font face='Verdana' size='2' color=red>Invalid email</font></center>";
            }else{
              $stmtinsert->bind_param('ssss',$uname, $email, $phonenumber, $messagearia);
              $result = $stmtinsert->execute();
         
              if($result){
          
                echo '<script> alert("Successfully Submitted!!"); </script>';
              } else{
                  echo "there wew error!!";
              }
               
            }

         
        
       }
      ?>


</body>
</html>