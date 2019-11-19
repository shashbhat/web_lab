<html>

<head>
    <title>Visitor Count</title>
    <style type="text/css">
        h1,
        h2 {
            text-align: centre
        }
    </style>
</head>

<body>
    <h1>Welcome to MY WEB PAGE</h1>
    <?php
    $file = "count.txt";
    $handle = fopen($file, 'r') or die("cannot open file:$file");
    $count = fread($handle, 10);
    fclose($handle);
    $count++;
    echo "<h2>No of visitor who visited this page:$count</h2>";
    $handle = fopen($file, 'w') or die("cannot open file:$file");
    fwrite($handle, $count);
    fclose($handle);
    ?>
</body>

</html>