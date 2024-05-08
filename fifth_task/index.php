<?php

    // if ( isset( $_GET['p'] ) ) {
    //     echo $_GET['p'];
    // }

    if ( isset( $_GET['p'] ) ) {
        $text = htmlspecialchars($_GET['p']);
        echo $text;
    }

?>
Hui
<form action="" method="GET">
    <input type="text" name="p">
    <input type="submit" value="Send">
</form>
