<?php
    include_once "db.php";

    $i_board = $_POST["i_board"];
    $sql = "UPDATE t_board SET title = '$title', ctnt = '$ctnt', mod_at = now() WHERE i_board = $i_board";

    $title = $POST["title"];
    $ctnt = $POST["ctnt"];

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: detail.php?i_board=${i_board}")
?>