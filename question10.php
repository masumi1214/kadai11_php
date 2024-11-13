<?php
session_start(); // セッション開始

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['activity_level'] = $_POST['activity_level']; // セッションに保存
    header('Location: result.php'); // 結果ページに移動
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愛犬の活動レベルは？</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ffe4e1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .question-container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
            text-align: center;
            border: 2px solid #ff8a80;
        }
        .title {
            font-size: 24px;
            color: #ff6f61;
            margin-bottom: 20px;
        }
        .option {
            flex: 1;
            padding: 20px;
            border: 2px solid #ffcccb;
            border-radius: 10px;
            background-color: #fff5f5;
            cursor: pointer;
            transition: border-color 0.3s, background-color 0.3s;
            text-align: center;
            position: relative;
        }
        .option input {
            display: none;
        }
        .option label {
            display: block;
            font-size: 16px;
            color: #333;
            cursor: pointer;
            padding: 10px;
            border-radius: 10px;
        }
        .option input:checked + label {
            border-color: #ff6f61;
            background-color: #ffe0e0;
        }
        .option:hover {
            border-color: #ff6f61;
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6f61;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #ff3d00;
        }
    </style>
</head>
<body>

<div class="question-container">
    <h1 class="title">愛犬の活動レベルは？</h1>
    <form action="question10.php" method="post">
        <div class="option">
            <input type="radio" id="low" name="activity_level" value="低い" required>
            <label for="low">低い</label>
        </div>
        <div class="option">
            <input type="radio" id="moderate" name="activity_level" value="普通">
            <label for="moderate">普通</label>
        </div>
        <div class="option">
            <input type="radio" id="high" name="activity_level" value="高い">
            <label for="high">高い</label>
        </div>

        <div class="buttons">
            <button type="submit" class="button">診断結果はこちら</button>
        </div>
    </form>
</div>

</body>
</html>
