<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recipe_search_stylesheet.php">
    <title>View Recipe</title>
    <?php
        $db_host = 'localhost';
        $db_user = 'sydnezm0_remoteUser9104';
        $db_password = '087149recipe';
        $db_db = 'sydnezm0_recipies';
        $db_port = 3306;

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
    ?>
</head>
<body>
    <?php include_once 'header.php';?>
        <form method="GET" id="recipedelete_Body">
            Title of Recipe to View: <input type="text" name="viewed_Title" required/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

    <?php
        $viewed_Title = ($_GET["viewed_Title"]);

        $raw_result = "SELECT * FROM recipe_database WHERE title = '{$viewed_Title}' ";
        $result = mysqli_query($mysqli, $raw_result);

        if (!$result) {
            die ("Database query failed.");
        }
    
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="recipe_View">
                <h3><?php echo $row['title']; ?></h3>
                <h4><?php echo $row['subtitle']; ?></h4>
                <p><?php echo $row['descript']; ?></p>
                <br>
                <p><?php echo $row['Ingredients']; ?></p>
                <br>
                <p><?php echo $row['Instructions']; ?></p>
            </div>
        <?php }

        mysqli_close($connection);
    ?>
</body>
</html>