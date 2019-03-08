<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */

defined('_JEXEC') or die;

abstract class mod_ojastonishblockHelper
{
	public static function getArticle(&$params)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select("id, alias, catid, title, images,`introtext`");
		$query->from('#__content');
		$query->where("id='".$params->get("ojabArticleID")."'");
		$db->setQuery($query, 0,1);
		try
		{
			$result = $db->loadObjectList();
		}
		catch (RuntimeException $e)
		{
			JError::raiseError(500, $e->getMessage());
			return false;
		}

		$article = new stdClass;
        $article->id =  htmlspecialchars($result[0]->id);
        $article->alias =  htmlspecialchars($result[0]->alias);
        $article->catid =  htmlspecialchars($result[0]->catid);
		$article->title = htmlspecialchars( $result[0]->title );
        $article->introtext = $result[0]->introtext;
		$article->images =  json_decode($result[0]->images);

		return $article;
	}
	
	public static function getK2Article(&$params)
	{
		
		$db = JFactory::getDBO();
		$query = '
    	SELECT
	        a.id AS id,
	        a.catid AS catid,
	        a.title AS title,
	        a.introtext AS introtext,
	        a.alias AS alias,
	        c.alias AS catalias
    	FROM
	        #__k2_items AS a
	        LEFT JOIN #__k2_categories AS c ON ( a.catid = c.id )
        	WHERE a.id='.$params->get("ojabK2ID");
		
		$db->setQuery($query);
		
		try
		{
			$result = $db->loadObjectList();
		}
		catch (RuntimeException $e)
		{
			JError::raiseError(500, $e->getMessage());
			return false;
		}
		
		$article = new stdClass;
		$article->id =  htmlspecialchars($result[0]->id);
		$article->alias =  htmlspecialchars($result[0]->alias);
		$article->catid =  htmlspecialchars($result[0]->catid);
		$article->catalias =  htmlspecialchars($result[0]->catalias);
		$article->title = htmlspecialchars( $result[0]->title );
		$article->introtext = $result[0]->introtext;
		
		return $article;
		
	}
}