<?php 
//when file is missing include give warning and require give fatal error
//include_once or require_once did not include file if file already included. 
include "abc.php";
require "abcs.php";
echo "hello";
include_once "abc.php";
require_once "abc.php";
/* 
include 
require 
incldue_once 
require_once

*/
?>