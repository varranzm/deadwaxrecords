<?php
error_reporting(0); 
// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic store setup

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dead Wax Records</title>
<link href="estilsdeadwax.css" rel="stylesheet" type="text/css" />
<!--<link rel="stylesheet" type="text/css" href="jqueryslidemenu.css" />-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>-->
<!--<script type="text/javascript" src="jqueryslidemenu.js"></script>-->
<link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />

<!--<script src="lib/jquery-1.9.1.min.js" type="text/javascript"></script>-->
<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="jcart/js/jcart.min.js"></script>

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		// stuff
	});
</script> 

</head>

<body>
	<div id="cabecera">
		<div id="cabeceracentre">
		</div>
		
		<div id="menugeneral">
			<div id="sombra"></div>
			<div class="menusuperior"id="menu">
			<a href="index.html">NEWS</a> | <a href="band_kineticideals.html">BANDS</a> | <a href="releases_kineticideals_this_face.html">RELEASES</a> | <a href="releases_kineticideals_this_face.html">SHOP</a> | <a href="contact.html">CONTACT</a></div>
		  <div id="redes">
	  <div id="botones">
				<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','media/bot_discogs2.jpg',1)">
				<img src="media/bot_discogs1.jpg" name="Image1" width="24" height="23" border="0" id="Image1" /></a>
              	<a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','media/bot_facebook2.jpg',1)">
				<img src="media/bot_facebook1.jpg" name="Image2" width="23" height="23" border="0" id="Image2" /></a>
		  </div>
		</div>
		</div>
	</div>
	<div id="nomgrup">
		<div id="contenedornomgrup">
			<div class="nomgrup" id="grup">KINETIC IDEALS<span class="nomdisco"> - THIS FACE</span></div>
			<div class="lineacreus" id="lineacreus">+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;</div>
  </div>
</div>
	</div>
	<div id="textos">
    <div id="contenedortextos">
			<div class="textos" id="columnaesquerra">
				<img src="mediagroups/relese_kinetical_prova2.jpg" width="665" height="323" /><br /><br />
			  <span class="textosNEGRETA">Dead wax Records</span> 
				is proud to announce the reissue of the debut album by Eleven Pond. Long sought after by collectors, the Rochester, 
				NY band only released a single LP in their time together before dissolving into obscurity. Their sound–a merging of 
				post punk, dark dance and synthpop full of melodic arrangements–reflected the originality of gifted songwriters who 
				met in art school with a shared interest in 4AD and Factory Records.<br /><br />
				In cooperation with the band members, the entire album has been remastered from the original 2-track analogue masters by George Horn at Fantasy Studios in Berkeley. The recordings on this release comprise the band's entire recorded output and the LP includes a 2009 redesign by Jeff Gallea of Eleven Pond: 11×11 cardstock lyrics/artwork sheet, 2 Eleven Pond postcards and 1 Dark Entries Sticker. Eleven Pond officially parted ways in 1987 but nearly a quarter-century later these recordings prove how vital they remain.
				
</div>
	  <div class="textos" id="columnadreta">
				  <div id="caixapreu">
					<div class="preciodisco" id="interiorcaixapreu">14€</div>
			  </div>
		<br />	  
<table border="1">

<tr></tr>
<tr>
<td><form method="post" action="" class="jcart">
<fieldset>
<input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
<input type="hidden" name="item-id" value="DW001" />
<input type="hidden" name="item-name" value="Kinetic Ideal - This Face" />
<input type="hidden" name="item-price" value="14.00" />
<input type="hidden" name="item-qty" value="1" />
<input type="hidden" name="item-url" value="releases_kineticideals_this_face.html" />
<input type="hidden" name="item-type" value="12p" />

<input type="submit" name="my-add-button" value="add to cart" class="button">
</fieldset></form></td>

<td><div id="jcart"><?php $jcart->display_cart();?></div></td>
</tr>
</table>


 <span class="lineacreus"> + + + + + + + + + + + + + + + + + + + + + + </span>
<br />
<h2>
			  <object type="application/x-shockwave-flash" data="music/kineticideals/dewplayer-playlist.swf" width="240" height="200" id="dewplayer" name="dewplayer">
			    <param name="wmode" value="transparent" />
			    <param name="movie" value="music/kineticideals/dewplayer-playlist.swf" />
			    <param name="flashvars" value="showtime=true&autoreplay=true&xml=music/kineticideals/playlist.xml" />
		      </object>
		    </h2>
	  </div>	
	  </div>
	&nbsp;
	</div>
 <div id="blanc">
</div>
<div id="bottom">
	
	<div  id="bottomcentre">
		<div id="logopeu"></div>
	  <div class="menuinferior"id="bottommenuinterior" ><a href="index.html">ABOUT US</a> | <a href="index.html">NEWS</a> | <a href="releases_kineticideals_this_face.html">SHOP</a> | <a href="contact.html">CONTACT</a><br />
        © Dead Wax Records 2013 </div>
	  
   </div>
</div>

</body>
</html>
