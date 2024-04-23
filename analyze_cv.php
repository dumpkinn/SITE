
<?php

// Função para calcular a pontuação de tamanho com base na contagem de palavras
function calculateSizeScore($cvText) {
    $wordCount = str_word_count($cvText);
    return min($wordCount / 60, 5); // Limite ajustado de 200 para 60
}

// Função para calcular a pontuação de palavras-chave
function calculateKeywordScore($cvText) {
    // Definir palavras-chave para procurar
    $keywords = ['experiência', 'competências', 'formação', 'trabalho', 'educação'];

    // Inicializar pontuação
    $score = 0;

    // Contar ocorrências de palavras-chave no texto do CV
    foreach ($keywords as $keyword) {
        $score += substr_count(strtolower($cvText), strtolower($keyword));
    }

    // Limitar a pontuação a 5
    return min($score, 5);
}

// Retrieve CV text from the form submission
$cvText = $_POST['cvText'];

$sizeScore = calculateSizeScore($cvText);
$keywordScore = calculateKeywordScore($cvText);

// Calcular pontuação média
$averageScore = ($sizeScore + $keywordScore) / 2;

// Redirecionar para a página de resultado com os parâmetros de URL
header("Location: result.php?sizeScore=$sizeScore&keywordScore=$keywordScore&averageScore=$averageScore");
exit();

?>