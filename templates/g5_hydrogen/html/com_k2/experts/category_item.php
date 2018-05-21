<?php
/**
 * @version    2.7.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2016 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

// Define default image size (do not change)
K2HelperUtilities::setDefaultImage($this->item, 'itemlist', $this->params);
$extraFields = $this->item->extra_fields;
foreach ($extraFields as $extrafield) {
	//echo $extrafield->value . "<br />";
	if ($extrafield->alias == 'introImage') {
		$var = $extrafield->value;
		$var = preg_replace('/<img src="/',"",$var);
		$pos = strpos($var, "alt");
		$xIntroImage = substr($var,0,$pos-2);
	}
	if ($extrafield->alias == 'fullImage') {
		$var = $extrafield->value;
		$var = preg_replace('/<img src="/',"",$var);
		$pos = strpos($var, "alt");
		$xFullImage = substr($var,0,$pos-2);
	}
	if ($extrafield->alias == 'jobtitle') $xJobTitle = $extrafield->value;
	if ($extrafield->alias == 'sourceLink') {
		$xSourceLinkName = $extrafield->text;
		$xSourceLinkURL = $extrafield->url;
		$xSourceLinkValue = $extrafield->value;
	}
}
$tags = '';
for ($i = 0; $i <= count ($this->item->tags); $i++) {
	//echo $extrafield->value . "<br />";
	$tag = JFilterOutput::stringURLSafe($this->item->tags[$i]->name) . ' ';
	$tags .= $tag;
}
?>
<!-- Start K2 Item Layout -->
<div class="article <?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx');?> <?php echo $tags ?>">
		<?php if($this->item->params->get('catItemImage')) {
			if((!empty($this->item->image)) || (!empty($xIntroImage)) || (!empty($xFullImage))) { ?>
			<!-- Item Image -->
				<figure class="uk-overlay">
					<?php
					if(!empty($xIntroImage)) { ?>
						<img src=<?php echo $xIntroImage; ?> width="100%"; height="auto" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
					<?php
					} elseif (!empty($this->item->image)) { ?>
						<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
					<?php
					} else { ?>
						<img src=<?php echo $xFullImage; ?> alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
					<?php } ?>
					<figcaption class="uk-overlay-panel uk-overlay-bottom uk-background-dark">
						<h3 class="item-title nomarginall">
							<?php if ($this->item->params->get('catItemTitleLinked')): ?>
							<a href="<?php echo $this->item->link; ?>" class="item-title">
								<?php echo $this->item->title; ?>
							</a>
							<?php else: ?>
							<?php echo $this->item->title; ?>
							<?php endif; ?>

							<?php if($this->item->params->get('catItemFeaturedNotice') && $this->item->featured): ?>
							<!-- Featured flag -->
							<span>
								<sup>
									<?php echo JText::_('K2_FEATURED'); ?>
								</sup>
							</span>
							<?php endif; ?>
						</h3>

						<?php if($this->item->params->get('catItemDateCreated')) { ?>
							<!-- Date created -->
							<div class="uk-article-meta date">
								<span class="fa fa-calendar">&nbsp;</span><?php echo JHTML::_('date', $this->item->created , JText::_("d/m/y")); ?>
							</div>
						<?php } ?>


						<?php if($this->item->params->get('catItemIntroText')) { ?>
						<!-- Item introtext -->
						<div class="article-lead">
							<?php echo $this->item->introtext;
							if ($this->item->fulltext != "") { ?>
								<a href="<?php echo $this->item->link?>"><?php JText::_('MOD_ARTICLES_NEWS_READMORE');?></a>
							<?php } ?>
						</div>
						<?php } ?>

						<?php if ($this->item->params->get('catItemReadMore')): ?>
						<!-- Item "read more..." link -->
						<p class="catItemReadMore">
							<a class="button button-small button-square button-outline" href="<?php echo $this->item->link; ?>">
								<?php echo JText::_('K2_READ_MORE'); ?>
							</a>
						</p>
						<?php endif; ?>
					</figcaption>
				</figure>
			<?php }
		 } ?>
</div>
<!-- End K2 Item Layout -->
