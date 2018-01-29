<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">  
<head> 
  <?php include "confing.php";?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<!-- External CSS Document(s) -->
<link rel="stylesheet"  href="css/draw.css" /> 
<title>Online Drawing Application | Web Design Deluxe</title> 
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<!-- Eternal JavaScript Document(s) -->
<script type="text/javascript" src="js/canvas.js"></script> 

<script type='text/javascript'> 
 $(function() { 
 $('#nuke').tipsy({gravity: 's'}); 
 $('#color').tipsy({gravity: 's'}); 
 $('#convertpngbtn').tipsy({gravity: 's'}); 
 $('#resetbtn').tipsy({gravity: 's'}); 
 $('#stroke-subtract').tipsy({gravity: 's'}); 
 $('#stroke-add').tipsy({gravity: 's'});  }); 
 </script>
  <script type="text/javascript">
            window.onload = function() {
                var canvas = document.getElementById("drawingCanvas");
                var ctx = canvas.getContext("2d");
                var img = document.getElementById("img");
                ctx.drawImage(img, 0, 0);
            }
        </script>
         <script type="text/javascript">
            function saveImage() {
                var ua = window.navigator.userAgent;
 
                if (ua.indexOf("Chrome") > 0) {
                    // save image without file type
                    var canvas = document.getElementById("drawingCanvas");
                    document.location.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
 
                    // save image as png
                    var link = document.createElement('a');
                    link.download = "test.png";
                    link.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");;
                    link.click();
                }
                else {
                    alert("Please use Chrome");
                }
            }
        </script>
          <!--<button type="button" onclick="saveImage()"></button>-->
 <style type="text/css">
 body{
  background-image: url("images/school board2.jpg");
 }
 </style>

 </head> 
 <body>
  
<!--egins  Wrapper B-->
  <div id="wrapper"> 
    <div id="blackboardPlaceholder"> 
 <p><!-- Tool Selector -->
	<select name="selector" id="selector">
		<option value="chalk">Chalk</option>
		<option value="line">Line</option>
		<option value="rect">Rectangle</option>
	</select></p> 

<!-- Canvas Begins -->
<canvas id="drawingCanvas" height="532" width="897"> 
	<p class="noscript">We're sorry, this web application is currently not supported with your browser.
	 Please use an alternate browser or download a supported <br />browser. Supported browsers:
	  <a href="http://www.google.com/chrome">Google Chrome</a>, 
	  <a href="http://www.opera.com">Opera</a>, 
	  <a href="http://www.mozilla.com">Firefox</a>, 
	  <a href="http://www.apple.com/safari">Safari</a>, 
	  <br />and <a href="http://www.konqueror.org">Konqueror</a>. Also make sure your JavaScript is enabled.</p></canvas> <!-- Canvas Ends -->
  
  <!-- Save Image -->
<div id="saveWrapper"> 
    <img src="images/save.png" alt="Save Image" width="16" height="16" onclick="saveImage()"title="Save Image" /> 
</div>

 <div id="nuke_printer"><a href="javascript:window.print()">
  <img src="images/printer.png"  alt="Print Page" width="16" height="16" /></a>
</div>
    
   <!-- Clear Canvas Button -->
<div id="nuke" title="Clear Canvas">
       <a href="javascript:location.reload(true)"><img src="images/burn.png" alt="Clear Canvas" width="16" height="16" /></a> 
</div>

 <!-- share Canvas Button -->
<div id="nuke_share" title="share image"> 
   <a href="projectdshare.php"><img src="images/share_icon.png" alt="Clear Canvas" width="16" height="16" /></a>
</div>

 <!-- exit Button -->
<div id="nuke_exit" title="Exite">
  <a href="projectHome.php"><img src="images/exit.png" alt="EXITE" width="16" height="16" /></a>
</div>

<!-- Chalk Pieces -->
<div id="whiteChalk_button"><img src="images/white.png" width="71" height="17" onclick="context.strokeStyle = '#FFFFFF';" /></div>    
<div id="redChalk_button"><img src="images/red.png" width="71" height="17" onclick="context.strokeStyle = '#F00000';" /></div>  
<div id="orangeChalk_button"><img src="images/orange.png" width="71" height="17" onclick="context.strokeStyle = '#ff9600';" /> </div> 
<div id="yellowChalk_button"><img src="images/yellow.png" width="71" height="17" onclick="context.strokeStyle = '#fff600';" /></div> 

<div id="greenChalk_button"><img src="images/green.png" width="71" height="17" onclick="context.strokeStyle = '#48ff00';" /></div> 
<div id="blueChalk_button"><img src="images/blue.png" width="71" height="17" onclick="context.strokeStyle = '#001eff';" /></div> 
<div id="pinkChalk_button"><img src="images/pink.png" width="71" height="17" onclick="context.strokeStyle = '#ff00d2';" /></div> 

     </div> 
  </div> 

<!-- Eraser -->
<div id="eraser" onclick="context.strokeStyle = '#424242'; context.lineWidth = '22';"></div>

<!-- Toggle Stroke Weight -->
  <img src="images/toggle.png" width="16" height="16" id="stroke-subtract" title="Decrease Stroke" onclick="context.lineWidth--;" /> 
  <img src="images/toggle-expand.png" width="16" height="16" id="stroke-add" title="Increase Stroke" onclick="context.lineWidth++;" /> 
  
<!-- Stroke Weight Panel -->
<div id="strokeWeight"> 
  <img src="images/stroke1.png" alt="1.0" class="stroke" width="30" height="32" onclick="context.lineWidth = '1.0';" /> 
  <img src="images/stroke2.png" alt="6.0" class="stroke" width="30" height="32" onclick="context.lineWidth = '6.0';" /> 
  <img src="images/stroke3.png" alt="9.0" class="stroke" width="30" height="32" onclick="context.lineWidth = '9.0';" /> 
  <img src="images/stroke4.png" alt="13.0" class="stroke" width="30" height="32" onclick="context.lineWidth = '13.0';" /> 
</div>

</body> 
</html>