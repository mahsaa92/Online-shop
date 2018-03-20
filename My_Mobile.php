

<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 

print('yo0o0o0oho0o0o im test1');
$name='1111';
print($name);*/

$name=$_POST['uname'];
$pass=$_POST['pass'];
//print($name);
//print($pass);
?>

<html>
    <head>
        <title>My Mobile</title>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <?php
        
     
       
   if (($name=='admin')and ($pass=='admin'))
     
            {
             
              include 'maneage_page.php';    
            }
 else 
     {
             
                  include 'user_page.php';
               }
                
       
        ?>
    </body>
</html>