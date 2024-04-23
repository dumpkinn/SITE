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

// Texto do CV
$cvText = "
João da Silva
Rua Principal, 123
Qualquer Cidade, Brasil
Telefone: (12) 34567-8901
E-mail: joaodasilva@email.com

Resumo:
Profissional de tecnologia altamente experiente e habilidoso, com uma sólida formação em desenvolvimento de aplicações web complexas. Proficiente em diversas linguagens de programação, frameworks e tecnologias. Apaixonado por aprender e manter-se atualizado com as tendências do setor.

Experiência:
Engenheiro de Software Sênior
Soluções ABC Tech, Qualquer Cidade, Brasil
- Liderou várias equipes multidisciplinares no desenvolvimento e implantação bem-sucedidos de projetos de software críticos.
- Projetou e implementou soluções backend escaláveis usando Python e Django, garantindo alta performance e confiabilidade.
- Colaborou com as partes interessadas para levantar requisitos e traduzi-los em especificações técnicas.

Educação:
Mestre em Ciência da Computação
Universidade XYZ, Qualquer Cidade, Brasil

Certificações:
- Desenvolvedor Python Certificado (DPC)
- Arquiteto de Soluções Certificado AWS - Associado (AWS-CSAA)

Habilidades:
- Linguagens de Programação: Python, Java, JavaScript
- Frameworks: Django, Flask, React
- Gerenciamento de Banco de Dados: SQL, NoSQL
- Plataformas em Nuvem: AWS, Azure
- Controle de Versão: Git
- Resolução de Problemas
- Trabalho em Equipe
- Comunicação
";

// Calcular pontuação de tamanho e pontuação de palavras-chave
$sizeScore = calculateSizeScore($cvText);
$keywordScore = calculateKeywordScore($cvText);

// Calcular pontuação média
$averageScore = ($sizeScore + $keywordScore) / 2;

// Redirecionar para a página de resultado com os parâmetros de URL
header("Location: result.php?sizeScore=$sizeScore&keywordScore=$keywordScore&averageScore=$averageScore");
exit();

?>