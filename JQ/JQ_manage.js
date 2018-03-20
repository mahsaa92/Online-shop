/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('html').attr('id', 'none').click(function(){ window.location = "#none"; });

// NOT NEEDED FOR THIS TO WORK
window.location = "#menu";
$('html').mouseenter(function(){ window.location = "#none"; $('html').unbind('mouseenter'); })
