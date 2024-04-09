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

      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Informática.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6>18.1</h6>
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
            