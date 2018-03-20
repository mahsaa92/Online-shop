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
                  if(($_POST['Fun'])=='Register')
                   {
                        $sql_In="INSERT INTO `tbl_person`(`Username`, `Password`, `Email`, `Fname`, `Lname`, `Mobile`) " . "VALUES ('".$_POST['uname']."','".$_POST['pass']."','".$_POST['Email']."','".$_POST['Fname']."','".$_POST['Lname']."',".$_POST['Mobile'].")";
                               // print('Register');
                        $Result=mysql_query($sql_In,$SqlConnection->Connction);
             
                        if ($Result)
                            {
                                print
                                ('
                                   <form id="Form" method="post" >

                                        <div id="d_massage">
                                         <cnter>
                                           . ثبت نام شما با موفیت انجام شد
                                         </cnter>
                                       </div>
                                       <div id="D_uname">
                                           <label id="L_uname">نام کاربری </label>
                                           <input id="I_uname" type="text"  name="uname" value="">
                                       </div>
                                       <div id="D_pass">
                                       <label id="L_pass">رمز عبور </label>
                                       <input id="I_pass" type="password"  name="pass" value="">
                                       </div>

                                       <div id="D_log">
                                           <input id="I_log" type="submit"  name="login" value=""  formaction="../My_Mobile.php">
                                         </div>

                                    </form>
                                ');
        


                                             
                       
                            }
                            else 
                            {
                               print
                                ('
                                    <div id="D_Form"  > 
                                    <cnetr>
                                        <div id="d_massage">
                                          
                                           . ثبت نام شما با موفیت انجام نشد
                                                                             
                                        </div>
                                      </cnter>   
                                        <input  id="I_Fun" type="text"  name="Fun" value="Register">  
                                        </br>
                                        </br>
                                        </br>
                               ');
                                        echo "<input  id='I_register' type='button'  onclick='window.location.href=\"../register.php\"' />";
                                    print('
                                    </div>
                                   ');
                            }
          
                   } 
                   if(($_POST['Fun'])=='Insert_B')
                        {
                       //print('Insert_B');
                       
                        $sql_In="INSERT INTO `tbl_brand`(`Name`) " . "VALUES ('".$_POST['Name']."')";
                         //       print($sql_In);
                       $Result=mysql_query($sql_In,$SqlConnection->Connction);
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
                                           . ثبت برند جدید با موفیت انجام شد
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
                                       . ثبت برند جدید با موفیت انجام نشد
                                        </div>
                                     </cnter>
                                    </div> 
                                       
                               ');
                                        
                            }
                            
                        
                   } 
                   
                   
                   
                   if(($_POST['Fun'])=='Insert_M')
                        {
                      //print('Insert_M');
                       
                        $sql_In="INSERT INTO `mobile`( `Brnd_Id`, `Net`, `Camera`, `Soft`, `chpst`, `G_Spcfc`, `grnrt`, `Scrn`, `Memo`, `Clr`, `Sound`, `Status`, `Price`, `Model`, `Image`) " . "VALUES (".$_POST['Brand'].",'".$_POST['Net']."','".$_POST['Camera']."','".$_POST['Soft']."','".$_POST['chpst']."','".$_POST['G_Spcfc']."','".$_POST['grnrt']."','".$_POST['Scrn']."','".$_POST['Memo']."','".$_POST['Clr']."','".$_POST['Sound']."','".$_POST['Status']."','".$_POST['Price']."','".$_POST['Model']."','".$_POST['Image']."')";
                        // print($sql_In);
                       $Result=mysql_query($sql_In,$SqlConnection->Connction);
                       //print($Result);
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
                                           . ثبت گوشی جدید با موفیت انجام شد
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
                                       . ثبت گوشی جدید با موفیت انجام نشد
                                        </div>
                                     </cnter>
                                    </div> 
                                       
                               ');
                                        
                            }
                            
                        
                   } 
                   
                   if(($_POST['Fun'])=='UP_M')
                        {
                      //print('Insert_M');
                       
                       $sql_del="DELETE FROM `mobile` WHERE `Model`='".$_POST['Model']."'";
                        // print($sql_In);
                       $Result=mysql_query($sql_del,$SqlConnection->Connction);
                       //print($Result);
                        $sql_In="INSERT INTO `mobile`( `Brnd_Id`, `Net`, `Camera`, `Soft`, `chpst`, `G_Spcfc`, `grnrt`, `Scrn`, `Memo`, `Clr`, `Sound`, `Status`, `Price`, `Model`, `Image`) " . "VALUES (".$_POST['Brand'].",'".$_POST['Net']."','".$_POST['Camera']."','".$_POST['Soft']."','".$_POST['chpst']."','".$_POST['G_Spcfc']."','".$_POST['grnrt']."','".$_POST['Scrn']."','".$_POST['Memo']."','".$_POST['Clr']."','".$_POST['Sound']."','".$_POST['Status']."','".$_POST['Price']."','".$_POST['Model']."','".$_POST['Image']."')";
                        // print($sql_In);
                       $Result=mysql_query($sql_In,$SqlConnection->Connction);
                       //print($Result);
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
                                           . ویرایش گوشی  با موفیت انجام شد
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
                                       . ویرایش گوشی  با موفیت انجام نشد
                                        </div>
                                     </cnter>
                                    </div> 
                                       
                               ');
                                        
                            }
                            
                        
                   } 
                   
               ?>  
                      
        
 
    </body>
</html>
