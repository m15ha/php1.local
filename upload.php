<?php

if (isset($_FILES ['pictures'])){
    if (0 == $_FILES ['pictures']['error']){
        move_uploaded_file($_FILES ['picture']['tmp_name'], __DIR__ . '/picture/test.png');
    }
}