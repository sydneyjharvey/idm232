<?php
header("Content-type: text/css");


$font_family = "";
?>

header {
    height: 100px;
    background-color: DarkSeaGreen;
}

#h_Item1 {
    grid-area: Home;
}
#h_Item2 {
    grid-area: Add;
}
#h_Item3 {
    grid-area: Edit;
}
#h_Item4 {
    grid-area: View;
}
#h_Item5 {
    grid-area: Delete;
}
#h_Item6 {
    grid-area: Search;
}

.header_Content {
    height: 100px;
    display: grid;
    grid-template-collumns: 15% 15% 15% 15% 15% 25%;
    grid-template-areas:
        "Home Add Edit View Delete Search";
    justify-content: stretch;
    justify-items: center;
    align-items: center;
}
