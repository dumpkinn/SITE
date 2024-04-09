<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>

  <head>
    <style>
        .gr{
            color: green;
        }
        .re{
            color: red;
        }
    </style>


            <span id="textToHighlight">
        <h4>Engenharia Informática</h4>
    </span>

    <script>
        var s = 20;
        textElement.textContent = s;

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
            