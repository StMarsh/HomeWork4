<?php
/**
 * @package		StMarsh
 * @subpackage	mod_articles_all
 * @copyright	(C) 2013 StMarsh
 * @license		GNU General Public License
 */

// no direct access
defined('_JEXEC') or die;
?>

<ul class="ArticleAll<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
        <li>
            <a href="index.php/component/content/article/2-uncategorised/<?php echo $item->id; ?>">
                <?php echo $item->title; ?></a>
        </li>
    <?php endforeach; ?>
</ul>
