<?php
defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helper.php';

$data = modPHelper::getData($params);

require JModuleHelper::getLayoutPath('mod_ww_popup2');

?>
