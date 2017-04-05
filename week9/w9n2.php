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
    <textarea name="source" rows="10" cols="40"></textarea>
    </p>
    <input type="submit" value="Run Assembler">
    </form>
    <?php
        $source = $_POST['source'];
        $arr = explode("\n", $source);
        for($i = 0; $i < $arr; $i++) {
            preg_match('/(beehive|fired|furious|lame)\i.(" ").(\w+)/', $matches);
            print_r("$matches");
            
        }
    ?>
</body>
</html>
