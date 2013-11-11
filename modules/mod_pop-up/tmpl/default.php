<?php
/**
 * @package		StMarsh
 * @subpackage	mod_pop-up
 * @copyright	(C) 2013 StMarsh
 * @license		GNU General Public License
 */

// no direct access
defined('_JEXEC') or die;

if ($FirstSes){ ?>
       <div class="absol">
           <div><a href="index.php?option=com_content&view=featured"><img alt="" src="images/banners/welcome_hey.jpg" /></a></div>
       </div>
<?php

}
$doc = & JFactory::getDocument();
$doc->addStyleSheet(JURI::root(true) . "/modules/mod_pop-up/style.css");
?>