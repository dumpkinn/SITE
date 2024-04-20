<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve CV text from the form
    $cvText = $_POST['cvText'];

    // Call Python script to analyze CV
    $pythonScript = "python3 analyze_cv.py";
    $cmd = "$pythonScript " . escapeshellarg($cvText);
    $output = shell_exec($cmd);

    // Parse the output to extract analysis scores
    list($sizeScore, $grammarScore, $keywordScore) = explode(" ", trim($output));

    // Redirect to result page with scores as URL parameters
    header("Location: result.php?sizeScore=$sizeScore&grammarScore=$grammarScore&keywordScore=$keywordScore");
    exit();
}
?>
