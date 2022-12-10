<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Recipe</title>
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
        <form method="GET" id="recipecreate_Body">
            Title: <input type="text" name="new_Title" required/><br>
            Subtitle: <input type="text" name="new_Subtitle" required/><br>
            Description: <input type="text" name="new_Descript" required/><br>
            Ingredients: <input type="text" name="new_Ingredients" required/><br>
            Instructions: <input type="text" name="new_Instructions" required/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

    <?php
        $new_Title = ($_GET["new_Title"]);
        $new_Subtitle = ($_GET["new_Subtitle"]);
        $new_Descript = ($_GET["new_Descript"]);
        $new_Ingredients = ($_GET["new_Ingredients"]);
        $new_Instructions = ($_GET["new_Instructions"]);
        $sql = "INSERT INTO recipe_database (title, subtitle, descript, Ingredients, Instructions) VALUES ('{$new_Title}', '{$new_Subtitle}', '{$new_Descript}', '{$new_Ingredients}', '{$new_Instructions}')";

        if (mysqli_query($mysqli, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }

        mysqli_close($connection);
    ?>
</body>
</html>