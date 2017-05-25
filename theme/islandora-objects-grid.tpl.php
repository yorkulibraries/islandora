<?php

/**
 * @file
 * Render a bunch of objects in a list or grid view.
 */
?>
<div class="islandora-objects-grid clearfix">
 <?php foreach($objects as $object): ?>
   <div class="islandora-objects-grid-item">
     <dl class="islandora-object <?php print $object['class']; ?>">
     <?php $fa_awesome_models = array('islandora:collectionCModel', 'islandora:newspaperCModel'); ?>
     <?php if (array_intersect($fa_awesome_models, $object['models'])): ?>
       <dt class="fa fa-folder-open-o" style="font-size: 6em; color: #777;"></dt> 
       <?php else: ?><dt class="islandora-object-thumb"><?php print $object['thumb']; ?></dt>
     <?php endif; ?>
       <dd class="islandora-object-caption"><?php print $object['link']; ?></dd>
     </dl>
   </div>
 <?php endforeach; ?>
</div>
