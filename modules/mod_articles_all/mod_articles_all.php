<?php
/**
 * @package		StMarsh
 * @subpackage	mod_articles_all
 * @copyright	(C) 2013
 * @license		GNU General Public License
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__).'/helper.php';

$list = modArticlesAllHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_articles_all', $params->get('layout', 'default'));
