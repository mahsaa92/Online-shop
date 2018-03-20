
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Css/Css_user.css">
       
        <link rel="stylesheet" type="text/css" href="Css/Css_Update_B.css">
        <title></title>
    </head>
    <body>
        
        <div class="Menu">
            <a href="index.php"   class="link Home"     target="_parent"></a>
            <a href="./user_page.php"   class="link Setting"     target="_parent"></a>
            
          <form id="Form" method="post" >

                    <div id="D_Name_1">
                        <label id="L_Name_1">گوشی اول </label>
                        <input id="I_Name_1" type="text"  name="Name_1" value="">
                    </div>
                    
                    <div id="D_Name_2">
                        <label id="L_Name_2">گوشی دوم </label>
                        <input id="I_Name_2" type="text"  name="Name_2" value="">
                    </div>
                    
                    <div id="D_Com">
                        <input id="I_Com" type="submit"  name="Com" value="مقایسه"  formaction="./Compare.php">
                    </div>
                    
                     
                
                  
                </form>
                      
           </div>
    </body>
</html>
