<?php

//   include '../Sql/MySqlConnection.php';
 //  @$SqlConnection = new DataBase();
?>
<!--<html>   
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="../Css/Css_Menu_App.css">
         <script src="../JQ/jquery-1.11.0.min.js"></script>
   </head>
    

    <body>
        
        <div Id="D_Menu_App" >
            -->
             <div Id="D_Icon_Arrow_Left" class="D_Default">
                       <img Id="Img_Icon_Arrow_Left" class="Arrow_Icon"
                           alt="Img_Icon_Arrow_Left"
                           src="/Menu/Images/App_Icon/Arrow_Icon_Left.png"
                           onclick="ArrowLeft();"
                         />
             </div>
            

            <?php 
					
              //  $Mn_Name='Menu_App';
               // $Mn_Language='1';
               // $Sql_Lng_Symol= 'EN';
    // print($Sql_Lng_Symol);
                                            
                $Sql_Mn_Id = "SELECT `Mn_Id` FROM `Tbl_Menu` WHERE (`Mn_Name`='".$Mn_Name."')";
                $Result_Mn_Id=mysql_query($Sql_Mn_Id,$SqlConnection->Connction);
               if(($Row_Mn_Id= mysql_fetch_object($Result_Mn_Id))==NULL)
                   print("Empty Data");   
                else 
                 {
                    $Sql_Sub_Menu = "SELECT App_Id FROM `Tbl_Menu` WHERE  (`Mn_Parent_Id`='".$Row_Mn_Id->Mn_Id."')";                        
                    $Result_Sub_Menu=mysql_query($Sql_Sub_Menu,$SqlConnection->Connction);
                    $Img_Counter=1;
                    $Img_opacity=0;
                    $App_Claas='Hidden_Object';
           
                     while($Row_Sub_Menu= mysql_fetch_object($Result_Sub_Menu)) 
                         {
                             $Sql_App = "SELECT `App_Id`,`App_Name`, `App_Address`, `App_Dl_Address`,`App_Icon_Active`, `App_Icon_Deactivate` FROM `Tbl_Application` WHERE (`App_Id`='".$Row_Sub_Menu->App_Id."')";    
                             $Result_App=mysql_query($Sql_App,$SqlConnection->Connction);
                             while($Row_App= mysql_fetch_object($Result_App))              
                                   {   
                                         switch ($Img_Counter)
                                          {
                                            case 1:
                                            $Img_opacity=0.3;
                                            break;
                                            case 2:
                                            $Img_opacity=0.7;
                                            break;
                                            case 3:
                                            $Img_opacity=1;
                                            break;
                                            case 4:
                                           $Img_opacity=0.7;
                                            break;
                                            case 5:
                                           $Img_opacity=0.3;
                                            break;
                                           
                                         
                                          }
                                      if($Row_App->App_Address != '#')
                                      {
                                          $A=str_replace('[Language]',$Sql_Lng_Symol,$Row_App->App_Icon_Active);
                                          print('<img  name="Img_App" id="Arr_'.$Img_Counter.'" class="Img_Icon" link="' . $Row_App->App_Address . '"  alt="Img_Icon_App_'.$Row_App->App_Name.'" src="/'.$A.'" />' );
                                          if(Img_Counter<6)
                                             print('<div Id="D_'.$Img_Counter.'"  class="App_Default" >'.'<img class="Right" link="' . $Row_App->App_Address . '" style="width:100%;top:0px; height:100%;opacity:'.$Img_opacity.'" name="Img_App" id="Img_'.$Img_Counter.'"   alt="Img_Icon_App_'.$Row_App->App_Name.'" src="/'.$A.'" /> </div>');
                                          $Img_Counter+=1;
                                      }
                                      elseif ($Row_App->App_Address == '#') 
                                          {
                                           
                                             $A=str_replace('[Language]',$Sql_Lng_Symol,$Row_App->App_Icon_Deactivate);
                                              print('<img name="Img_App" id="Arr_'.$Img_Counter.'" class="Img_Icon" link="' . $Row_App->App_Address . '" alt="Img_Icon_App_'.$Row_App->App_Name.'" src="/'.$A.'" />');
                                           
                                              if(Img_Counter<6)
                                                 print('<div Id="D_'.$Img_Counter.'" class="App_Default" >'.'<img class="Right" link="' . $Row_App->App_Address . '" style="width:100%; height:100%;opacity:'.$Img_opacity.'" name="Img_App" id="Img_'.$Img_Counter.'"   alt="Img_Icon_App_'.$Row_App->App_Name.'" src="/'.$A.'" /> </div>');
                                                 $Img_Counter+=1;           
                                          }     
                                  }
                                      
                         }
                              
                   }         
                      
                 print ('<div id="D_Img_Counter" class="Hidden_Object">'.$Img_Counter.'</div>');
                   
                 
           ?>
            
          
             <div Id="D_Icon_Arrow_Right" class="D_Default">
                
                       <img Id="Img_Icon_Arrow_Right" class="Arrow_Icon"
                           alt="Img_Icon_Arrow_Right"
                           src="/Menu/Images/App_Icon/Arrow_Icon_Right.png"
                           onclick="ArrowRight();"
                         />
             </div> 
 <script>
	$("#D_3").click(function()
        
        {
		//alert("link: " + $(this).attr("link"));
		window.location.replace($("#D_3 .Right").attr("link"));
               
	    });
          function ArrowLeft() 
             {
                 var Img_Counter=($('#D_Img_Counter').text());        
                 var j=1;
                 var App_First=($('#Arr_'+j).attr('src'));
		 var App_First_Link= ($('#Arr_'+j).attr('link'));
                // alert(($('#Arr_'+j).attr('src')));
               //  alert(($('#Arr_'+j).attr('link')));
                 
                 var Img_Str,start_opacity,end_opacity;
                 
                 for(var i=1;i<Img_Counter;i++)    
                    {
                          j=i+1;
                           switch (i)
                               {
                                 case 1:
                                   start_opacity=0.7;
                                   end_opacity=0.3;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width='+($('#D_'+(i+1)).width())+'px;height:'+($('#D_'+(i+1)).height())+'px;left:'+ (($('#D_'+(i+1)).width())-15)+'px;top:-50%;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" /><img id="back" style="opacity:'+end_opacity+';position:absolute;width=100%;height:100%;left:0px;top:0px;" src="'+$('#Arr_'+i).attr('src')+'">';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"-="+(($('#D_'+(i+1)).width())-15)+"px",width:"-="+($('#D_'+(i)).width())+"px",height:"-="+($('#D_'+(i)).height())+"px",top:"0px"}, 1000 ,function(){$("#back").css("display","none");});   
                                 break;
                                 case 2:
                                   start_opacity=1;
                                   end_opacity=0.7;
                                   Img_Str= '<img class="Right" style="opacity'+start_opacity+';position:absolute;width='+($('#D_'+(i+1)).width())+'px;height:'+($('#D_'+(i+1)).height())+'px;left:'+ (($('#D_'+(i+1)).width())-43)+'px;top:-50%;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"-="+(($('#D_'+(i+1)).width())-43)+"px",width:"-="+($('#D_'+(i)).width())+"px",height:"-="+($('#D_'+(i)).height())+"px",top:"0px"}, 1000 );   
                                 break;
                                 case 3:
                                   start_opacity=0.7;
                                   end_opacity=1;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=50%;height:50%;left:'+ (($('#D_'+i).width())+20)+'px;top:'+ (($('#D_'+i).height())/4) +'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"-="+(($('#D_'+i).width())+20)+"px",width:"+=50%",height:"+=50%",top:"0px"}, 1000 );
                                 break;
                                 case 4:
                                   start_opacity=0.3;
                                   end_opacity=0.7;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=50%;height:50%;left:'+ (($('#D_'+i).width())+20)+'px;top:'+ (($('#D_'+i).height())/4) +'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"-="+(($('#D_'+i).width())+20)+"px",width:"+=50%",height:"+=50%",top:"0px"}, 1000 );                    
                                 break;
                                 case 5:
                                   start_opacity=0.3;
                                   Img_Str='<img class="Right"  style="opacity:'+start_opacity+';position:absolute;width=100%;height:100%;top:0px;left:0px;" src="' + App_First + '" link="' + App_First_Link + '" />';
                                   $('#Arr_'+i).attr('src',(App_First));
                                   $('#Arr_'   +i).attr('link',(App_First_Link));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_Menu_App .Left').css('display','none');
                                 break;
                               }                          
                    }
             }
                     

          function ArrowRight() 
             {
                 var Img_Counter=($('#D_Img_Counter').text());        
                 var j=Img_Counter-1;
                 var App_First=($('#Arr_'+j).attr('src'));
		 var App_First_Link= ($('#Arr_'+j).attr('link'));
                 var Img_Str,start_opacity,end_opacity;
                 
                 for(var i=Img_Counter;i>0;i--)    
                    {
                          j=i-1;
                           switch (i)
                               {
                                 case 1:
                                   start_opacity=0.3;
                                   Img_Str='<img class="Right"  style="opacity:'+start_opacity+';position:absolute;width=100%;height:100%;top:0px;left:0px;" src="'+ App_First+'" link="' + App_First_Link + '" />';
                                   $('#Arr_'+i).attr('src',(App_First));
				   $('#Arr_'   +i).attr('link',(App_First_Link));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_Menu_App .Left').css('display','none');
                                 break;
                                 case 2:
                                   start_opacity=0.3;
                                   end_opacity=0.7;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=50%;height:50%;px;left:'+ (($('#D_'+(i-1)).width())-84)+'px;top:'+ (($('#D_'+i).height())/4) +'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"+="+(($('#D_'+(i-1)).width()+20))+"px",width:"+=50%",height:"+=50%",top:"0px"}, 1000 );                    
                                 break;
                                case 3:
                                   start_opacity=0.7;
                                   end_opacity=1;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=50%;height:50%;left:'+ (($('#D_'+(i-1)).width())-148)+'px;top:'+ (($('#D_'+i).height())/4) +'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"+="+(($('#D_'+(i-1)).width())+20)+"px",width:"+=50%",height:"+=50%",top:"0px"}, 1000 );
                                 break;
                                 case 4:
                                   start_opacity=1;
                                   end_opacity=0.7;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=200%;height:200%;left:'+ (($('#D_'+(i-1)).width()+23)*(-1))+'px;top:'+((($('#D_'+(i)).height())/2)*(-1))+'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"+="+(($('#D_'+(i-1)).width()+23))+"px",width:"-=100%",height:"-=100%",top:"0px"}, 1000 );                    
                                 break;
                                 case 5:
                                   start_opacity=0.7;
                                   end_opacity=0.3;
                                   Img_Str= '<img class="Right" style="opacity:'+start_opacity+';position:absolute;width=200%;height:200%;left:'+ (($('#D_'+(i-1)).width()+23)*(-1))+'px;top:'+((($('#D_'+(i)).height())/2)*(-1))+'px;" src="'+ $('#Arr_'+(j)).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" /><img id="back" style="opacity:'+end_opacity+';position:absolute;width=100%;height:100%;left:0px;top:0px;" src="'+$('#Arr_'+i).attr('src')+'" link="'+ $('#Arr_'+(j)).attr('link')+'" />';;
                                   $('#Arr_'   +i).attr('src',$('#Arr_'+j).attr('src'));
				   $('#Arr_'   +i).attr('link',$('#Arr_'+j).attr('link'));
                                   $('#D_'+i).html(Img_Str);
                                   $('#D_'+i+' .Right').animate({opacity:end_opacity,left:"+="+(($('#D_'+(i-1)).width()+23))+"px",width:"-=100%",height:"-=100%",top:"0px"}, 1000,function(){$("#back").css("display","none");});                                         
                                 break;
                               }                          
                    }

             }
                
</script>
            
<!--</div>
        
     
                  
    </body>   
</html>-->
