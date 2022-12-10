<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Recipe</title>
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
            Title of Recipe to Delete: <input type="text" name="removed_Title" required/><br>
            <input type="submit" name="submit" value="Submit"/>
        </form>

    <?php
        $removed_Title = ($_GET["removed_Title"]);
        echo $removed_Title;

        $query = "DELETE FROM recipe_database WHERE title = '{$removed_Title}' ";
        $query .- "LIMIT 1";

        $result = mysqli_query($mysqli, $query);

        if ($result && mysqli_affected_rows($mysqli) == 1) {
            echo "Success!";
        } else {
            die ("Database query failed. " . mysqli_error($connection));
        }

        mysqli_close($connection);
    ?>
</body>
</html>