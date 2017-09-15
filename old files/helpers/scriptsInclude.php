<?php
    $fields = ['football', 'hockey', 'basketball'];

    if ( !empty($_GET['field']) && in_array($_GET['field'], $fields) ) {
        $field = $_GET['field'];
        
        echo '<script type="text/javascript" src="templates/'. $field . '/template_scripts.js"></script>';
    }
   