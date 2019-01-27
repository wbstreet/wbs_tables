<?php
/**
 *
 * @category        module
 * @package         wbs_tables
 * @author          Konstantin Polyakov
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.10.0
 *
 */

/* -------------------------------------------------------- */
// Must include code to stop this file being accessed directly
if(defined('WB_PATH') == false) { die('Illegale file access /'.basename(__DIR__).'/'.basename(__FILE__).''); }
/* -------------------------------------------------------- */

$path_core = WB_PATH.'/modules/wbs_core/include_all.php';
if (file_exists($path_core)) include($path_core);
else echo "<script>console.log('Модуль таблиц требует модуль \"wbs_core\"')</script>";

class WbsTables extends Addon {

    function __construct() {
        parent::__construct('wbs_tables', null, null);
    }
    
    function install() {
        return TRUE;
    }
    
    function uninstall() {
        return TRUE;
    }
    
}