<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('config.php');
        require_once ('dbopen.php');
        
        $query = "SELECT * Movie";
        $results = mysql_query($query)
                or die("You suck at SQL " . mysql_error());
        
        
        
        ?>
    </body>
</html>
