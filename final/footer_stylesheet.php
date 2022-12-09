<?php
header("Content-type: text/css");


$font_family = "";
?>

footer {
    height: 30%;
    background-color: DarkSeaGreen;
}

.logo {
    width:150px;
    height:100px;
    background-color: Beige;
}

#f_Item1 {
    grid-area: Logo;
}
#f_Item2 {
    grid-area: Facebook;
}
#f_Item3 {
    grid-area: Instagram;
}
#f_Item4 {
    grid-area: Youtube;
}
#f_Item5 {
    grid-area: Twitter;
}
#f_Item6 {
    grid-area: RR;
}

.footer_Content {
    display: grid;
    grid-template-collumns: 40% 5% 5% 5% 5% 40%;
    grid-template-rows: auto;
    grid-template-areas:
        ". Logo Logo Logo Logo ."
        ". Facebook Instagram Youtube Twitter ."
        ". RR RR RR RR .";
    justify-content: stretch;
    justify-items: center;
    align-items: center;
}