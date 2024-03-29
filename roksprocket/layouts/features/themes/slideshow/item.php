<?php
/**
 * @version   $Id$
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2012 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
/**
 * @var $item RokSprocket_Item
 */
?>

<li class="sprocket-features-index-<?php echo $index; ?>">
    <?php
    ;
    if (($image = $item->getPrimaryImage())):
        ?>
        <div class="sprocket-features-img-container" data-slideshow-image>
            <?php if ($item->getPrimaryLink()) : ?>
                <a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><img src="<?php echo $image->getSource(); ?>" alt="" width="<?php echo $image->getWidth(); ?>" height="<?php echo $image->getHeight(); ?>" /></a>
            <?php else: ?>
                <img src="<?php echo $image->getSource(); ?>" alt="" width="<?php echo $image->getWidth(); ?>" height="<?php echo $image->getHeight(); ?>" />
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="sprocket-features-content" data-slideshow-content>
        <?php if ($parameters->get('features_show_title') && $item->getTitle()) : ?>
            <?php if ($item->getPrimaryLink()) : ?>
                <a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>">
                    <h2 class="sprocket-features-title">
                        <?php echo $item->getTitle(); ?>
                    </h2>
                </a>
            <?php else: ?>
                <h2 class="sprocket-features-title">
                    <?php echo $item->getTitle(); ?>
                </h2>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($parameters->get('features_show_article_text') && ($item->getText() || $item->getPrimaryLink())) : ?>
            <div class="sprocket-features-desc">
                <span>
                    <?php if ($item->getPrimaryLink()) : ?>
                        <a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php echo $item->getText(); ?></a>
                    <?php else: ?>
                        <?php echo $item->getText(); ?>
                    <?php endif; ?>
                </span>
                <?php if ($item->getPrimaryLink()) : ?>
                    <a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="readon"><span><?php rc_e('READ_MORE'); ?></span></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</li>
