<?php

//$uname='"'.$_POST['uname'].'"';
//$pass='"'.$_POST['pass'].'"';
//print($uname);
//print($pass);
//include 'Sql/MySqlConnection.php';
//@$SqlConnection = new DataBase();


?>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="Images/mm_icon.ico" type="image/x-icon">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="Css/register.css">
        <script src="JQ/jquery-1.11.0.min.js"></script>
        <script src="JQ/JQ_Temp_01.js"></script>
        <script type="text/javascript" >
            function change_Image(Tag_Id,img)
               {
                  document.getElementById(Tag_Id).src=img;
                  
               }
        </script>
    </head>
    
    
    <body id="sit_Pattern">
        <center>
            <div id="Sit_Body" >
               
             

            <div Id="D_form" class="D_Default">
                
	    <form id="Form" method="post"  >	
                <div id="D_uname">
                        <label id="L_uname">نام کاربری </label>
                        <input id="I_uname" type="text"  name="uname" value="" >
                </div>
                <div id="D_pass">
                        <label id="L_pass">رمز عبور </label>
                        <input id="I_pass" type="password" name="pass" value="">
                </div>
                
               <div Id="D_mobile" class="D_Default">
                        <label id="L_mobile">شماره موبایل </label>
                        <input id="I_mobile"  type="text" name="Mobile" value="">
                </div>
                <div Id="D_Fname" class="D_Default">
                         <label id="L_Fname">نام </label>
                        <input id="I_Fname"  type="text" name="Fname" value="">
                </div>
                
                <div Id="D_Lname" class="D_Default">
                         <label id="L_Lname">فامیل </label>
                        <input id="I_Lname"  type="text" name="Lname" value="">
                </div>
                
                <div Id="D_email" class="D_Default">

                    <label id="L_email">ایمیل</label>
                    <input id="I_email"  type="text" name="Email" value="">  

                </div>
                
                <input  id="I_Fun" type="text"  name="Fun" value="Register">     
                <div id="D_log">
                    <input id="I_log" type="submit"  name="Register" value=""  formaction="sql/Insert.php">
                    </div>
                
            </form>
            </div>
        
            <div Id="D_Footer"  >
                <span id="FT_text">
                    My Mobile Site Designed By Ms.Neshati - May 2014
                </span> 
            
               <div Id="D_Contact" class="D_Default">
                    
                            <div Id="D_FB" class="D_Contact">
                                <a href="#">
                                    <img Id="Img_Icon_Fb" class="Img_Icon_Contact"
                                       alt="Img_Icon_Fb"
                                       src="Images/Contacts_Icon/Icon_FB_G.png"
                                       onmouseover="change_Image(this.id,'Images/Contacts_Icon/Icon_FB.png');"
                                       onmouseout="change_Image(this.id,'Images/Contacts_Icon/Icon_FB_G.png');"

                                    />
                                    <img src="Images/Contacts_Icon/Icon_FB_G.png" style="display:none" />
                                </a>
                            </div> 
                             
                            <div Id="D_G" class="D_Contact">
                                <a href="#">
                                    <img Id="Img_Icon_G" class="Img_Icon_Contact"
                                        alt="Img_Icon_G"
                                        src="Images/Contacts_Icon/Icon_G+_G.png"
                                        onmouseover="change_Image(this.id,'Images/Contacts_Icon/Icon_G+.png');"
                                        onmouseout="change_Image(this.id,'Images/Contacts_Icon/Icon_G+_G.png');"

                                    />
			            <img src="Images/Contacts_Icon/Icon_G+_G.png" style="display:none" />
                                </a>
                                
                            </div> 
                   
                            <div Id="D_In" class="D_Contact">
                                <a href="#">
                                    <img Id="Img_Icon_In" class="Img_Icon_Contact"
                                        alt="Img_Icon_In"
                                        src="Images/Contacts_Icon/Icon_IN_G.png"
                                        onmouseover="change_Image(this.id,'Images/Contacts_Icon/Icon_IN.png');"
                                        onmouseout="change_Image(this.id,'Images/Contacts_Icon/Icon_IN_G.png');"

                                    />
                                    <img src="Images/Contacts_Icon/Icon_IN_G.png" style="display:none" />
                                </a>
                                
                            </div>
                            <div Id="D_Rss" class="D_Contact">
                                <a href="#">
                                    <img Id="Img_Icon_Rss" class="Img_Icon_Contact"
                                        alt="Img_Icon_Rss"
                                        src="Images/Contacts_Icon/Icon_RSS_G.png"
                                        onmouseover="change_Image(this.id,'Images/Contacts_Icon/Icon_RSS.png');"
                                        onmouseout="change_Image(this.id,'Images/Contacts_Icon/Icon_RSS_G.png');"

                                    />
                                    <img src="Images/Contacts_Icon/Icon_RSS_G.png" style="display:none" />
                                </a>
                            </div>
                       
                  </div>
                
            </div>
    </center>
    </body>
</html>
              -

