<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="Images/mm_icon.ico" type="image/x-icon">
        <title>My Moble</title>
        <link rel="stylesheet" type="text/css" href="Css/Css_Tem_01.css">
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
                <div Id="D_Menu_Top" >
                
                     <?php include 'login.php';?>
                </div>
            </div>
        
             

            <div Id="D_Slid" class="D_Default">
			
                <iframe src="slid/Slider86.html"  style="overflow:hidden;height:753px;width:100%;"></iframe>
                                  
            </div>
         
            <div Id="D_Footer"  >
                <span id="FT_text">
                  
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
              

