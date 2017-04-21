<?php
    $file_id = rand(1, 20);
    if ($file_id < 10) {
        $file_id = "0" . $file_id;
    }
    $filepath = "sgf/elementary-prob00" . $file_id . ".sgf";
    echo file_get_contents($filepath);
?>