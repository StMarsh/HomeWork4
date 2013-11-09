<?php
/**
 * @package		StMarsh
 * @subpackage	mod_articles_all
 * @copyright	(C) 2013
 * @license		GNU General Public License
 */

defined('_JEXEC') or die;

require_once JPATH_SITE.'/components/com_content/helpers/route.php';

JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_content/models', 'ContentModel');

Class modArticlesAllHelper
{
	function getList(&$params)
    {
        // Получаем глобальный объект базы данных
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        $query->select('title');
        $query->select('id');
        $query->from('#__content');
        $db->setQuery($query);
        $list = $db->loadObjectList();

        // Возвращаем массив заголовков
        return $list;
    }
}

?>