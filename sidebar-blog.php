<?php
/*
	This is the blog side bar
*/
?>

<div class="col-md-3 sidebar"> <!-- make a 3 col area of the content -->
          <?php if ( ! dynamic_sidebar( 'blog' ) ): ?> <!-- if there are no widgets display -->
	          <h3>Heading</h3>
	          <p>Please add widgets to the blog sidebar to have them display here.</p>
      	<?php endif; ?>
</div> <!-- end of col-md-3 sidebar -->