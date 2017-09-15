<!doctype html>
<html lang="ru">
    
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <?php require_once ('helpers/stylesInclude.php'); ?>
</head>
<body>
    <div id="app" class="app">
 
        <!--content-->
        <div id="container" class="container">
            <?php require_once('templates/app_template.php'); ?>
        </div>
        
        <!--right_block-->
        <div class="right_block">
           
            <div id="menu_fields" class="menu_fields">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/?field=football">Football</a></li>
                    <li><a href="/?field=hockey">Hockey</a></li>
                    <li><a href="/?field=basketball">Basketball</a></li>
                </ul>
            </div>
            
        </div>
        
    </div>
    
</body>
<script type="text/javascript" src="js/app.js"></script>
<?php require_once ('helpers/scriptsInclude.php'); ?>
</html>

