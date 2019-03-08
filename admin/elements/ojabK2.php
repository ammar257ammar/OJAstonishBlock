<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */
defined('_JEXEC') or die;

jimport('joomla.form.formfield');

if(JFile::exists(JPATH_ADMINISTRATOR.'/components/com_k2/elements/item.php')){
	require_once (JPATH_ADMINISTRATOR.'/components/com_k2/elements/item.php');
	class K2ElementItem2 extends K2ElementItem{}
}else{
	class K2ElementItem2 extends JFormField{
		
		protected function getInput() {
			
			return "<span> K2 is not installed !!</span>";
		}
	}
	
}

class JFormFieldojabK2 extends K2ElementItem2
{
	var $type = 'ojabK2';	
}

?>