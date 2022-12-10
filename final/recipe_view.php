<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Recipe</title>
    <?php
        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'recipies';
        $db_port = 8889;

        $mysqli = new mysqli(
        $db_host,
        $db_user,
        $db_password,
        $db_db
        );
        if ($mysqli->connect_error) {
        echo 'Errno: '.$mysqli->connect_errno;
        echo '<br>';
        echo 'Error: '.$mysqli->connect_error;
        exit();
        }
        echo 'Success: A proper connection to MySQL was made.';
        echo '<br>';
        echo 'Host information: '.$mysqli->host_info;
        echo '<br>';
        echo 'Protocol version: '.$mysqli->protocol_version;?>
</head>
<body>
        <form method="GET" id="recipedelete_Body">
            Title of Recipe to View: <input type="text" name="viewed_Title" required/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

    <?php
        $viewed_Title = ($_GET["viewed_Title"]);
        echo $viewed_Title;

        $raw_result = "SELECT * FROM recipe_database WHERE title = '{$viewed_Title}' ";
        $result = mysqli_query($mysqli, $raw_result);

        if (!$result) {
            die ("Database query failed.");
        }
    
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="recipeP">
                <p><?php echo $row['title']; ?></p>
                <p><?php echo $row['subtitle']; ?></p>
                <p><?php echo $row['descript']; ?></p>
                <p><?php echo $row['Ingredients']; ?></p>
                <p><?php echo $row['Instructions']; ?></p>
            </div>
        <?php }

        mysqli_close($connection);
    ?>
</body>
</html>