<?php
/*
Plugin Name: Employment Widget
Plugin URI: http://portfolio.1819.zia.nxtmediatech.eu/
Version: 1.0
Description: Displays Employment Widget
Author: Shahzbzia
Author URI: http://portfolio.1819.zia.nxtmediatech.eu/
*/
 
class Employment_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
        $widget_ops = array('classname' => 'Employment_Widget', 'description' => 'Displays Employment Status!' );
        $this->WP_Widget('Employment_Widget', 'Employment widget', $widget_ops);
    }

    
    public function form( $instance ) {
       // PART 1: Extract the data from the instance variable
       $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
       $title = $instance['title'];
       $text = $instance['text'];   

       // PART 2-3: Display the fields
       ?>
       <!-- PART 2: Widget Title field START -->
       <p>
        <label for="<?php echo $this->get_field_id('title'); ?>">Title: 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
                 name="<?php echo $this->get_field_name('title'); ?>" type="text" 
                 value="<?php echo attribute_escape($title); ?>" />
        </label>
        </p>
        <!-- Widget Title field END -->

       <!-- PART 3: Widget Text field START -->
       <p>
        <label for="<?php echo $this->get_field_id('text'); ?>">Text: 
          <input class="widefat" id="<?php echo $this->get_field_id('text'); ?>" 
                 name="<?php echo $this->get_field_name('text'); ?>" type="text" 
                 value="<?php echo attribute_escape($text); ?>" />
        </label>
        </p>
        <!-- Widget Text field END -->
       <?php

    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['text'] = $new_instance['text'];
        return $instance;
    }
	function widget($args, $instance) {
        // PART 1: Extracting the arguments + getting the values
        extract($args, EXTR_SKIP);
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
        $text = empty($instance['text']) ? '' : $instance['text'];

        // Before widget code, if any
        echo (isset($before_widget)?$before_widget:'');

        // PART 2: The title and the text output
        if (!empty($title))
        echo $before_title . $title . $after_title;;
        if (!empty($text))
        echo $text;

        // After widget code, if any  
        echo (isset($after_widget)?$after_widget:'');
    }
}

add_action( 'widgets_init', create_function('', 'return register_widget("Employment_Widget");') );

?>