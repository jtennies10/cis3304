<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>w9n2</title>
</head>
<body>
    <h1>Josh's w9n2</h1>
    <form name="sourceForm" method="post" action="w9n2.php">
    <p>Enter source code here:<br>
    <textarea name="source" rows="10" cols="40">
    <?php
        if(!empty($_POST['source'])) {
            $source = $_POST['source'];
            echo "$source";
        } else {
            defaultSource();
        }
    ?></textarea>
    </p>
    <input type="submit" value="Run Assembler">
    </form>
    <?php
        $arr = explode("\n", $source);
        for($i = 0; $i < count($arr); $i++) {
            preg_match('/(((beehive|fired|furious|lame)\\s)\\w+)/i', $arr[$i], $matches);
            $sub = explode(" ", $matches[0]);
            echo "$sub[1] ";
        }
    ?>
</body>
</html>
<?php
function defaultSource() {
    echo "Installing beehive help needed\n";
    echo "It broke so my boss fired me\n";
}
?>