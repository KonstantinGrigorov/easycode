<?php
namespace myapp;

require_once 'blog/post/post.php';
require_once 'blog/user/post.php';
require_once 'blog/user/user.php';

use myapp\blog\user;
use myapp\blog\post\Post;
//use myapp\blog\user\Post as UserPost;

$user = new user\User();
$post = new Post();
$postUser = new user\Post();

