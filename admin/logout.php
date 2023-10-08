<?php 
require('include/require.php');
session_start();
session_destroy();
redirect('index.php');
?>