<?php

function shoot_sub_init_presets(){
	return 2;
}

function shoot_sub_preprocess_page(&$vars) {
	
	if (isset($vars['title'])) {
		
		$pageTitle = 'Dead Sea';
		$pageTitle2 = 'BLOG';
		
		$title = drupal_get_title();
		if($title == $pageTitle){
			
			echo "<style type=\"text/css\">#section-page-title { background: url('http://deadseatest.com/sites/default/files/header1.jpg'); background-size: 100% auto; height: 200px; margin-bottom: 20px; } </style>";
		
			//$node = &$vars['node'];
			//$subtitle = $node->field_sub_title[LANGUAGE_NONE][0]['value'];
			
			
			
		} elseif($title == $pageTitle2){
			
			echo "<style type=\"text/css\">#section-page-title { background: url('http://deadseatest.com/sites/default/files/header2.jpg'); background-size: 100% auto; height: 200px; margin-bottom: 20px; } 
				h1.page_title { color: #fff; }</style>";
		
			
		}
		
		
  	}
  
  
  
}