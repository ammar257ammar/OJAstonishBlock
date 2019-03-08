<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

defined('_JEXEC') or die;

if(!class_exists('ContentHelperRoute')) require_once (JPATH_SITE . '/components/com_content/helpers/route.php');

$link_title =  ($params->get("ojabLinkTitle") == "0") ? 0 : 1;
$title_exist = ($params->get("ojabTitle") == "none") ? 0 : 1;
$subtitle_exist = (trim($params->get("ojabSubTitle","")) == "") ? 0 : 1;
$text_exist = ($params->get("ojabBodyText") == "none") ? 0 : 1;
$button_exist = ($params->get("ojabShowButton") == "0") ? 0 : 1;
$image_exist = ($params->get("ojabImage") == "none") ? 0 : 1;
$image_pos = $params->get("ojabImagePosition");
$image_type = $params->get("ojabImage");
$image_alt = $params->get("ojabCustomImageAlt",'');
$glyphset = $params->get("ojabGlyphiconSet");
$glyphclass = $params->get("ojabGlyphiconClass","glyphicon glyphicon-globe");
$glyphcolor = $params->get("ojabGlyphiconColor");
$glyphsize = $params->get("ojabGlyphiconSize","24");

$theLink = "#";

if($link_type == "1"){

    $theLink = $params->get("ojabCustomLink","#");

} else if($link_type == "0" && isset($article)){

    $theLink = JRoute::_(ContentHelperRoute::getArticleRoute($article->id, $article->catid));

}else if($link_type == "2" && isset($article)){

    require_once(JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'route.php');
	$theLink = K2HelperRoute::getItemRoute($article->id.':'.urlencode($article->alias),$article->catid.':'.urlencode($article->catalias));
}

if($image_type == "article_intro_image"){

	if($link_type == "0" && isset($article)){
		$image_html = "<div class=\"ojabimage\"><img class=\"img-responsive\" alt = \"".$image_alt."\" src=\"".$article->images->{'image_intro'}."\"/></div>"; 
	}else if($link_type == "2" && isset($article)){
		$image_html = "<div class=\"ojabimage\"><img class=\"img-responsive\" alt = \"".$image_alt."\" src=\"".JURI::root()."/media/k2/items/src/".md5('Image'.$article->id).".jpg\" alt=\"".$article->title."\" /></div>";
	}

}else if($image_type == "custom_image"){

    $image_html = "<div class=\"ojabimage\"><img class=\"img-responsive\" alt = \"".$image_alt."\" src=\"".$params->get("ojabCustomImage")."\"/></div>";

}else if($image_type == "glyphicon"){

    if($glyphset == "bootstrap"){

        $glyph_html = "<span class=\"".$glyphclass."\"></span>";

    }else if($glyphset == "fontawesome"){

        $glyph_html = "<i class=\"fa ".$glyphclass."\"></i>";

    }

    $image_html = "<div class=\"ojabimage\" style=\"font-size:".$glyphsize."px; color:".$glyphcolor."\">".$glyph_html."</div>";

}

?>

<div class="ojastonishblock <?php echo "id".$module->id ?> <?php echo $moduleclass_sfx ?>">

<div class="ojabcontent">

<?php if($image_exist && ($image_pos == "top")){
        echo $image_html;
} ?>

<?php  if($title_exist): ?>

	<div class="ojabtitle">

        <?php  if($link_title):?><a href="<?php echo $theLink;?>"><?php endif; ?>

        <?php if ($params->get("ojabTitle") == "article_title" && isset($article)){

                echo $article->title;

              }else if($params->get("ojabTitle") == "custom_title"){

                echo $params->get("ojabCustomTitle","");

              }
        ?>
        <?php  if($link_title):?></a><?php endif; ?>

	</div>

<?php endif; ?>

<?php  if($subtitle_exist): ?>

	<div class="ojabsubtitle">

        <?php echo $params->get("ojabSubTitle"); ?>

	</div>

<?php endif; ?>

<?php if($image_exist && $image_pos == "under_title"){
        echo $image_html;
} ?>

<?php  if($text_exist): ?>

	<div class="ojabtext">

        <?php if ($params->get("ojabBodyText") == "article_text" && isset($article)){
        	
        	 		if($params->get("ojabArticleTextLimit","100") == "0"){
						echo $article->introtext;
					}else{
						echo substr($article->introtext,0,$params->get("ojabArticleTextLimit","100"));
					}

              }else if($params->get("ojabBodyText") == "custom_text"){

                echo $params->get("ojabCustomBodyText","");

              }
        ?>
	</div>

<?php endif; ?>

<?php if($image_exist && $image_pos == "under_text"){
        echo $image_html;
} ?>

<?php  if($button_exist): ?>

	<div class="ojabbutton">

        <a href="<?php echo $theLink; ?>"><?php echo $params->get("ojabButtonText"); ?></a>

	</div>

<?php endif; ?>

<?php if($image_exist && $image_pos == "bottom"){
        echo $image_html;
} ?>

</div>

</div>