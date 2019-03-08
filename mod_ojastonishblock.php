<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$doc = JFactory::getDocument();

$glyphicon =  ($params->get("ojabImage") == "glyphicon") ? 1 : 0 ;
$bootstrap =  ($params->get("ojabGlyphiconSet") == "bootstrap") ? 1 : 0;
$font_awesome = ($params->get("ojabGlyphiconSet") == "fontawesome") ? 1 : 0;

if($glyphicon && $bootstrap){

    JHtml::_('stylesheet', 'mod_ojastonishblock/bootstrap3-icons.css', array(),true);

}else if ($glyphicon && $font_awesome){

    JHtml::_('stylesheet', 'mod_ojastonishblock/font-awesome.css', array(),true);
}

$styleParams_json = json_encode(array('title_color' => $params->get("ojabTitleColor"),
                    'subtitle_color' => $params->get("ojabSubtitleColor"),
                    'text_color' => $params->get("ojabTextColor"),
                    'button_color' => $params->get("ojabButtonColor"),
                    'bg_type' => $params->get("ojabBackgroundType"),
                    'bg_color' => $params->get("ojabBackgroundColor"),
                    'bg_grad1' => $params->get("ojabBackgroundGradient1"),
                    'bg_grad2' => $params->get("ojabBackgroundGradient2"),
                    'bg_texture' => $params->get("ojabBackgroundTexture"),
					'bg_hexagon' => $params->get("ojabBackgroundHexagon"),
					'bg_heart' => $params->get("ojabBackgroundHeart"),
                    'title_align' => $params->get("ojabTitleAlign"),
                    'image_align' => $params->get("ojabImageAlign"),
                    'text_align' => $params->get("ojabTextAlign"),
                    'button_align' => $params->get("ojabButtonAlign"),
					'inside_padding' => $params->get("ojabInsidePadding"),
					'block_height' => $params->get("ojabBlockHeight"),
                    'title_shadow' => $params->get("ojabTitleShadow"),
                    'image_shadow' => $params->get("ojabImageShadow"),
                    'block_shadow' => $params->get("ojabBlockShadow"),
                    'block_shape' => $params->get("ojabBlockShape"),
                    'image_shape' => $params->get("ojabImageShape"),
                    'button_shape' => $params->get("ojabButtonShape"),
                    'block_border' => $params->get("ojabBlockBorder"),
                    'image_border' => $params->get("ojabImageBorder"),
                    'button_border' => $params->get("ojabButtonBorder"),
                    'image_pos' => $params->get("ojabImagePosition"),
                    'unique' => "id".$module->id));

$url = urlencode(serialize($styleParams_json));
$doc->addStyleSheet(JURI::base(true) .'/media/mod_ojastonishblock/css/ojabStyle.css.php?styleparams='. $url);

$link_type =  $params->get("ojabLinkType");

if($link_type=="0"){
	$articleid = $params->get("ojabArticleID","null");
	if($articleid != "null" && $articleid != 0 && $articleid != ""){
		$article = mod_ojastonishblockHelper::getArticle($params);
	}
}else if($link_type=="2"){
	$k2id = $params->get("ojabK2ID","null");
	if($k2id != "null" && $k2id != 0 && $k2id != ""){
		$article = mod_ojastonishblockHelper::getK2Article($params);
	}
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_ojastonishblock',$params->get('layout', 'default'));
