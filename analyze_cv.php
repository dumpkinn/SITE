<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve CV text from the form
    $cvText = $_POST['cvText'];

    // Analyze CV text
    $sizeScore = calculateSizeScore($cvText);
    $grammarScore = calculateGrammarScore($cvText);
    $keywordScore = calculateKeywordScore($cvText);

    // Redirect to result page with scores as URL parameters
    header("Location: result.php?sizeScore=$sizeScore&grammarScore=$grammarScore&keywordScore=$keywordScore");
    exit();
}

// Function to calculate size score
function calculateSizeScore($cvText) {
    $wordCount = str_word_count($cvText);
    return min($wordCount / 200, 5);
}

// Function to calculate grammar score
function calculateGrammarScore($cvText) {
    // You can implement grammar analysis logic here
    // For simplicity, let's return a random score between 0 and 5
    return rand(0, 5);
}

// Function to calculate keyword score
function calculateKeywordScore($cvText) {
    // You can implement keyword analysis logic here
    // For simplicity, let's return a random score between 0 and 5
    return rand(0, 5);
}
?>