<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2011-11-03
// $Id:$
// ------------------------------------------------------------------------- //
include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";
define("_TAD_NEED_TADTOOLS"," 需要 tadtools 模組，可至<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad教材網</a>下載。");

define("_MI_TADCAL_ADMENU1", "行事曆管理");

//index.php
define("_MA_TADCAL_CATE_SN","行事曆編號");
define("_MA_TADCAL_CATE_TITLE","行事曆標題");
define("_MA_TADCAL_CATE_SORT","行事曆排序");
define("_MA_TADCAL_CATE_ENABLE","是否啟用");
define("_MA_TADCAL_CATE_HANDLE","遠端行事曆");
define("_MA_TADCAL_ENABLE_GROUP","可讀群組");
define("_MA_TADCAL_ENABLE_UPLOAD_GROUP","可寫群組");
define("_MA_TADCAL_GOOGLE_ID","登入Google帳號");
define("_MA_TADCAL_GOOGLE_ID_NOTE","（完整Email）");
define("_MA_TADCAL_GOOGLE_PASS","登入Google密碼");
define("_MA_TADCAL_CATE_FORM","行事曆設定");
define("_MA_TADCAL_CATE_GFORM","匯入Google行事曆");
define("_MA_TADCAL_CATE_GTITLE","Google行事曆名稱");
define("_MA_TADCAL_CATE_GNUM","事件數量");
define("_MA_TADCAL_ALL_OK","全部開放");
define("_MA_TADCAL_CURL_NEED","您的系統目前不支援 curl 功能，請設定之才能使用 Google 行事曆相關功能。<br>Linux系統只要安裝 php5-curl 套件即可。<br>底下以 Windows 下的 PHP 設定為例（Uniform Server 的 php 目錄在「UniServer\\usr\\local\\php」；XAMPP則為「xampp\\php」）：<ol><li>開啟 php 目錄下的 php.ini，將「extension=php_curl.dll」前的分號移除。</li><li>把 php 目錄下的 ssleay32.dll 及 libeay32.dll 複製到 Windows\\system32 下。</li><li>把 php 目錄下的 extensions\\php_curl.dll 複製到 Windows\\system32 下</li><li>重新啟動 apache。</li></ol>");
define("_TAD_ADD_CAL","新增行事曆");
define("_MA_TADCAL_NEW_CALENDAR","本站行事曆");
define("_TAD_ADD_GOOGLE","匯入Google行事曆");
define("_MA_TADCAL_GOOGLE_IMPORT","事件同步");
define("_MA_TADCAL_GOOGLE_EMPTY_EVENT","無事件可匯入");
define("_MA_TADCAL_CATE_EVENTS_AMOUNT","事件數");
define("_MA_TADCAL_GOOGLE_IMPORT_OK","事件同步完畢！");
define("_MA_TADCAL_GOOGLE_EXIST","已存在");
define("_MA_TADCAL_CATE_COLOR","文字色");
define("_MA_TADCAL_CATE_BGCOLOR","背景色");
define("_MA_TADCAL_LAST_UPDATE","最後更新時間");
define("_MA_TADCAL_ALL_SYNC","全部同步");
define("_MA_TADCAL_NEXT","下一步");
?>