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
