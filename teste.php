<!DOCTYPE html>
<html lang="en">

  <head>
    <style>
        .gr{
            color: green;
        }
        .re{
            color: red;
        }
    </style>
<body>
              <span id="textToHighlight">
        <h4>Engenharia Informática</h4>
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