<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Land</title>
    <link rel="stylesheet" href="../quiz1/style_quiz.css">
</head>
<body>
    <div class="main-div">
        <div class="inner-div">
        <div class="name_width name_height name">
        <h1><?php echo "Best of Luck, ".$_SESSION['user'] ?></h1>
            </div>
            <h2 class="question">Questions come here </h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="ans1" class="answer">
                    <label for="ans1" id="option1">answer option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans2" class="answer">
                    <label for="ans2" id="option2">answer option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans3" class="answer">
                    <label for="ans3" id="option3">answer option</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="ans4" class="answer">
                    <label for="ans4" id="option4">answer option</label>
                </li>
            </ul>
            <button id="submit">Submit</button>
            <div id="showScore" class="scoreArea"></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>