<?php
session_start();
require("connect.php");

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    $_SESSION['dump'] = 'Connection success';
}

// Fetch data from the database
$query1 = "SELECT Title, Details, DateTime AS Created FROM people.bulletin";
$result = mysqli_query($connection, $query1);

// Check if the query failed
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin Board</title>
    <style>
        td,th{
            text-align: left;
            color: whitesmoke;
        }


        th{
            padding: 0px 0px 20px 0px;
            text-decoration: underline;
        }
        table{
            border-bottom: 5px solid black;
            margin: 20px 0px;
            width: 500px;
            background-color: darkolivegreen;
            padding: 20px;
        }

        input.submit{
            color: white;
            background-color: darkolivegreen;
            border: 5px solid black;
            width: 500px;
            height: 40px;
            font-weight: bolder;
            font-size: 20px;
        }
        div.frame{
            margin: 10px auto;
            border: none;
            width: 500px;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <div class="frame">
            
            <form action="index.php">
                <input type="submit" value="Submit New" class="submit">
            </form>
            <h1>Bulletin Board View</h1>
            <?php
            if (mysqli_num_rows($result) > 0) {
                
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<table>';
                        echo '<tr>';
                        echo '<th>' . $row['Created'].'</th>';
                        echo '<th>'. $row['Title'] .'</th>';        
                        echo '<tr>';
                        echo '<td>' . $row['Details'] . '</td>';       
                        echo '</tr>';
                        echo '</table>';
                    }
                
            } else {
                echo 'No titles found.';
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($connection);
?>
