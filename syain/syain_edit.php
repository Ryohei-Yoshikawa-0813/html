<?php
require_once('common.php');

$member = $db->getsyain($_GET["id"]);//$member[0]

show_top("社員情報");
show_syain($member);
show_down(true);
?>