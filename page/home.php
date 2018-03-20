

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
print($name);
print($pass);
?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
    </head>
    <body>
        <?php
        
     
        if (($name=='user')and($pass=='user'))
              {
             
                  include 'user_page.php';
               }
         elseif (($name=='admin')and ($pass=='admin'))
     
            {
             
              include 'maneage_page.php';    
            }
                
       
        ?>
    </body>
</html>