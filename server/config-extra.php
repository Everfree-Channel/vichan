<?php

  include '/vagrant/inc/config.php';
  // Some extra default config stuff for vagrant instances

  $config['cache']['enabled'] = 'redis';
  $config['cache']['redis'] = array('localhost', 6379, '', 1);
