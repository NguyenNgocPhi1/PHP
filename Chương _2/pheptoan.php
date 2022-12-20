<?php
    //1.Phép toán số học
    $n = 3;
    $m = 5;
    $kq1 = $n + $m;
    echo "Phép cộng: $kq1";
    $kq2 = $n - $m;
    echo "Phép trừ: $kq2";
    $kq3 = $n * $m;
    echo "Phép nhân: $kq3";
    $kq4 = $n / $m;
    echo "Phép chia: $kq4";
    $kq5 = $n % $m;
    echo "Phép lấy dư: $kq5";

    //Phép toán so sánh
    $s = "10";
    $ss = $n === $s;
    echo $ss;

    //Phép toán kết hợp
    echo ++$n;

    //Phép toán 3 ngôi
    $gt = $m ? "$n > $m" : ($n == $m ? "$n = $m" : "$n < $m");
    echo $gt;

    //Phép toán logic
    $gt1 = ($n < $m && $s  != $n) ? "Thoả điều kiện" : "Không thoả điều kiện";
    echo $gt1 ; 
?>