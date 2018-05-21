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
$document->addScript('https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js');
$document->addScript('https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js');
$document->addScript('https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
?>

<!-- Start K2 Category Layout -->
<div id="k2Container" class="itemListView<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">

	<?php if($this->params->get('show_page_title')): ?>
	<!-- Page title -->
	<div class="componentheading<?php echo $this->params->get('pageclass_sfx')?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
	<?php endif; ?>

	<?php if($this->params->get('catFeedIcon')): ?>
	<!-- RSS feed icon -->
	<div class="k2FeedIcon">
		<a href="<?php echo $this->feed; ?>" title="<?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?>">
			<span><?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?></span>
		</a>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<?php if($this->params->get('catDescription') || $this->params->get('catTitle')) { ?>
    <div class="g-grid">
      <div class="g-block size-20 hidden-phone"></div>
  		<div class="categoryInfo uk-flex uk-flex-space-between uk-flex-bottom g-block size-80">
        <!-- Category title -->
        <h2 class="catTitle uk-flex"><?php echo $this->category->name; ?><?php if($this->params->get('catTitleItemCounter')) echo ' ('.$this->pagination->total.')'; ?></h2>
        <span id="filter-title" class="normal uk-animation-fade"></span>
  				<?php if($this->params->get('catDescription') && $this->category->description != ""): ?>
  				<!-- Category description -->
  					<div class="description"><?php echo $this->category->description; ?>
  					</div>
  				<?php endif; ?>

  		</div>
    </div>
	<?php } ?>
  <div class="g-grid">
    	<?php if((isset($this->leading) || isset($this->primary) || isset($this->secondary) || isset($this->links)) && (count($this->leading) || count($this->primary) || count($this->secondary) || count($this->links))): ?>
    	<!-- Item list -->
    <div class="g-block size-20">
      <div class="filter-container">
        <div class="gold normal"><?php echo JText::_('BY_CATEGORY'); ?></div>
        <ul id="tags" class="uk-nav" data-uk-nav>
						<li class="filter-tag-li" class="uk-active"><a href="#" class="filter-tag" data-filter = "*"><span class="black"><?php echo JText::_('JALL');?></a></li>
          <?php
          $tags = [];
          foreach($this->leading as $key=>$item):
            $this->item = $item;
            foreach ($item->tags as $tag) {
              //if(!in_array($tag->name, $tags)) array_push($tags, $tag->name);
              array_push($tags, $tag->name);
            }
          endforeach;
          $tags = array_unique($tags);
          foreach ($tags as $key => $value) { ?>
						<li>
							<a href="#" class="filter-tag" data-filter="<?php echo "." . JFilterOutput::stringURLSafe($value);?>">
							<?php echo $value; ?></a>
						</li>
          <?php }
          ?>
        </ul>
      </div>
    </div>
    <div class="g-block size-80">
      <div class="uk-margin uk-grid-width-1-1 uk-grid-width-small-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 grid" data-uk-grid="{gutter: 3,controls: '#tags'}" data-uk-grid-match="{target:'.uk-panel', row: true}">
    		<?php if(isset($this->leading) && count($this->leading)): ?>
    		<!-- Leading items -->
    			<?php foreach($this->leading as $key=>$item): ?>
    				<?php
    					// Load category_item.php by default
    					$this->item = $item;
    					echo $this->loadTemplate('item');
    				?>
    			<?php endforeach; ?>
    		<?php endif; ?>
    	</div>
    </div>
  <div>
	<!-- Pagination -->
	<?php if($this->pagination->getPagesLinks()): ?>
	<div class="k2Pagination">
		<?php if($this->params->get('catPagination')) echo $this->pagination->getPagesLinks(); ?>
		<div class="clr"></div>
		<?php if($this->params->get('catPaginationResults')) echo $this->pagination->getPagesCounter(); ?>
	</div>
	<?php endif; ?>

	<?php endif; ?>
</div>

<script>
jQuery(document).ready(function() {
  jQuery('ul#tags li a').click(function(event) {
    // console.log(jQuery(this).html());
    jQuery('#filter-title').toggle();
    jQuery('#filter-title').html(jQuery(this).html());
    jQuery('#filter-title').toggle();
  });
})
</script>
<script>
	// init Masonry
	var $grid = jQuery('.grid').isotope({
	  // options...
		itemSelector: '.tags',
		percentPosition: true,
		masonry: {
			columnWidth: '.tags'
		}
	});
	jQuery('.filter-tag').click(function() {
		var filterValue = jQuery(this).attr('data-filter');
		// console.log(filterValue);
		$grid.isotope({ filter: filterValue });
	});
	// layout Masonry after each image loads
	$grid.imagesLoaded().progress( function() {
	  $grid.isotope('layout');
	});

</script>
<!-- End K2 Category Layout -->
