

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
include 'Sql/MySqlConnection.php';
@$SqlConnection = new DataBase();
//print($_POST['OK']);
                   //SELECT `Id`, `Brnd_Id`, `Net`, `Camera`, `Soft`, `chpst`, `G_Spcfc`, `grnrt`, `Scrn`, `Memo`, `Clr`, `Sound`, `Status`, `Model`, `Price`, `Image` FROM `mobile` Where `Model`='Lumia-625'


?>



<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Css/Css_user.css">
       
        <link rel="stylesheet" type="text/css" href="Css/Css_Visit_M.css">
        <title></title>
    </head>
    <body>
        
        <div class="Menu">
            <a href="index.php"   class="link Home"     target="_parent"></a>
           <a href="./user_page.php"   class="link Setting"     target="_parent"></a>
           
           <?php 
          $Sql_Model = "SELECT `Id`, `Brnd_Id`, `Net`, `Camera`, `Soft`, `chpst`, `G_Spcfc`, `grnrt`, `Scrn`, `Memo`, `Clr`, `Sound`, `Status`, `Model`, `Price`, `Image` FROM `mobile` Where `Model`='".$_POST['OK']."'";
         // print($Sql_Model);
           $Result_Model=mysql_query($Sql_Model,$SqlConnection->Connction);
               if(($Row_Model= mysql_fetch_object($Result_Model))==NULL)
               {
                   print("Empty Data");
               }
                else 
                  {
                    print('
                            
                   <form id="Form"  >

                    
   
                   <div id="D_Model">
                        <label id="L_Model">مدل گوشی </label>
                        <label id="I_Model" >'.$Row_Model->Model.'</label>
                    </div>
                    <div id="D_G_Spcfc">
                        <label id="L_G_Spcfc">مشخصات کلی</label>
                        <label id="I_G_Spcfc" >'.$Row_Model->G_Spcfc.'</label>
                    </div>
                    <div id="D_chpst">
                        <label id="L_chpst">پردازنده</label>
                        <label id="I_chpst" >'.$Row_Model->chpst.'</label>
                    </div> 
                     <div id="D_Scrn">
                        <label id="L_Scrn">صفحه نمایش</label>
                        <label id="I_Scrn">'.$Row_Model->Scrn.' </label>
                    </div> 
                    <div id="D_Memo">
                        <label id="L_Memo">حافظه</label>
                        <label id="I_Memo" >'.$Row_Model->Memo.'</label>
                    </div> 
                     <div id="D_Net">
                        <label id="L_Net">شبکه </label>
                        <label id="I_Net">'.$Row_Model->Net.' </label>
                    </div> 
                   <div id="D_Sound">
                        <label id="L_Sound">صدا</label>
                        <label id="I_Sound" >'.$Row_Model->Sound.' </label>
                    </div> 
                    <div id="D_Soft">
                        <label id="L_Soft">نرم افزار</label>
                        <label id="I_Soft" >'.$Row_Model->Soft.'</label>
                    </div> 
                     <div id="D_Camera">
                        <label id="L_Camera">دوربین</label>
                        <label id="I_Camera">'.$Row_Model->Camera.'</label>
                    </div> 
                    <div id="D_Sound">
                        <label id="L_Status">وضعیت</label>
                        <label id="I_Status" >'.$Row_Model->Status.' </label>
                    </div> 
                    <div id="D_Clr">
                        <label id="L_Clr">رنگ</label>
                        <label id="I_Clr">'.$Row_Model->Model.'</label>
                    </div> 
                    <div id="D_grnrt">
                        <label id="L_grnrt">گارانتی</label>
                        <label id="I_grnrt">'.$Row_Model->Clr.' </label>
                    </div>    
                 
                   <div id="D_Price">
                        <label id="L_Price">قیمت</label>
                        <label id="I_Price" >'.$Row_Model->Price.'</label>
                    </div>
                            
                                 
                      </form>
                            ');
                    print('
                      <div id="D_Image">'.'<img id="Image" '. '" style="width:100%;top:0px; height:100%;"src="/mobil/Images/Mobile/'.$Row_Model->Image.'" />
                    </div>
                            ');
                }
                
                ?>      
           </div>
        
        
                
        
    </body>
</html>
