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

$name = substr(basename(__DIR__), 4);
$class_name = "Mod".ucfirst(str_replace('_', '', ucwords($name, '_'))); // portal_obj_blog into ModPortalObjBlog

include(__DIR__."/lib.class.$name.php");
$GLOBALS['cls'.$class_name] = new $class_name(0, 0);

$r = $GLOBALS['cls'.$class_name]->uninstall();
if (gettype($r) === 'string') {
    $admin->print_error($r);
}
