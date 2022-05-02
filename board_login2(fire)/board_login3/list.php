<?php
    include_once "db/db_board.php";

    session_start();
    $nm="";
    
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }

    $list = sel_board_list($param)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <header>
        <div>님 환영합니다.
            <a href="list.php">리스트</a>
            <a href="write.php">글쓰기</a>
            <a href="logout.php">로그아웃</a>
        </div>
    </header>
    <main>
        <h1>리스트</h1>
        <table>
            <thead>
                <tr>
                    <th>글번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>등록일시</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list as $item) { ?>
                    <tr>
                        <td><?=$item["i_board"]?></td>
                        <td><?=$item["title"]?></td>
                        <td><?=$item["nm"]?></td>
                        <td><?=$item["created_at"]?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>