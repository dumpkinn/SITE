<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Analysis Result</title>
</head>
<body>
    <h1>CV Analysis Result</h1>
    <?php
    // Retrieve parameters from URL
    $sizeScore = $_GET['sizeScore'];
    $keywordScore = $_GET['keywordScore'];
    $averageScore = $_GET['averageScore'];

    // Display scores
    echo "<p>Size Score: $sizeScore</p>";
    echo "<p>Keyword Score: $keywordScore</p>";
    echo "<p>Average Score: $averageScore</p>";
    ?>
</body>
</html>