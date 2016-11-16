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
     <?php if (in_array('islandora:collectionCModel', $object['models'])): ?>
       <dt class="fa fa-folder-open-o" style="font-size: 6em; color: #777;"></dt> 
       <?php else: ?><dt class="islandora-object-thumb"><?php print $object['thumb']; ?><?php print $object['model']; ?></dt>
     <?php endif; ?>
       <dd class="islandora-object-caption"><?php print $object['link']; ?></dd>
     </dl>
   </div>
 <?php endforeach; ?>
</div>
