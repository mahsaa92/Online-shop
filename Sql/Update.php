<?php
//$uname='"'.$_POST['uname'].'"';
//$pass='"'.$_POST['pass'].'"';
//print($_POST['Fun']);
/*print($uname);
print($pass);
print($_POST['Email']);
print($_POST['Fname']);
print($_POST['Lname']);
print($_POST['Mobile']);*/
include 'MySqlConnection.php';
@$SqlConnection = new DataBase();
                            

	//print("INSERT INTO `tbl_person`(`Username`, `Password`, `Email`, `Fname`, `Lname`, `Mobile`) " . "VALUES ('".'uname'."','".'pass'."','".'value3'."','".'value4'."','".'value5'."','".'value6'."')");


?>

<html>
    <head>
        <meta charset="UTF-8">
         
        <link rel="stylesheet" type="text/css" href="../Css/Css_login.css">
        <link rel="stylesheet" type="text/css" href="../Css/Css_Manage.css">
        <link rel="stylesheet" type="text/css" href="../Css/Css_Add_B.css">
       
        <title></title>
    </head>
    <body id="in_pattern">
           <?php
                  
                   if(($_POST['Fun'])=='Update_B')
                        {
                       print('Update_B');
                       
                        $sql_In="UPDATE  `tbl_brand` SET  `Name` =  '".$_POST['U_Name']."' WHERE  `Name` =  '".$_POST['Name']."'";
                                print($sql_In);
                       $Result=mysql_query($sql_In,$SqlConnection->Connction);
                       print($Result);
                       
                       print('
                                <div class="Menu">
                                          <a href="../index.php"   class="link Home"     target="_parent"></a>
                                          <a href="../maneage_page.php"   class="link Setting"     target="_parent"></a>
                                   </div>
                                ' );
             
                        if ($Result)
                            {
                            
                                print
                                ('
                                   <div id="D_Form"  >
                                        <cnter>
                                        <div id="d_massage">
                                           . ویرایش برند جدید با موفیت انجام شد
                                       </dive>
                                       </cnter>
                                    </div>
                                    
                                    
                                ');
        


                                             
                       
                            }
                            else 
                            {
                               print
                                ('
                                    <div id="D_Form"  >
                                     <cnter>
                                        <div id="d_massage">
                                       . ویرایش برند جدید با موفیت انجام نشد
                                        </div>
                                     </cnter>
                                    </div> 
                                       
                               ');
                                        
                            }
                           
                        
                   } 
                   if(($_POST['Fun'])=='Del_M')
                        {
                      //print('Del_M');
                       
                       $sql_del="DELETE FROM `mobile` WHERE `Model`='".$_POST['Model']."'";
                        // print($sql_In);
                       $Result=mysql_query($sql_del,$SqlConnection->Connction);
                      // print($Result);
                       
                       print('
                                <div class="Menu">
                                          <a href="../index.php"   class="link Home"     target="_parent"></a>
                                          <a href="../maneage_page.php"   class="link Setting"     target="_parent"></a>
                                   </div>
                                ' );
             
                        if ($Result)
                            {
                            
                                print
                                ('
                                   <div id="D_Form"  >
                                        <cnter>
                                        <div id="d_massage">
                                           . حذف گوشی  با موفیت انجام شد
                                       </dive>
                                       </cnter>
                                    </div>
                                    
                                    
                                ');
        


                                             
                       
                            }
                            else 
                            {
                               print
                                ('
                                    <div id="D_Form"  >
                                     <cnter>
                                        <div id="d_massage">
                                       . حذف گوشی  با موفیت انجام نشد
                                        </div>
                                     </cnter>
                                    </div> 
                                       
                               ');
                                        
                            }
                            
                        
                   } 
                   
                   
                   
               ?>  
                      
        
 
    </body>
</html>
