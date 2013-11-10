<?php
/**
 * @package		StMarsh
 * @subpackage	mod_pop-up
 * @copyright	(C) 2013 StMarsh
 * @license		GNU General Public License
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__).'/helper.php';

$FirstSes = modPopUpHelper::getFirstSes($params);

require JModuleHelper::getLayoutPath('mod_pop-up');
?>