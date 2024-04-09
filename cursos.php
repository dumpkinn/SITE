<!DOCTYPE html>
<html>
<head>
    <title>Text Color Changer</title>
    <style>
        .gr{
            color: green;
        }
        .re{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // Assume $s is a PHP variable with some value
    $s = 2; // You can change this value to test
    ?>
              <span id="textToHighlight">
        <?php echo "<h4>Engenharia Informática</h4>"; ?>
    </span>

    <script>
        var s = 20;

        var textElement = document.getElementById('textToHighlight');
        if (s >= 18.1) {
            textElement.classList.add('gr');
        }
        else if (s < 18.1) {
            textElement.classList.add('re');
        }
         else {
           
        }
    </script>
</body>
</html>