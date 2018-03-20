<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="Images/mm_icon.ico" type="image/x-icon">
        <title>Maneage</title>
       <!-- <link rel="stylesheet" type="text/css" href="Css/Css_Tem_01.css">-->
        <link rel="stylesheet" type="text/css" href="Css/Css_Manage.css">
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
            
        
            <div id="Menu">
                
                <div id="D_Add_B">
                    <?php
                   // $page="include 'login.php'";
                       echo "<input  id='I_register' type='button'  onclick=' window.location.href=\"register.php\"' />";
                     // function open_page()
                       //{
                         // echo "Hello world!";
                           //        }
                                //   open_page();
                                   
                           // echo "<input  id='I_register' type='button'  onclick='open_page()' />"; 
                          // print('<a href="" onclick="p()">Delete</a>');
                    ?>
                
                </div>
                <div id="Up_B">
                
                </div>
                
             
            
           
                <div id="Add_M">
                
                </div>
                <div id="Up_M">
                
                </div>
                <div id="Del_M">
                
                </div>
                
            </div>
            <?php
            print(52);
            
               function p()
                {
                   // include 'login.php';
                   print
                   ('
                       <div id="D_Page">
                             yooohooo
                        </div>
                   ');
                }
            ?> 
            <?php
             print (432);
            ?>
            
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
              

