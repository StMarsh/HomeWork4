<?php
/**
 * @package		StMarsh
 * @subpackage	mod_pop-up
 * @copyright	(C) 2013 StMarsh
 * @license		GNU General Public License
 */

defined('_JEXEC') or die;

Class modPopUpHelper
{
    function getFirstSes(&$params)
    {
        $session = & JFactory::getSession();
        if ($session->get('key') == null){
            $session->set('key','1');
            $FirstSes = true;
        }
        else{
            $FirstSes = false;
        }
        return $FirstSes;
    }
}
?>