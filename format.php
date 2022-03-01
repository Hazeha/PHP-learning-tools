<html>
<head><title>Text Formatting</title></head>
<body><h2>Text Formatting: result</h2>
<?php
    $color = $_POST['color'];
    $face = $_POST['face'];
    $text = $_POST['text'];
    if ( $face != "normal" ) {
        $text = "<$face>$text</$face>";
    }
        echo "<p style=color:$color>$text</p>";
?>
<p><a href="format.html">Try again?</a></p>
</body>
</html>
