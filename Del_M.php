


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Css/Css_Manage.css">
        <link rel="stylesheet" type="text/css" href="Css/Css_Update_B.css">
        <title></title>
    </head>
    <body>
        
        <div class="Menu">
            <a href="index.php"   class="link Home"     target="_parent"></a>
            <a href="./maneage_page.php"   class="link Setting"     target="_parent"></a>
           </div>
        
        
            <form id="Form" method="post" >

                    <div id="D_Name">
                        <label id="L_Name">مدل گوشی </label>
                        <input id="I_Name" type="text"  name="Model" value="">
                    </div>
                    
                    <input  id="I_Fun" type="text"  name="Fun" value="Del_M"> 
                    <div id="D_Update_B">
                        <input id="I_Update_B" type="submit"  name="Update_B" value="حذف"  formaction="sql/Update.php">
                    </div>
                     
                
                  
                </form>
    </body>
</html>