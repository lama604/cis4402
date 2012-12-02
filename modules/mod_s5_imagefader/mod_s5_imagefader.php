<?php
/**
@version 1.0: mod_S5_imagefader
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$LiveSite = JURI::base();

$imageurldirectory = $params->get( 'imageurldirectory', '' );
$thumbnails = $params->get( 'thumbnails', '' );
$overlaycontrols = $params->get( 'overlaycontrols', '' );
$jseffectstyle = $params->get( 'jseffectstyle', '' );
$imageoverlap = $params->get( 'imageoverlap', '' );

$s5_imagefaderver 	= $params->get( 's5_imagefaderver', '' );
$reflection			= $params->get( 'reflection', '' );
$background			= $params->get( 'background', '' );
$pretext			= $params->get( 'pretext', '' );
$tween_time			= $params->get( 'tween_time', '' );
$height		    	= $params->get( 'height', '' );
$width   			= $params->get( 'width', '' );
$picture1			= $params->get( 'picture1', '' );
$picture1link		= $params->get( 'picture1link', '' );
$picture1target		= $params->get( 'picture1target', '' );
$picture2			= $params->get( 'picture2', '' );
$picture2link		= $params->get( 'picture2link', '' );
$picture2target		= $params->get( 'picture2target', '' );
$picture3			= $params->get( 'picture3', '' );
$picture3link		= $params->get( 'picture3link', '' );
$picture3target		= $params->get( 'picture3target', '' );
$picture4			= $params->get( 'picture4', '' );
$picture4link		= $params->get( 'picture4link', '' );
$picture4target		= $params->get( 'picture4target', '' );
$picture5			= $params->get( 'picture5', '' );
$picture5link		= $params->get( 'picture5link', '' );
$picture5target		= $params->get( 'picture5target', '' );
$picture6			= $params->get( 'picture6', '' );
$picture6link		= $params->get( 'picture6link', '' );
$picture6target		= $params->get( 'picture6target', '' );
$picture7			= $params->get( 'picture7', '' );
$picture7link		= $params->get( 'picture7link', '' );
$picture7target		= $params->get( 'picture7target', '' );
$picture8			= $params->get( 'picture8', '' );
$picture8link		= $params->get( 'picture8link', '' );
$picture8target		= $params->get( 'picture8target', '' );
$picture9			= $params->get( 'picture9', '' );
$picture9link		= $params->get( 'picture9link', '' );
$picture9target		= $params->get( 'picture9target', '' );
$picture10			= $params->get( 'picture10', '' );
$picture10link		= $params->get( 'picture10link', '' );
$picture10target	= $params->get( 'picture10target', '' );
$display_time   	= $params->get( 'display_time', '' );
$s5_imagefaderstyle = $params->get( 's5_imagefaderstyle', '' );

$tween_time = $tween_time*1000;
$display_time = $display_time*1000;

if ($picture1target == "1") $picture1target = "_blank"; 
if ($picture1target == "0") $picture1target = "_top"; 
if ($picture2target == "1") $picture2target = "_blank"; 
if ($picture2target == "0") $picture2target = "_top"; 
if ($picture3target == "1") $picture3target = "_blank"; 
if ($picture3target == "0") $picture3target = "_top"; 
if ($picture4target == "1") $picture4target = "_blank"; 
if ($picture4target == "0") $picture4target = "_top"; 
if ($picture5target == "1") $picture5target = "_blank"; 
if ($picture5target == "0") $picture5target = "_top"; 
if ($picture6target == "1") $picture6target = "_blank"; 
if ($picture6target == "0") $picture6target = "_top"; 
if ($picture7target == "1") $picture7target = "_blank"; 
if ($picture7target == "0") $picture7target = "_top"; 
if ($picture8target == "1") $picture8target = "_blank"; 
if ($picture8target == "0") $picture8target = "_top"; 
if ($picture9target == "1") $picture9target = "_blank"; 
if ($picture9target == "0") $picture9target = "_top"; 
if ($picture10target == "1") $picture10target = "_blank"; 
if ($picture10target == "0") $picture10target = "_top"; 

$s5_ifvisible_if = 0;
if ($picture1 != "" && $picture2 == "" && $picture3 == "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 0;
if ($picture1 != "" && $picture2 != "" && $picture3 == "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 1; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 2; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 3; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 4; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 5; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 == "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 6; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 == "" && $picture10 == "") $s5_ifvisible_if = 7; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 != "" && $picture10 == "") $s5_ifvisible_if = 8; 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 != "" && $picture10 != "") $s5_ifvisible_if = 9; 

echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture1_if = '".$picture1."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture2_if = '".$picture2."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture3_if = '".$picture3."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture4_if = '".$picture4."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture5_if = '".$picture5."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture6_if = '".$picture6."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture7_if = '".$picture7."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture8_if = '".$picture8."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture9_if = '".$picture9."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture10_if = '".$picture10."';</script>"; 
   
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_ifvisible_if = ".$s5_ifvisible_if.";</script>"; 

require(JModuleHelper::getLayoutPath('mod_s5_imagefader')); ?>


<?php if ($pretext != "") { ?>
<br />
<?php echo $pretext ?>
<br /><br />
<?php } ?>

<div style="display:none;">
<?php if ($picture1 != "") { ?>
	<img alt="" src="<?php echo $picture1 ?>"/><?php } ?>
<?php if ($picture2 != "") { ?>
	<img alt="" src="<?php echo $picture2 ?>"/><?php } ?>
<?php if ($picture3 != "") { ?>
	<img alt="" src="<?php echo $picture3 ?>"/><?php } ?>
<?php if ($picture4 != "") { ?>
	<img alt="" src="<?php echo $picture4 ?>"/><?php } ?>
<?php if ($picture5 != "") { ?>
	<img alt="" src="<?php echo $picture5 ?>"/><?php } ?>
<?php if ($picture6 != "") { ?>
	<img alt="" src="<?php echo $picture6 ?>"/><?php } ?>
<?php if ($picture7 != "") { ?>
	<img alt="" src="<?php echo $picture7 ?>"/><?php } ?>
<?php if ($picture8 != "") { ?>
	<img alt="" src="<?php echo $picture8 ?>"/><?php } ?>
<?php if ($picture9 != "") { ?>
	<img alt="" src="<?php echo $picture9 ?>"/><?php } ?>
<?php if ($picture10 != "") { ?>
	<img alt="" src="<?php echo $picture10 ?>"/><?php } ?>
</div>

<script type="text/javascript">
	var picture1link = "<?php echo $picture1link ?>";
	var picture1target = "<?php echo $picture1target ?>";
	var picture2link = "<?php echo $picture2link ?>";
	var picture2target = "<?php echo $picture2target ?>";
	var picture3link = "<?php echo $picture3link ?>";
	var picture3target = "<?php echo $picture3target ?>";
	var picture4link = "<?php echo $picture4link ?>";
	var picture4target = "<?php echo $picture4target ?>";
	var picture5link = "<?php echo $picture5link ?>";
	var picture5target = "<?php echo $picture5target ?>";
	var picture6link = "<?php echo $picture6link ?>";
	var picture6target = "<?php echo $picture6target ?>";
	var picture7link = "<?php echo $picture7link ?>";
	var picture7target = "<?php echo $picture7target ?>";
	var picture8link = "<?php echo $picture8link ?>";
	var picture8target = "<?php echo $picture8target ?>";
	var picture9link = "<?php echo $picture9link ?>";
	var picture9target = "<?php echo $picture9target ?>";
	var picture10link = "<?php echo $picture10link ?>";
	var picture10target = "<?php echo $picture10target ?>";
</script>



