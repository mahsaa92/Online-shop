


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Css/Css_Manage.css">
        <link rel="stylesheet" type="text/css" href="Css/Css_Add_B.css">
        <title></title>
    </head>
    <body>
        
        <div class="Menu">
            <a href="index.php"   class="link Home"     target="_parent"></a>
            <a href="./maneage_page.php"   class="link Setting"     target="_parent"></a>
           </div>
        
        
            <form id="Form" method="post" >

                    <div id="D_Name">
                        <label id="L_Name">نام برند </label>
                        <input id="I_Name" type="text"  name="Name" value="">
                    </div>
                    
                    
                    <input  id="I_Fun" type="text"  name="Fun" value="Insert_B"> 
                    <div id="D_Insert_B">
                        <input id="I_Insert_B" type="submit"  name="Insert_B" value=" ثبت"  formaction="sql/Insert.php">
                    </div>
                     
                
                  
                </form>
    </body>
</html>