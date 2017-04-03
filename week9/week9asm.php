<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Assembler</title>
</head>
<body>
    <h1>Josh's MUCPU 2017 PHP Assembler</h1>
    <form name="sourceForm" method="post" action="w9asm.php">
    <p>Enter source code here:<br>
    <textarea name="source" rows="10" cols="40"><?php
    echo "LOOP1: LOD NUM1\n";

    echo "LOOP2: ADD NUM2\n";

    echo "       OUT 01\n";

    echo "       JNZ LOOP2\n";

    ?></textarea>
    </p>
    <input type="submit" value="Run Assembler">
    </form>
    <?php
    if(!empty($_POST['source'])) {
        
        $source = $_POST['source'];
        
        echo "<p><pre>$source</pre></p>";
        
    }

    ?>
</body>
</html>