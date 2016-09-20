<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<p>
	<label for="<?php echo $widget->get_field_id('title'); ?>"><?php _e('Title', 'cardealer') ?>:</label>
	<input class="widefat" type="text" id="<?php echo $widget->get_field_id('title'); ?>"
		   name="<?php echo $widget->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>"/>
</p>

<p>
	<label for="<?php echo $widget->get_field_id('post_number'); ?>"><?php _e('Cars Number', 'cardealer') ?>:</label>
	<input class="widefat" type="text" id="<?php echo $widget->get_field_id('post_number'); ?>"
		   name="<?php echo $widget->get_field_name('post_number'); ?>"
		   value="<?php echo $instance['post_number']; ?>"/>
</p>

<p>
	<?php
	$checked = "";
	if ($instance['show_see_all_button'] == 'true') {
		$checked = 'checked="checked"';
	}
	?>
	<input type="checkbox" id="<?php echo $widget->get_field_id('show_see_all_button'); ?>"
		   name="<?php echo $widget->get_field_name('show_see_all_button'); ?>" value="true" <?php echo $checked; ?> />
	<label for="<?php echo $widget->get_field_id('show_see_all_button'); ?>"><?php _e('Show "All Cars" button', 'cardealer') ?></label>
</p>

