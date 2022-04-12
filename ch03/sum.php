<?php
    $n1 = 30; // 대입연산자로부터 바로 값 복사하여 저장 (쓰기)
    $n2 = 80;
    $sum = $n1 + $n2; // (읽기) = 을 만나면 오른쪽부터 먼저 실행 (ex 연산만나면 연산값 먼저 계산 후 대입)

    print $sum;

    print "<br>";

    $sub = 12.3 - 42.72; // 리터럴값 계산 할수있다
    print $sub;

?>

<!--
프로그래밍에서

리터럴(literal 문자그대로의, 직역의) : 원래 본인의 값. 변하지 않는 값. 그 값 그 자체.
≠ 상수 : 한번 대입된 값이 바뀌지 않는것 (값이 초기화될 때 딱 한번만 올수있음)
≠ 변수

10 = 12.3 -42.72; x
= 왼쪽 : 리터럴값 올수 없다.
항상 변수만 올수 있다.

= 오른쪽 : 변수, 리터럴값 둘다 가능
-->