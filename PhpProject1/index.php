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
        
        if(!sset($_COOKIE[$movie_cookie])) {
            // cookie not set
        } else {
            // cookie set and user propably logged
        }
        
        $query = "SELECT * FROM Movie";
        $results = mysql_query($query)
                or die("You suck at SQL " . mysql_error());
        
        
        // require_once ('dbclose.php');
        ?>
    </body>
</html>
