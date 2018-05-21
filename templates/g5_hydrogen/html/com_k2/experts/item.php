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

$document = JFactory::getDocument();
$document->addScript("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js");
$document->addStyleSheet("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css");
$document->addStyleSheet("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css");

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
	if ($extrafield->alias == 'quote') $xQuote = $extrafield->value;
	if ($extrafield->alias == 'email') $xEmail = $extrafield->value;
	if ($extrafield->alias == 'website') $xWeb = $extrafield->url;
	if ($extrafield->alias == 'linkedin') $xLinkedIn = $extrafield->url;
	if ($extrafield->alias == 'facebook') $xFb = $extrafield->url;
	if ($extrafield->alias == 'twitter') $xTwitter = $extrafield->url;
}
?>
<?php if ($this->params->get('show_page_heading')) : ?>
<div class="page-header">
	<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
</div>
<?php endif;?>

<div id="<?php echo 'item-' . $this->item->id ?>"
<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->
<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;">
	<span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span>
</a>
<?php endif; ?>

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<div id="k2Container" class="itemView<?php echo ($this->item->featured) ? ' itemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">
	<div class="g-grid">
		<div class="g-block size-35">
			<div class="g-content">
			<!-- Item Image -->
			<?php if($this->item->params->get('itemImage')) { ?>
				<div class="item-image">
				<?php if((!empty($this->item->image)) || (!empty($xIntroImage)) || (!empty($xFullImage))) { ?>
					<figure class="uk-overlay">
						<?php
						if(!empty($xFullImage)) { ?>
							<img src=<?php echo $xFullImage; ?> alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
						<?php
						} elseif (!empty($this->item->image)) { ?>
							<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
						<?php
						} else { ?>
							<img src=<?php echo $xIntroImage; ?> width="100%"; height="auto" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
						<?php } ?>
						<?php if(!empty($xQuote)) {?>
							<figcaption class="uk-overlay-panel uk-overlay-bottom uk-background-dark">
								<div class="quote-overlay">
									<span class="fa fa-quote-left fa-2x"></span><span class="quote-text"><?php echo $xQuote; ?></span><span class="fa fa-quote-right fa-2x"></span>
								</div>
							</figcaption>
						<?php } ?>
					</figure>
				<?php } ?>
				</div>
			<?php }	?>
				<!-- Item title -->
				<h3 class="item-title nomarginall">
					<?php if(isset($this->item->editLink)): ?>
					<!-- Item edit link -->
					<span class="itemEditLink">
						<a data-k2-modal="edit" href="<?php echo $this->item->editLink; ?>"><?php echo JText::_('K2_EDIT_ITEM'); ?></a>
					</span>
					<?php endif; ?>
					<?php echo $this->item->title; ?>
				</h3>
				<?php if(!empty($xJobTitle)) { ?>
					<div class="article-info property">
						<?php echo $xJobTitle; ?>
					</div>
				<?php } ?>
				<?php if($this->item->params->get('catItemDateCreated')) { ?>
					<!-- Date created -->
					<div class="uk-article-meta date">
						<span class="fa fa-calendar">&nbsp;</span><?php echo JHTML::_('date', $this->item->created , JText::_("d/m/y")); ?>
					</div>
				<?php } ?>
				<?php if(!empty($xEmail) || !empty($xWeb) || !empty($xLinkedIn) || !empty($xFb)  || !empty($xFb)) {?>
					<div class="person-links v-margin">
						<?php if($xEmail != '') { ?>
							<a href="mailto:<?php echo $xEmail ?>" target="_blank" rel="nofollow" class="person-link"><span class="fa fa-at"></span></a>
						<?php } ?>
						<?php if($xWeb != '') { ?>
							<a href="<?php echo $xWeb ?>" target="_blank" rel="nofollow" class="person-link"><span class="fa fa-globe"></span></a>
						<?php } ?>
						<?php if($xLinkedIn != '') {
							?>
							<a href="<?php echo $xLinkedIn ?>" target="_blank" rel="nofollow" class="person-link"><span class="fa fa-linkedin"></span></a>
						<?php } ?>
						<?php if($xFb != '') { ?>
							<a href="<?php echo $xFb ?>" target="_blank" rel="nofollow" class="person-link"><span class="fa fa-facebook"></span></a>
						<?php } ?>
						<?php if($xTwitter != '') { ?>
							<a href="<?php echo $xTwitter ?>" target="_blank" rel="nofollow" class="person-link"><span class="fa fa-twitter"></span></a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="g-block size-65 uk-flex-middle uk-flex-column item-content">
			<div class="g-content">
				<!-- Plugins: BeforeDisplayContent -->
			  <?php echo $this->item->event->BeforeDisplayContent; ?>
			  <!-- K2 Plugins: K2BeforeDisplayContent -->
			  <?php echo $this->item->event->K2BeforeDisplayContent; ?>
				<!-- Plugins: BeforeDisplay -->
				<?php echo $this->item->event->BeforeDisplay; ?>
				<!-- K2 Plugins: K2BeforeDisplay -->
				<?php echo $this->item->event->K2BeforeDisplay; ?>
			  <!-- Plugins: AfterDisplayTitle -->
			  <?php echo $this->item->event->AfterDisplayTitle; ?>
			  <!-- K2 Plugins: K2AfterDisplayTitle -->
			  <?php echo $this->item->event->K2AfterDisplayTitle; ?>

				<?php if(!empty($this->item->fulltext)): ?>
					<?php if($this->item->params->get('itemIntroText')): ?>
						<!-- Item introtext -->
						<div class="itemIntroText">
							<?php echo $this->item->introtext; ?>
						</div>
					<?php endif; ?>
					<?php if($this->item->params->get('itemFullText')): ?>
						<!-- Item fulltext -->
						<div class="itemFullText">
							<?php echo $this->item->fulltext; ?>
						</div>
					<?php endif; ?>
				<?php else: ?>
					<!-- Item text -->
					<div class="itemFullText">
						<?php echo $this->item->introtext; ?>
					</div>
				<?php endif; ?>

				<div class="clr"></div>
				<!-- Plugins: AfterDisplayContent -->
				<?php echo $this->item->event->AfterDisplayContent; ?>

				<!-- K2 Plugins: K2AfterDisplayContent -->
				<?php echo $this->item->event->K2AfterDisplayContent; ?>

				<!-- Plugins: AfterDisplay -->
			  <?php echo $this->item->event->AfterDisplay; ?>
			  <!-- K2 Plugins: K2AfterDisplay -->
			  <?php echo $this->item->event->K2AfterDisplay; ?>
			</div>
			<div id="share" class="center"></div>
			<script>
					jQuery("#share").jsSocials({
						showLabel: false,
						showCount: false,
						shareIn: "popup",
						shares: ["facebook", "twitter", "googleplus", "linkedin", "email"]
					});
			</script>
		</div>
	</div>
</div>
<!-- End K2 Item Layout -->
