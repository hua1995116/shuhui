<?php
/**
* TestGuest Version1.0
* ================================================
* Copy 2010-2012 yc60
* Web: http://www.yc60.com
* ================================================
* Author: Lee
* Date: 2010-8-12
*/
//防止恶意调用
if (!defined('IN_TG')) {
	exit('Access Defined!');
}
//防止非HTML页面调用
if (!defined('SCRIPT')) {
	exit('Script Error!');
}
global $_system;
?>
<title>书法交流平台</title>
<link rel="shortcut icon" href="" />
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_system['skin']?>/basic.css" />
<link rel="stylesheet" type="text/css" href="styles/<?php echo $_system['skin']?>/<?php echo SCRIPT?>.css" />
<link rel="stylesheet" type="text/css" href="styles/1/header.css" />
<link rel="stylesheet" type="text/css" href="styles/1/bottom.css" />
<link rel="stylesheet" type="text/css" href="styles/1/bootstrap.min.css">
<script type="text/javascript" src="js/header.js"></script>