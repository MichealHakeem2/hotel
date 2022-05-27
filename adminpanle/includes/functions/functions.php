<?php 

function seletQuery($form)
{
    global $conn;
    $select = "SELECT * from $form";
    $sh = mysqli_query($conn, $select);
    $row = mysqli_fetch_all($sh);

    return $row;
}