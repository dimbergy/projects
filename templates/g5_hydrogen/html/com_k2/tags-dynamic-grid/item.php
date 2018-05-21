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
$this->app = JFactory::getApplication();
$app = JFactory::getApplication();
$gantry = Gantry\Framework\Gantry::instance();
$theme = $gantry['theme'];
$theme->setLayout('_body_only');
$document = JFactory::getDocument();
$document->addScript("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js");
$document->addStyleSheet("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css");
$document->addStyleSheet("https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css");
?>
<div id="<?php echo 'item-' . $this->item->id ?>"
<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->
<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;">
	<span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span>
</a>
<?php endif; ?>

<!-- Start K2 Item Layout -->

<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<div id="k2Container" class="popup itemView<?php echo ($this->item->featured) ? ' itemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">
	<div id="share"></div>
	<div class="clr"></div>

	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>

	<div class="itemHeader">

	<?php if($this->item->params->get('itemTitle')): ?>
	<!-- Item title -->
	<h1 class="itemTitle text-normal title-bolder">
		<?php if(isset($this->item->editLink)): ?>
		<!-- Item edit link -->
		<span class="itemEditLink">
			<a data-k2-modal="edit" href="<?php echo $this->item->editLink; ?>"><?php echo JText::_('K2_EDIT_ITEM'); ?></a>
		</span>
		<?php endif; ?>

		<?php echo $this->item->title; ?>

	</h1>
	<?php endif; ?>

	</div>

	<!-- Plugins: AfterDisplayTitle -->
	<?php echo $this->item->event->AfterDisplayTitle; ?>

	<!-- K2 Plugins: K2AfterDisplayTitle -->
	<?php echo $this->item->event->K2AfterDisplayTitle; ?>

	<div class="itemBody">

		<!-- Plugins: BeforeDisplayContent -->
		<?php echo $this->item->event->BeforeDisplayContent; ?>

		<!-- K2 Plugins: K2BeforeDisplayContent -->
		<?php echo $this->item->event->K2BeforeDisplayContent; ?>

		<?php if(!empty($this->item->fulltext)): ?>

		<?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		<div class="itemIntroText text-small">
			<?php echo $this->item->introtext; ?>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		<!-- Item fulltext -->
		<div class="itemFullText text-small">
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
		<script>
				jQuery("#share").jsSocials({
					showLabel: false,
					showCount: false,
					shareIn: "self",
					shares: ["facebook", "twitter", "googleplus", "linkedin", "email"]
				});
		</script>
	</div>
</div>
<!-- End K2 Item Layout -->
