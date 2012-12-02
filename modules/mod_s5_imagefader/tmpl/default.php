<?php
/**
@version 3.0: mod_S5_imagefader
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
*/
?>
<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(strrpos($br,"msie 6") > 1) {
	$iss_ie6 = "yes";
} else {
	$iss_ie6 = "no";
}

$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(strrpos($br,"msie 7") > 1) {
	$iss_ie7 = "yes";
} else {
	$iss_ie7 = "no";
}
?>
<?php if ($jseffectstyle == "slide") { ?>	
<style type="text/css">
     /* Overriding the default Slideshow styles in order to achieve a custom effect */
    .slideshow-images-visible { margin-left: 0; }	
    .slideshow-images-prev { margin-left: 400px; }
    .slideshow-images-next { margin-left: -400px; }
</style>
<?php } ?>
		
<?php if ($s5_imagefaderver == "0") { ?>
	<script type="text/javascript">
	//<![CDATA[
		document.write('<link href="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/slideshow.css" rel="stylesheet" type="text/css" media="screen" />');
	//]]>
	</script>
	<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/slider.js"></script>
	<?php if ($jseffectstyle == "zoom") { ?>
	<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/zoompan.js"></script>
	<?php } else if ($jseffectstyle == "slide") {?>
	<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/push.js"></script>
	<?php } ?>
	<script type="text/javascript">	
	//<![CDATA[
		window.addEvent('domready', function(){
		var myShow = new <?php if ($jseffectstyle == "zoom") { ?>Slideshow.KenBurns<?php } else if ($jseffectstyle == "slide") { ?>Slideshow.Push<?php } else {?>Slideshow<?php } ?>('show', [
			<?php //Gets all images from directory that have a suffix of m before their extension
			$s5_if_files = glob("".$imageurldirectory."/*m.*"); 

			$s5_if_numberofimages = count($s5_if_files);

			for ($s5_if_diri=0; $s5_if_diri<count($s5_if_files); $s5_if_diri++) { 
				$s5_if_dirfiles = "".$imageurldirectory."/";
				$s5_urlandimagename = $s5_if_files[$s5_if_diri]; 
				$s5_if_dirfiles = str_replace($s5_if_dirfiles, "", $s5_urlandimagename);
			if ($s5_if_diri >= ($s5_if_numberofimages - 1)) {
				print "'".$s5_if_dirfiles."'";
			} else {
				print "'".$s5_if_dirfiles."',";}
			}
		?>], { <?php if ($overlaycontrols == "0") { ?>controller: true,<?php } ?> height: <?php echo ($height) ?>, hu: '<?php echo $LiveSite?>/<?php echo $imageurldirectory ?>/', <?php if ($imageoverlap == "0") { ?>overlap: true,<?php } else {?> overlap: false,<?php } ?>delay:<?php echo $display_time; ?>, duration:<?php echo $tween_time; ?>, resize: false, <?php if ($jseffectstyle == "slide") { ?>transition: 'back:in:out',<?php } ?> width: <?php echo ($width) ?>, <?php if ($thumbnails == "0") { ?>thumbnails: true<?php } ?> });
		});
	//]]>	
	</script>
	<div id="show" class="slideshow" style="background:#<?php echo $background ?>"></div>
<?php } else { ?>

	<script type="text/javascript">
	//<![CDATA[
		document.write('<link href="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/style.css" rel="stylesheet" type="text/css" media="screen" />');
	//]]></script>
	<?php
	echo "<script language=\"javascript\" type=\"text/javascript\" >var display_time = ".$display_time.";</script>";
	echo "<script language=\"javascript\" type=\"text/javascript\" >var tween_time = ".$tween_time.";</script>";?>
	<script type="text/javascript">
	//<![CDATA[
		document.write('<style type="text/css">.s5_button_if {background:url(<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/nonactive.png) no-repeat;}</style>');
	//]]></script>

	<?php if ($iss_ie6 == "yes") { ?>
	<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/faderie6.js"></script>
	<?php } else { ?>
	<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/fader.js"></script>
	<?php } ?>

	<?php if ($s5_imagefaderstyle == "0") { ?>

	<div style="height:<?php echo ($height) + 0 ?>px; width:<?php echo ($width) ?>px; overflow:hidden; background:#<?php echo $background ?>">
		<div id="s5_wrapper_if" style="position:absolute;z-index:1;overflow:hidden;height:<?php echo ($height) + 0 ?>px; width:<?php echo ($width) ?>px;">
			<div style="background-image: url(<?php echo $picture1 ?>);width: <?php echo $width ?>px; height:<?php echo $height ?>px;" id="blenddiv">
				<img src="<?php echo $picture1 ?>" style="border: 0 none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" id="blendimage" alt="" class="reflect"/></img>
			</div>
			<div style="height:20px;margin-top:<?php echo ($height) - 26 ?>px;position:absolute;width:<?php echo ($width) - 5?>px;z-index:2;">
				<?php if ($picture10 != "") { ?>
					<div class="s5_button_if" id="picture9_if" onclick="next_if_10();"></div>
				<?php } ?>	
				<?php if ($picture9 != "") { ?>
					<div class="s5_button_if" id="picture8_if" onclick="next_if_9();"></div>
				<?php } ?>	
				<?php if ($picture8 != "") { ?>
					<div class="s5_button_if" id="picture7_if" onclick="next_if_8();"></div>
				<?php } ?>
				<?php if ($picture7 != "") { ?>
					<div class="s5_button_if" id="picture6_if" onclick="next_if_7();"></div>
				<?php } ?>	
				<?php if ($picture6 != "") { ?>
					<div class="s5_button_if" id="picture5_if" onclick="next_if_6();"></div>
				<?php } ?>
				<?php if ($picture5 != "") { ?>
					<div class="s5_button_if" id="picture4_if" onclick="next_if_5();"></div>
				<?php } ?>
				<?php if ($picture4 != "") { ?>
					<div class="s5_button_if" id="picture3_if" onclick="next_if_4();"></div>
				<?php } ?>
				<?php if ($picture3 != "") { ?>
					<div class="s5_button_if" id="picture2_if" onclick="next_if_3();"></div>
				<?php } ?>
				<?php if ($picture2 != "") { ?>
					<div class="s5_button_if" id="picture1_if" onclick="next_if_2();"></div>
				<?php } ?>
				<div class="s5_button_if" id="picture" onclick="next_if_1();"></div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function picture1_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture2 != "") { ?>picture2('picture2');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture2_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture3 != "") { ?>picture3('picture3');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture3_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture4 != "") { ?>picture4('picture4');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture4_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture5 != "") { ?>picture5('picture5');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture5_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture6 != "") { ?>picture6('picture6');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture6_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture7 != "") { ?>picture7('picture7');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture7_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture8 != "") { ?>picture8('picture8');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture8_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture9 != "") { ?>picture9('picture9');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function picture9_next(id) {
		if (s5_thumbchangeon_if == 0) {
		<?php if ($picture10 != "") { ?>picture10('picture10');
		<?php } else { ?>picture1('picture1'); <?php } ?>}}

		function s5_imageoneloadit() {
		picture1('picture1');
		}

		window.setTimeout(s5_imageoneloadit,400);
	</script>
<?php } ?>



<?php if ($s5_imagefaderstyle == "1") { ?>

<?php if ($reflection == "0") { ?>
<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/reflection.js"></script>


<div style="height:<?php echo ($height) + 55 ?>px; width:<?php echo $width ?>px; overflow:hidden; background:#<?php echo $background ?>">

<?php if ($picture1 != "") { ?>
<div id="picture1" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture1link != "") { ?>
<a href="<?php echo $picture1link ?>" target="<?php echo $picture1target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture1 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture1link != "") { ?>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture2 != "") { ?>
<div id="picture2" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture2link != "") { ?>
<a href="<?php echo $picture2link ?>" target="<?php echo $picture2target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture2 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture2link != "") { ?>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture3 != "") { ?>
<div id="picture3" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture3link != "") { ?>
<a href="<?php echo $picture3link ?>" target="<?php echo $picture3target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture3 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>px"></img>
<?php if ($picture3link != "") { ?>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture4 != "") { ?>
<div id="picture4" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture4link != "") { ?>
<a href="<?php echo $picture4link ?>" target="<?php echo $picture4target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture4 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture4link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture5 != "") { ?>
<div id="picture5" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; ">
<?php if ($picture5link != "") { ?>
<a href="<?php echo $picture5link ?>" target="<?php echo $picture5target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture5 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture5link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture6 != "") { ?>
<div id="picture6" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture6link != "") { ?>
<a href="<?php echo $picture6link ?>" target="<?php echo $picture6target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture6 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture6link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture7 != "") { ?>
<div id="picture7" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture7link != "") { ?>
<a href="<?php echo $picture7link ?>" target="<?php echo $picture7target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture7 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture7link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture8 != "") { ?>
<div id="picture8" style="padding:0px; display:block; height:<?php echo ($height) + 55?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture8link != "") { ?>
<a href="<?php echo $picture8link ?>" target="<?php echo $picture8target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture8 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture8link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>


<?php if ($picture9 != "") { ?>
<div id="picture9" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture9link != "") { ?>
<a href="<?php echo $picture9link ?>" target="<?php echo $picture9target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture9 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture9link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>


<?php if ($picture10 != "") { ?>
<div id="picture10" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden;">
<?php if ($picture10link != "") { ?>
<a href="<?php echo $picture10link ?>" target="<?php echo $picture10target ?>" style="cursor:pointer">
<?php } ?>
<img style="border:none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" class="reflect rheight15" alt="" src="<?php echo $picture10 ?>" height="<?php echo $height ?>px" width="<?php echo $width ?>px"></img>
<?php if ($picture10link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>

</div>
<?php }  else {?>


<div style="height:<?php echo $height ?>px; width:<?php echo $width ?>px; overflow:hidden; background:#<?php echo $background ?>">

<?php if ($picture1 != "") { ?>
<div id="picture1" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture1 ?>); background-repeat: no-repeat"><?php if ($picture1link != "") { ?><a href="<?php echo $picture1link ?>" target="<?php echo $picture1target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture2 != "") { ?>
<div id="picture2" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture2 ?>); background-repeat: no-repeat"><?php if ($picture2link != "") { ?><a href="<?php echo $picture2link ?>" target="<?php echo $picture2target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture3 != "") { ?>
<div id="picture3" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture3 ?>); background-repeat: no-repeat"><?php if ($picture3link != "") { ?><a href="<?php echo $picture3link ?>" target="<?php echo $picture3target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture4 != "") { ?>
<div id="picture4" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture4 ?>); background-repeat: no-repeat"><?php if ($picture4link != "") { ?><a href="<?php echo $picture4link ?>" target="<?php echo $picture4target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture5 != "") { ?>
<div id="picture5" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture5 ?>); background-repeat: no-repeat"><?php if ($picture5link != "") { ?><a href="<?php echo $picture5link ?>" target="<?php echo $picture5target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture6 != "") { ?>
<div id="picture6" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture6 ?>); background-repeat: no-repeat"><?php if ($picture6link != "") { ?><a href="<?php echo $picture6link ?>" target="<?php echo $picture6target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture7 != "") { ?>
<div id="picture7" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture7 ?>); background-repeat: no-repeat"><?php if ($picture7link != "") { ?><a href="<?php echo $picture7link ?>" target="<?php echo $picture7target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture8 != "") { ?>
<div id="picture8" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture8 ?>); background-repeat: no-repeat"><?php if ($picture8link != "") { ?><a href="<?php echo $picture8link ?>" target="<?php echo $picture8target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture9 != "") { ?>
<div id="picture9" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture9 ?>); background-repeat: no-repeat"><?php if ($picture9link != "") { ?><a href="<?php echo $picture9link ?>" target="<?php echo $picture9target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture10 != "") { ?>
<div id="picture10" style="padding:0px; display:none; height:<?php echo $height ?>px; opacity:.0; <?php if ($iss_ie6 == "yes" || $iss_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>px; overflow:hidden; background-image: url(<?php echo $picture10 ?>); background-repeat: no-repeat"><?php if ($picture10link != "") { ?><a href="<?php echo $picture10link ?>" target="<?php echo $picture10target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>px"></img></a><?php } ?></div>
<?php } ?>

</div>

<?php }?>


<script type="text/javascript">
	function picture1(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture1_done()',<?php echo $display_time ?>);
	}

	function picture1_done(){
		picture1_doneload('picture1');
	}

	function picture1_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture1_next()',<?php echo $tween_time ?>);
	}

	function picture1_next(id) {
			document.getElementById('picture1').style.display = "none";
		if (document.getElementById('picture2')) {
			picture2('picture2');
		}
		else {
			picture1('picture1');
		}
	}

	function picture2(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture2_done()',<?php echo $display_time ?>);
	}

	function picture2_done(){
		picture2_doneload('picture2');
	}

	function picture2_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture2_next()',<?php echo $tween_time ?>);
	}

	function picture2_next(id) {
			document.getElementById('picture2').style.display = "none";
		if (document.getElementById('picture3')) {
			picture3('picture3');
		}
		else {
			picture1('picture1');
		}
	}

	function picture3(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture3_done()',<?php echo $display_time ?>);
	}

	function picture3_done(){
		picture3_doneload('picture3');
	}

	function picture3_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture3_next()',<?php echo $tween_time ?>);
	}

	function picture3_next(id) {
			document.getElementById('picture3').style.display = "none";
		if (document.getElementById('picture4')) {
			picture4('picture4');
		}
		else {
			picture1('picture1');
		}
	}

	function picture4(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture4_done()',<?php echo $display_time ?>);
	}

	function picture4_done(){
		picture4_doneload('picture4');
	}

	function picture4_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture4_next()',<?php echo $tween_time ?>);
	}

	function picture4_next(id) {
			document.getElementById('picture4').style.display = "none";
		if (document.getElementById('picture5')) {
			picture5('picture5');
		}
		else {
			picture1('picture1');
		}
	}

	function picture5(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture5_done()',<?php echo $display_time ?>);
	}

	function picture5_done(){
		picture5_doneload('picture5');
	}

	function picture5_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture5_next()',<?php echo $tween_time ?>);
	}

	function picture5_next(id) {
			document.getElementById('picture5').style.display = "none";
		if (document.getElementById('picture6')) {
			picture6('picture6');
		}
		else {
			picture1('picture1');
		}
	}

	function picture6(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture6_done()',<?php echo $display_time ?>);
	}

	function picture6_done(){
		picture6_doneload('picture6');
	}

	function picture6_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture6_next()',<?php echo $tween_time ?>);
	}

	function picture6_next(id) {
			document.getElementById('picture6').style.display = "none";
		if (document.getElementById('picture7')) {
			picture7('picture7');
		}
		else {
			picture1('picture1');
		}
	}

	function picture7(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture7_done()',<?php echo $display_time ?>);
	}

	function picture7_done(){
		picture7_doneload('picture7');
	}

	function picture7_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture7_next()',<?php echo $tween_time ?>);
	}

	function picture7_next(id) {
			document.getElementById('picture7').style.display = "none";
		if (document.getElementById('picture8')) {
			picture8('picture8');
		}
		else {
			picture1('picture1');
		}
	}

	function picture8(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture8_done()',<?php echo $display_time ?>);
	}

	function picture8_done(){
		picture8_doneload('picture8');
	}

	function picture8_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture8_next()',<?php echo $tween_time ?>);
	}

	function picture8_next(id) {
			document.getElementById('picture8').style.display = "none";
		if (document.getElementById('picture9')) {
			picture9('picture9');
		}
		else {
			picture1('picture1');
		}
	}

	function picture9(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture9_done()',<?php echo $display_time ?>);
	}

	function picture9_done(){
		picture9_doneload('picture9');
	}

	function picture9_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture9_next()',<?php echo $tween_time ?>);
	}

	function picture9_next(id) {
			document.getElementById('picture9').style.display = "none";
		if (document.getElementById('picture10')) {
			picture10('picture10');
		}
		else {
			picture1('picture1');
		}
	}

	function picture10(id) {
			document.getElementById(id).style.display = "block";
		opacity(id, 0, 100, <?php echo $tween_time ?>);
			window.setTimeout('picture10_done()',<?php echo $display_time ?>);
	}

	function picture10_done(){
		picture10_doneload('picture10');
	}

	function picture10_doneload(id) {
		opacity(id, 100, 0, <?php echo $tween_time ?>);
			window.setTimeout('picture10_next()',<?php echo $tween_time ?>);
	}

	function picture10_next(id) {
		document.getElementById('picture10').style.display = "none";
		picture1('picture1');
	}

	picture1('picture1');
</script>

<?php } ?>
<?php } ?>