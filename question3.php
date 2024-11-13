<?php
session_start(); // セッション開始

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['body_type'] = $_POST['body_type']; // セッションに保存
    header('Location: question4.php'); // 次の質問ページに移動
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愛犬の体型は？</title>
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
    <h1 class="title">愛犬の体型は？</h1>
    <form action="question3.php" method="post">
        <div class="option">
            <input type="radio" id="slim" name="body_type" value="痩せ" required>
            <label for="slim">痩せ</label>
        </div>
        <div class="option">
            <input type="radio" id="normal" name="body_type" value="普通">
            <label for="normal">普通</label>
        </div>
        <div class="option">
            <input type="radio" id="chubby" name="body_type" value="肥満">
            <label for="chubby">肥満</label>
        </div>

        <div class="buttons">
            <button type="submit" class="button">次へ</button>
        </div>
    </form>
</div>

</body>
</html>