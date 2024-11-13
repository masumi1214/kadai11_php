<?php
require_once('db_connect.php'); // db_connect.phpを読み込んでデータベース接続を確立

// フォームから送信されたデータを受け取る
$dog_name = isset($_POST['dog_name']) ? $_POST['dog_name'] : null;
$body_type = isset($_POST['body_type']) ? $_POST['body_type'] : null;
$exercise = isset($_POST['exercise']) ? $_POST['exercise'] : null;
$food_frequency = isset($_POST['food_frequency']) ? $_POST['food_frequency'] : null;
$water_intake = isset($_POST['water_intake']) ? $_POST['water_intake'] : null;
$personality = isset($_POST['personality']) ? $_POST['personality'] : null;
$favorite_play = isset($_POST['favorite_play']) ? $_POST['favorite_play'] : null;
$health_condition = isset($_POST['health_condition']) ? $_POST['health_condition'] : null;
$activity_level = isset($_POST['activity_level']) ? $_POST['activity_level'] : null;

// データベース接続
$pdo = db_conn();

try {
    // データベースにデータを挿入するSQLクエリを準備
    $stmt = $pdo->prepare('INSERT INTO dog_diagnosis 
        (dog_name, body_type, exercise, food_frequency, water_intake, personality, favorite_play, health_condition, activity_level) 
        VALUES 
        (:dog_name, :body_type, :exercise, :food_frequency, :water_intake, :personality, :favorite_play, :health_condition, :activity_level)');

    // バインド処理
    $stmt->bindValue(':dog_name', $dog_name, PDO::PARAM_STR);
    $stmt->bindValue(':body_type', $body_type, PDO::PARAM_STR);
    $stmt->bindValue(':exercise', $exercise, PDO::PARAM_STR);
    $stmt->bindValue(':food_frequency', $food_frequency, PDO::PARAM_STR);
    $stmt->bindValue(':water_intake', $water_intake, PDO::PARAM_STR);
    $stmt->bindValue(':personality', $personality, PDO::PARAM_STR);
    $stmt->bindValue(':favorite_play', $favorite_play, PDO::PARAM_STR);
    $stmt->bindValue(':health_condition', $health_condition, PDO::PARAM_STR);
    $stmt->bindValue(':activity_level', $activity_level, PDO::PARAM_STR);

    // クエリを実行
    $stmt->execute();
    
    // 成功時のリダイレクト先
    redirect('success.php');

} catch (PDOException $e) {
    // SQL実行時のエラーハンドリング
    exit('SQL Error: ' . $e->getMessage());
}
?>
