<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2011-11-03
// $Id:$
// ------------------------------------------------------------------------- //

$adminmenu = array();
$icon_dir=substr(XOOPS_VERSION,6,3)=='2.6'?"":"images/";

$i = 1;
$adminmenu[$i]['title'] = _MI_TAD_ADMIN_HOME ;
$adminmenu[$i]['link'] = 'admin/index.php' ;
$adminmenu[$i]['desc'] = _MI_TAD_ADMIN_HOME_DESC ;
$adminmenu[$i]['icon'] = 'images/admin/home.png' ;

$i++;
$adminmenu[$i]['title'] = _MI_TADCAL_ADMENU1;
$adminmenu[$i]['link'] = "admin/main.php";
$adminmenu[$i]['desc'] = _MI_TADCAL_ADMENU1 ;
$adminmenu[$i]['icon'] = "images/admin/calendar_week.png";

$i++;
$adminmenu[$i]['title'] = _MI_TAD_ADMIN_ABOUT;
$adminmenu[$i]['link'] = 'admin/about.php';
$adminmenu[$i]['desc'] = _MI_TAD_ADMIN_ABOUT_DESC;
$adminmenu[$i]['icon'] = 'images/admin/about.png';
?>