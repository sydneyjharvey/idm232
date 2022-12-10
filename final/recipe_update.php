<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recipe</title>
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
        <form method="GET" id="recipecreate_Body">
            Title of Recipe to Update: <input type="text" name="old_Title" required/><br>
            Title: <input type="text" name="new_Title"><br>
            Subtitle: <input type="text" name="new_Subtitle"><br>
            Description: <input type="text" name="new_Descript"><br>
            Ingredients: <input type="text" name="new_Ingredients"><br>
            Instructions: <input type="text" name="new_Instructions"><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

    <?php
        $old_Title = ($_GET["old_Title"]);
        $new_Title = ($_GET["new_Title"]);
        $new_Subtitle = ($_GET["new_Subtitle"]);
        $new_Descript = ($_GET["new_Descript"]);
        $new_Ingredients = ($_GET["new_Ingredients"]);
        $new_Instructions = ($_GET["new_Instructions"]);
        echo $old_Title;
        echo $new_Title;
        
        $query = "UPDATE recipe_database SET title = '{$new_Title}', subtitle = '{$new_Subtitle}', descript = '{$new_Descript}', Ingredients = '{$new_Ingredients}', Instructions = '{$new_Instructions}' WHERE title = '{$old_Title}' ";
        $result = mysqli_query($mysqli, $query);

        if ($result && mysqli_affected_rows($mysqli) == 1) {
            echo 'Success!';
        } else {
            die('Database query failed. ' . mysqli_error($connection));
        }

        mysqli_close($connection);
    ?>
</body>
</html>