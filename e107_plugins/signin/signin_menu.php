<?php
if(!defined('e107_INIT')){ exit; }

$caption = '';
$text    = e107::getParser()->parseTemplate('{SIGNIN}', true);
e107::getRender()->tablerender($caption, $text, 'signin');