<?php
header("Content-type: text/css");


$font_family = "";
?>

header {
    height: 20%;
    background-color: DarkSeaGreen;
}

#h_Item1 {
    grid-area: Home;
}
#h_Item2 {
    grid-area: Categories;
}
#h_Item3 {
    grid-area: Logo;
}
#h_Item4 {
    grid-area: Searchbar;
}

.logo {
    width: auto;
    height: auto;
    background-color: Beige;
}

.header_Content {
    display: grid;
    grid-template-collumns: 20% 20% 20% 20% 20%;
    grid-template-areas:
        "Home Categories Logo . Searchbar";
    justify-content: stretch;
    justify-items: center;
    align-items: center;
}
