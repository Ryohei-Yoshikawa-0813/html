<?php
ini_set(display_errors, 1);

require_once('common.php');

$db->deletesyain($_POST["id"]);

show_top("社員情報の削除");
show_delete();
show_down(true);
?>