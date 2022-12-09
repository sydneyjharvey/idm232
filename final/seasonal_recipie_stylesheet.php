<?php
header("Content-type: text/css");

$font_family = "";
?>

#seasonal_Panel {
    width: 70%;
    height: 200px;
    background-color: orange;
    margin: auto;
}

.s_Item1 {
    grid-area: Season;
}

.button_Border {
    width:30%
    backbround-color: lime;
    grid-area: Button;
}
#seasonal_Contents {
    display: grid;
    grid-template-collumns: 40% 20% 40%;
    grid-template-rows: auto;
    grid-template-areas:
        ". Season ."
        ". Button .";
    justify-content: stretch;
    justify-items: center;
    align-items: center;
    margin: auto;
    padding: 50px 0;
}