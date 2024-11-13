<?php
// データベース接続用の関数
function db_conn()
{
    try {
        // データベースの接続情報を設定します
        $db_name = 'masumi1214_gs_kadai11';     // データベース名
        $db_host = 'mysql3101.db.sakura.ne.jp'; // DBホスト
        $db_id   = 'masumi1214_gs_kadai11';     // ユーザー名
        $db_pw   = 'mieko0623'; 
        
        // DSN (Data Source Name) を作成してデータベースに接続
        $server_info = 'mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host;
        $pdo = new PDO($server_info, $db_id, $db_pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo; // 接続が成功した場合、PDOインスタンスを返す

    } catch (PDOException $e) {
        // 接続失敗時のエラーメッセージを表示
        exit('DB Connection Error: ' . $e->getMessage());
    }
}
?>
