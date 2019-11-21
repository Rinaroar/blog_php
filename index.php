<?php
// index.php
require_once 'model.php'; //model

$posts = get_all_posts();

require 'templates/list.php'; //vue

