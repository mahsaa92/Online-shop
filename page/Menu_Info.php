<?php

//      include '../Sql/MySqlConnection.php';
  //    @$SqlConnection = new DataBase();
?>
<!--<html>   
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--<link rel="shortcut icon" href="Images/P Icon.ico" type="image/x-icon">
       <title>Persian Land Of Services</title>-->
     <!--     <link rel="stylesheet" type="text/css" href="../Css/css_Menu_Info.css">
   <!--  <script src="../../JQ/jquery-1.11.0.min.js"></script>
        <script src="../../JQ/JQ_Temp_01.js"></script>
        <script type="text/javascript" >
            function change_Image(Tag_Id,img)
               {
                 
                 //  alert(Tag_Id);
                document.getElementById(Tag_Id).src=img;
                  
               }
        </script>    -->
   <!--   </head>
    

    <body>
      <div Id="D_Menu_Info" >-->
         
           <?php 
					
            // $Mn_Name='Menu_Info';
             //$Mn_Language='EN';
           //  print("SELECT `Mn_Id`  FROM `Tbl_Menu` WHERE (`Mn_Name`='".$Mn_Name."')and(`Mn_Language`='EN'");
            //SELECT `Mn_Name`, `Mn_Caption` FROM `Tbl_Menu` WHERE  (`Mn_Parent_Id`='1')and(`Mn_Language`='EN')                        
       //   $D_Menu_left=0;
     
        /*     for ($i = 1; $i <5; $i++) 
           {
            print('<div id="D_Menu'.$i.'" class="D_Default">'.$i.'</div>');
          //  $("D_Menu".$i."css(left".($D_Menu_left+5)."px)");
          
           } */
            
                $Sql_Mn_Id = "SELECT `Mn_Id`  FROM `Tbl_Menu` WHERE (`Mn_Name`='".$Mn_Name."')";
              //  print($Sql_Mn_Id);  
                $Result_Mn_Id=mysql_query($Sql_Mn_Id,$SqlConnection->Connction);
               // print($Result_Mn_Id); 
                 if(($Row_Mn_Id= mysql_fetch_object($Result_Mn_Id))==NULL)
                   print("Empty Data");   
                else 
                 {
                    
                    $Sql_Sub_Menu = "SELECT `Mn_Name`, `Mn_Caption` FROM `Tbl_Menu` WHERE  (`Mn_Parent_Id`='".$Row_Mn_Id->Mn_Id."')and(`Lng_Id`='".$Mn_Language."')";                        
                    // print($Sql_Sub_Menu);  
                    $Result_Sub_Menu=mysql_query($Sql_Sub_Menu,$SqlConnection->Connction);
                   // if(($Row_Sub_Menu= mysql_fetch_object($Result_Sub_Menu))==NULL)
                    //  print("Empty Data");   
                   //else
                    //print(58);
                    $Sql_Mn_COUNT = "SELECT  COUNT( * )as COUNT FROM `Tbl_Menu` WHERE (`Mn_Parent_Id`='".$Row_Mn_Id->Mn_Id."')and(`Lng_Id`='".$Mn_Language."')";    
                 //  print($Sql_Mn_COUNT);
                    $Result_Mn_COUNT=mysql_query($Sql_Mn_COUNT,$SqlConnection->Connction);
                    $Row_Mn_COUNT= mysql_fetch_object($Result_Mn_COUNT);
                   $COUNT= $Row_Mn_COUNT->COUNT;
            //print($COUNT);
                      while($Row_Sub_Menu= mysql_fetch_object($Result_Sub_Menu))
                      {
                         
                          if($COUNT>1)
                            {
                             print('<div id="D_Menu'.$Row_Sub_Menu->Mn_Name.'" class="D_Menu_Info_Sub"> '.$Row_Sub_Menu->Mn_Caption.' | </div>');      
                             $COUNT-=1;
                            }
                          else if($COUNT==1)
                           
                            print('<div id="D_Menu'.$Row_Sub_Menu->Mn_Name.'" class="D_Menu_Info_Sub"> '.$Row_Sub_Menu->Mn_Caption.' </div>');      
                      }         
                 }
                 
           ?>
          
      <!--  </div>     
                  
    </body>   
</html>-->
