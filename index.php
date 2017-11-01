<?php
    $nameGuest = "Lisa";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="oefening1.css">
        <script src="oefening1.js"></script>
    </head>
    <body>
        <p id = "aqua"> 
            Farst Paragraph
        </p>
        <span >
            welcome sir <?php  echo $nameGuest;  ?>
        </span>
        <div onclick="jojo()">
            the div
        </div>
        <span class = "pizza"> 
            the span
        </span>

        <br>
        <br>
        <br>

        <a> Tekst in a </a>
        <br>
        <br>
        
        <input type="button" onclick="test()"/>

    </body>
    
</html>