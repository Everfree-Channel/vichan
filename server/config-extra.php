<?php

  include '/vagrant/inc/config.php';
  // Some extra default config stuff for vagrant instances

  $config['cache']['enabled'] = 'redis';
  $config['cache']['redis'] = array('localhost', 6379, '', 1);

  $config['thumb_ext'] = '';
  $config['thumb_keep_animation_frames'] = 1000;
  $config['thumb_method'] = 'gm+gifsicle';

  $config['strip_exif'] = true;
  $config['use_exiftool'] = true;

  /*
   * For lack of a better name, “boardlinks” are those sets of navigational links that appear at the top
   * and bottom of board pages. They can be a list of links to boards and/or other pages such as status
   * blogs and social network profiles/pages.
   *
   * "Groups" in the boardlinks are marked with square brackets. Tinyboard allows for infinite recursion
   * with groups. Each array() in $config['boards'] represents a new square bracket group.
   */


  $config['boards'] = array(
    array('efchan' => '/'), array('ef'), array('site')
  );

  // Whether or not to put brackets around the whole board list
  $config['boardlist_wrap_bracket'] = false;

  // Show page navigation links at the top as well.
  $config['page_nav_top'] = false;

  // Show "Catalog" link in page navigation. Use with the Catalog theme.
  // $config['catalog_link'] = 'catalog.html';

  // Board categories. Only used in the "Categories" theme.
  // $config['categories'] = array(
  // 	'Group Name' => array('a', 'b', 'c'),
  // 	'Another Group' => array('d')
  // );
  // Optional for the Categories theme. This is an array of name => (title, url) groups for categories
  // with non-board links.
  // $config['custom_categories'] = array(
  // 	'Links' => array(
  // 		'Tinyboard' => 'http://tinyboard.org',
  // 		'Donate' => 'donate.html'
  // 	)
  // );
