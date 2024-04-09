<!DOCTYPE html>
<html>
<head>
    <title>Text Color Changer</title>
    <style>
        .highlight {
            color: red; /* Change the color to whatever you prefer */
        }
    </style>
</head>
<body>
    <?php
    // Assume $s is a PHP variable with some value
    $s = 2; // You can change this value to test
    ?>
    <span id="textToHighlight">
        <?php echo $s; ?>
    </span>

    <script>
        // Get the value of $s from PHP
        var s = <?php echo $s; ?>;

        // Get the element to change color
        var textElement = document.getElementById('textToHighlight');

        // Check if s is bigger than one
        if (s > 1) {
            // If true, apply the highlight class
            textElement.classList.add('highlight');
        } else {
            // If false, remove the highlight class
            textElement.classList.remove('highlight');
        }
    </script>
</body>
</html>