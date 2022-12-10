<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recipe_search_stylesheet.php">
    <title>Recipe Search</title>
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
        echo 'Success: A proper connection to MySQL was made.';
        echo '<br>';
        echo 'Host information: '.$mysqli->host_info;
        echo '<br>';
        echo 'Protocol version: '.$mysqli->protocol_version;?>
</head>
<body>
    <?php 
    $query = "SELECT title, subtitle FROM recipe_database";
    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        die ("Database query failed.");
    }
    
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="recipeP">
            <p class="recipeP_Title" ><?php echo $row['title']; ?></p>
            <p class="recipeP_Title2" ><?php echo $row['subtitle']; ?></p>
        </div>
    <?php } ?>
</body>
</html>