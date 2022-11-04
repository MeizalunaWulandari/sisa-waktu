<?php 
    
    $date = "12-12-2022";
    $explodeDate = explode('-', $date);
    $explodeDate[0] -= 1;
    $implodeDate = implode('-', $explodeDate);
    $createDate = date_create($implodeDate);

    $current = date_create("14-12-2022");
    $diff = date_diff($createDate, $current);

    echo $diff->format('%d hari');

?>