<?php

// Function to calculate the size score based on word count
function calculateSizeScore($cvText) {
    $wordCount = str_word_count($cvText);
    return min($wordCount / 60, 5); // Adjusted threshold from 200 to 60
}

// Function to calculate the keyword score
function calculateKeywordScore($cvText) {
    // Define keywords to search for
    $keywords = ['experiência', 'competências', 'formação', 'trabalho', 'educação'];

    // Initialize score
    $score = 0;

    // Count occurrences of keywords in CV text
    foreach ($keywords as $keyword) {
        $score += substr_count(strtolower($cvText), strtolower($keyword));
    }

    // Cap score at 5
    return min($score, 5);
}

// Retrieve CV text from the form submission
$cvText = $_POST['cvText'];

// Calculate scores
$sizeScore = calculateSizeScore($cvText);
$keywordScore = calculateKeywordScore($cvText);

// Calculate average score
$averageScore = ($sizeScore + $keywordScore) / 2;

// Redirect to result page with scores as URL parameters
header("Location: result.php?averageScore=$averageScore");
exit();
?>
