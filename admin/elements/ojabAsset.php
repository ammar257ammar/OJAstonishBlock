<?php
/**
 * @package    OceanicJ.OJAstonishBlock
 * @subpackage mod_ojastonishblock
 * @copyright  Copyright (C) 2014 - 2019 OceanicJ (http://www.oceanicj.com/). All rights reserved.
 * @license    GNU General Public License version 3 (http://www.gnu.org/licenses/gpl.html).
 */
// no direct access
defined('_JEXEC') or die;

jimport('joomla.form.formfield');

class JFormFieldojabAsset extends JFormField {
        protected $type = 'ojabAsset';

        protected function getInput() {
            $doc = JFactory::getDocument();
            $doc->addScript(JURI::root().'modules/mod_ojastonishblock/admin/ojabBackend.js');
            $doc->addStyleSheet(JURI::root().'modules/mod_ojastonishblock/admin/overr.css');
			return null;
        }
}

?>