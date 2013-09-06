<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2011-11-03
// $Id:$
// ------------------------------------------------------------------------- //

include_once "../../mainfile.php";
include_once "function.php";

//判斷是否對該模組有管理權限
$isAdmin=false;
if ($xoopsUser) {
    $module_id = $xoopsModule->getVar('mid');
    $isAdmin=$xoopsUser->isAdmin($module_id);
}

$interface_menu[_TAD_TO_MOD]="index.php";
if($xoopsUser){
  $interface_menu[_MD_TADCAL_SMNAME2]="event.php";
  $interface_menu[_MD_TADCAL_SMNAME3]="download.php";
}
if($isAdmin){
  $interface_menu[_TAD_TO_ADMIN]="admin/main.php";
}

?>