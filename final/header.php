<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header_stylesheet.php">
    <title>Header</title>
</head>
<body>
    <header>
        <div class="header_Content">
            <a id="h_Item1" href="index.php">Home</a>
            <a id="h_Item2" href="recipe_create.php">Add Recipe</a>
            <a id="h_Item3" href="recipe_update.php">Edit Recipe</a>
            <a id="h_Item4" href="recipe_view.php">View Recipe</a>
            <a id="h_Item5" href="recipe_delete.php">Delete Recipe</a>
            <form method="GET" id="h_Item6">
                <input type="text" name="search" required/>
                <input type="submit" value="Search"/>
            </form>

        </div>
    </header>
    <?php
    if (isset($_GET["search"])) {
        require "3-search.php";
        if (count($results) > 0) {
            foreach ($results as $row) {
                echo $row['title'];
                echo $row['subtitle'];
            }
        } else { echo "<div>No results found</div>"; }
    }
    ?>
</body>
</html>