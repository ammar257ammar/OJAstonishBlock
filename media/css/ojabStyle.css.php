<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */
header('Content-type: text/css');

$styleParams = json_decode(urldecode(unserialize($_GET["styleparams"])));

$button_border = explode(",",$styleParams->{"button_border"});
$block_border = explode(",",$styleParams->{"block_border"});
$image_border = explode(",",$styleParams->{"image_border"});

if($styleParams->{"button_shape"} == "default"){      $button_shape = "";
}else if($styleParams->{"button_shape"} == "round"){  $button_shape = "border-radius: 10px;";
}else if($styleParams->{"button_shape"} == "circle"){ $button_shape = "border-radius: 50%;"; }

if($styleParams->{"image_shape"} == "default"){      $image_shape = "";
}else if($styleParams->{"image_shape"} == "round"){  $image_shape = "border-radius: 10px;";
}else if($styleParams->{"image_shape"} == "circle"){  $image_shape = "border-radius: 50%;"; }

if($styleParams->{"block_shape"} == "default"){      $block_shape = "";
}else if($styleParams->{"block_shape"} == "round"){  $block_shape = "border-radius: 10px;"; }

if($styleParams->{"bg_type"} == "transperant"){  $bg = "background-color: transperant;";
}else if($styleParams->{"bg_type"} == "color"){  $bg = "background-color:".$styleParams->{"bg_color"}.";";
}else if($styleParams->{"bg_type"} == "gradient"){ 
	$bg = "background-image:linear-gradient(".$styleParams->{"bg_grad1"}.",".$styleParams->{"bg_grad2"}.");
		  background: -webkit-linear-gradient(".$styleParams->{"bg_grad1"}.",".$styleParams->{"bg_grad2"}.");
		  background: -o-linear-gradient(".$styleParams->{"bg_grad1"}.",".$styleParams->{"bg_grad2"}.");
		  background: -moz-linear-gradient(".$styleParams->{"bg_grad1"}.",".$styleParams->{"bg_grad2"}.");";
}else if($styleParams->{"bg_type"} == "texture"){
 $bg = "background:url('../../../modules/mod_ojastonishblock/images/".$styleParams->{"bg_texture"}. ".png') repeat scroll 0 0 #f1f1f1;";
}else if($styleParams->{"bg_type"} == "hexagon"){
 $bg = "background:url('../../../modules/mod_ojastonishblock/images/hexagon/".$styleParams->{"bg_hexagon"}. ".png') no-repeat scroll center center transparent; Background-size: cover;";
}else if($styleParams->{"bg_type"} == "heart"){
 $bg = "background:url('../../../modules/mod_ojastonishblock/images/heart/".$styleParams->{"bg_heart"}. ".png') no-repeat scroll center center transparent; Background-size: cover;";
}

?>

.<?php echo $styleParams->{"unique"} ?>{

//padding: 10px;
<?php echo $block_shape; ?>
<?php if(count($block_border) == 2){ echo "border:".$block_border[0]."px solid ".$block_border[1];}  ?>;
box-shadow:<?php echo $styleParams->{"block_shadow"} ?>;
<?php echo $bg; ?>
overflow: hidden;
height: <?php echo $styleParams->{"block_height"} ?>;

}

.<?php echo $styleParams->{"unique"} ?> .ojabtitle,
.<?php echo $styleParams->{"unique"} ?> .ojabsubtitle,
.<?php echo $styleParams->{"unique"} ?> .ojabimage,
.<?php echo $styleParams->{"unique"} ?> .ojabtext,
.<?php echo $styleParams->{"unique"} ?> .ojabbutton{

padding: 0px;
margin: 0px;
background-color: transperant;

}

.<?php echo $styleParams->{"unique"} ?> .ojabtitle,
.<?php echo $styleParams->{"unique"} ?> .ojabsubtitle,
.<?php echo $styleParams->{"unique"} ?> .ojabtext,
.<?php echo $styleParams->{"unique"} ?> .ojabbutton{

line-Height: 24px;

}

.<?php echo $styleParams->{"unique"} ?> .ojabcontent{

padding: <?php echo $styleParams->{"inside_padding"} ?>px;
margin: 0px;
background-color: transperant;

}

.<?php echo $styleParams->{"unique"} ?> .ojabtitle,
.<?php echo $styleParams->{"unique"} ?> .ojabtitle a{

font-size: 24px;
text-decoration: none;
color:<?php echo $styleParams->{"title_color"} ?>;
text-align:<?php echo $styleParams->{"title_align"} ?>;
text-shadow:<?php echo $styleParams->{"title_shadow"} ?>;

}

.<?php echo $styleParams->{"unique"} ?> .ojabtitle{
padding-top: 5px;
padding-bottom: 5px;
}

.<?php echo $styleParams->{"unique"} ?> .ojabsubtitle{

font-size: 14px;
font-style: italic;
color:<?php echo $styleParams->{"subtitle_color"} ?>;
text-align:<?php echo $styleParams->{"title_align"} ?>;
margin-bottom: 20px;

}

.<?php echo $styleParams->{"unique"} ?> .ojabtext{

color:<?php echo $styleParams->{"text_color"} ?>;
text-align:<?php echo $styleParams->{"text_align"} ?>;
margin-bottom: 15px;

}

.<?php echo $styleParams->{"unique"} ?> .ojabbutton,
.<?php echo $styleParams->{"unique"} ?> .ojabbutton a{

text-align:<?php echo $styleParams->{"button_align"} ?>;
padding: 5px;

}

.<?php echo $styleParams->{"unique"} ?> .ojabbutton a{

background-color:<?php echo $styleParams->{"button_color"} ?>;
<?php if(count($button_border) == 2){ echo "border:".$button_border[0]."px solid ".$button_border[1];}  ?>;
<?php echo $button_shape; ?>
padding: 5px 15px;
text-decoration: none;
font-weight: bold;
font-size: 16px;
color: #fff;
white-space: nowrap;

}

.<?php echo $styleParams->{"unique"} ?> .ojabbutton{
margin-bottom: 10px;
}

.<?php echo $styleParams->{"unique"} ?> .ojabimage{

text-align:<?php echo $styleParams->{"image_align"} ?>;
margin-top: 15px;
margin-bottom: 15px;

}

.<?php echo $styleParams->{"unique"} ?> .ojabimage img{

box-shadow:<?php echo $styleParams->{"image_shadow"} ?>;
<?php if(count($image_border) == 2){ echo "border:".$image_border[0]."px solid ".$image_border[1];}  ?>;
<?php echo $image_shape; ?>

}

.<?php echo $styleParams->{"unique"} ?> .ojabimage span,
.<?php echo $styleParams->{"unique"} ?> .ojabimage i{

<?php if(count($image_border) == 2){ echo "border:".$image_border[0]."px solid ".$image_border[1];}  ?>;
text-shadow:<?php echo $styleParams->{"image_shadow"} ?>;
padding: 15px;
<?php echo $image_shape; ?>

}

.<?php echo $styleParams->{"unique"} ?> .ojabimage .img-responsive{

<?php echo $image_shape; ?>
display:block;
width:100% \9;
max-width:100%;
height:auto;
margin-left: auto;
margin-right: auto;

}