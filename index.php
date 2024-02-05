<?php
session_start();
require("connect.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.card{
            width: 300px;
            margin: 10px auto;
            border: 5px solid black;
            padding: 10px 100px;;

            background-color: darkolivegreen;
        }
        body{
            background-color: whitesmoke;
        }
        h3,h4,h1{
            color: whitesmoke;
            display: inline-block;
        }
        h4.detail{
            vertical-align: top;
        }
        input.check{
            font-weight: bolder;
            color: white;
            display: inline-block;
            background-color: darkred;
            border: 1px solid black;
        }
        textarea.details{
            height: 100px;
            margin-left: 40px;
            width: 200px;
            resize: none;
        }
        input.title{
            margin-left: 35px;
            width: 200px;
        }
        input.btn{
            display: inline-block;
        }
        input.submit{
            margin-left: 135px;
            background-color: darkgreen;
            color: white;
            background-color: darkgreen;
            border: 1px solid black;
        }
        form.btn{
            display: inline-block;
        }
        form.card{
            in
        }

    </style>
</head>
<body>
    <div>
        <div class="card">
            <form action="process.php" method="POST" class="card">
                <h3>
                    <?php
                    if(isset($_SESSION['message']) && $_SESSION['message'] === 'Success') {
                        echo $_SESSION['message'];
                    }
                    unset($_SESSION['message']);
                    ?>
                </h3><br>
                <h1>Bulletin Board Entry</h1><br>
                <h4>Subject</h4>
                <input type="text" name="title" class="btn title"><br>
                <h4 class="detail">Details</h4>
                <textarea name="details" class="btn details"></textarea><br>
                <input type="submit" class="submit">
                <input type="submit" formaction="succes.php "value="Check the list" class="check">
                </form>
            
            
        </div>
    </div>
</body>
</html>
