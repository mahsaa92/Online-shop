<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Css/Css_Manage.css">
        <link rel="stylesheet" type="text/css" href="Css/Css_Add_M.css">
        <title></title>
    </head>
    <body>
        
        <div class="Menu">
                        
            <a href="index.php"   class="link Home"     target="_parent"></a>
            <a href="./maneage_page.php"   class="link Setting"     target="_parent"></a>
           </div>
        
        
         <form id="Form" method="post" >

                    <div id="D_Brand">
                        <label id="L_Brand">کد برند </label>
                        <input id="I_Brand" type="text"  name="Brand" value="">
                    </div>
             
                   <div id="D_Model">
                        <label id="L_Model">مدل گوشی </label>
                        <input id="I_Model" type="text"  name="Model" value="">
                    </div>
                    <div id="D_G_Spcfc">
                        <label id="L_G_Spcfc">مشخصات کلی</label>
                        <input id="I_G_Spcfc" type="text"  name="G_Spcfc" value="">
                    </div>
                    <div id="D_chpst">
                        <label id="L_chpst">پردازنده</label>
                        <input id="I_chpst" type="text"  name="chpst" value="">
                    </div> 
                     <div id="D_Scrn">
                        <label id="L_Scrn">صفحه نمایش</label>
                        <input id="I_Scrn" type="text"  name="Scrn" value="">
                    </div> 
                    <div id="D_Memo">
                        <label id="L_Memo">حافظه</label>
                        <input id="I_Memo" type="text"  name="Memo" value="">
                    </div> 
                     <div id="D_Net">
                        <label id="L_Net">شبکه </label>
                        <input id="I_Net" type="text"  name="Net" value="">
                    </div> 
                   <div id="D_Sound">
                        <label id="L_Sound">صدا</label>
                        <input id="I_Sound" type="text"  name="Sound" value="">
                    </div> 
                    <div id="D_Soft">
                        <label id="L_Soft">نرم افزار</label>
                        <input id="I_Soft" type="text"  name="Soft" value="">
                    </div> 
                     <div id="D_Camera">
                        <label id="L_Camera">دوربین</label>
                        <input id="I_Camera" type="text"  name="Camera" value="">
                    </div> 
                    <div id="D_Sound">
                        <label id="L_Status">وضعیت</label>
                        <input id="I_Status" type="text"  name="Status" value="">
                    </div> 
                    <div id="D_Clr">
                        <label id="L_Clr">رنگ</label>
                        <input id="I_Clr" type="text"  name="Clr" value="">
                    </div> 
                    <div id="D_grnrt">
                        <label id="L_grnrt">گارانتی</label>
                        <input id="I_grnrt" type="text"  name="grnrt" value="">
                    </div>    
                   <div id="D_Image">
                        <label id="L_Image">عکس</label>
                        <input id="I_Image" type="text"  name="Image" value="">
                    </div>
                   <div id="D_Price">
                        <label id="L_Price">قیمت</label>
                        <input id="I_Price" type="text"  name="Price" value="">
                    </div>
                            
                    <input  id="I_Fun" type="text"  name="Fun" value="UP_M"> 
                    <div id="D_Insert_B">
                        <input id="I_Insert_B" type="submit"  name="Insert_B" value=" ثبت"  formaction="sql/Insert.php">
                    </div>
                     
                
                  
        </form>
    </body>
</html>