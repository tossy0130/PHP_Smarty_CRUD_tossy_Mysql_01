<?php
require('Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = './templates/';

// Mysql接続
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'tossy_db_01';

// === Mysql接続
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die('DB connect エラー: ' . $conn->connect_error);
}


// === データベースからユーザーデータを取得
$users = array();
$sql = "SELECT * FROM t_calendar_tb_01";
$result = $conn->query($sql);

// === ループで取得
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();

$smarty->assign('users', $users);
$smarty->display('index.tpl');
