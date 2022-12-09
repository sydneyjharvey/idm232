<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
        echo 'Protocol version: '.$mysqli->protocol_version;
        

//        $stmt = $mysqli->prepare("SELECT * FROM `recipe_database` WHERE `title` LIKE ? OR `subtitle` LIKE ?");
//        $stmt->execute([
//            "%".$_GET['search']."%", "%".$_GET["search"]."%"
//        ]);
//        $results = $stmt->fetchAll();
        

        $search = $_GET['search'];

        $raw_results = "SELECT * FROM recipe_database WHERE (`title` LIKE '%".$search."%')";
        $results = mysqli_query($mysqli, $raw_results);
        if (!$results) {
            die ("Database query failed.");
        }
    
        while ($row = mysqli_fetch_assoc($results)) { ?>
            <div>
                <p><?php echo $row['title']; ?></p>
            </div>
        <?php }

        $conn->close();
?>
</body>
</html>