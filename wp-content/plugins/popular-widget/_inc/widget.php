<?php

	/**
	 * Popular Widget - Widget
	 *
	 * @file widget.php
	 * @package Popular Widget
	 * @author Hafid Trujillo
	 * @copyright 20010-2013
	 * @filesource  wp-content/plugins/popular-widget/_inc/widget.php
	 * @since 1.6.0
	 */
	
	global $wpdb;
		
	$this->tabs = ( empty( $instance['order'] ) ) 
	? $this->tabs : $instance['order'];
	
	$this->args = $args;
	$this->instance = wp_parse_args( $instance, $this->defaults );
	
	extract( $this->args ); extract( $this->instance ); 
	
	foreach( $posttypes as $type => $val ) 
		$types_array[] = "'$type'";
	
	$this->instance['number'] 	= $this->number;
	$this->instance['types'] 	= implode( ',', $types_array );
	
	if( empty( $this->instance['meta_key'] ) )
		$this->instance['meta_key'] = '_popular_views';
	
	$disabled_tabs = 0;
	$this->time = date( 'Y-m-d H:i:s', strtotime( "-{$lastdays} days", current_time( 'timestamp' ) ) );
	
	foreach( array( 'nocomments', 'nocommented', 'noviewed', 'norecent', 'notags' ) as $disabled )
		if( empty( $this->instance[$disabled] ) ) $disabled_tabs ++;
	
	//start widget
	$output  = $before_widget ."\n";
	if( $title ) $output  .= $before_title. $title . $after_title . "\n";
	
	echo $output .=  $after_widget . "\n";