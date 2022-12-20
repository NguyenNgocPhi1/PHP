<?php
    //Biến trong php
    //Biến sẽ bắt đầu bằng dấu $
    //Biến có thể lưu trữ số, chuỗi, logic, đối tượng và mảng
    $n = 5; // n là một số nguyên
    echo $n;
    echo gettype($n);

    $m = 5.7; //m là lưu trữ số thực
    echo $m;
    echo gettype($m);

    $l = true; 
    echo $l;
    echo gettype($l);

    $s = "Hello"; 
    echo $s;
    echo gettype($s);

    // Chú ý về chuỗi => sử dụng cặp ngoặc kép hay đơn
    $ho = 'Lê Văn';
    $ten = 'Cường';
    echo "Chào bạn $ho $ten";
    //Nếu sử dụng nháy đơn thì phải dùng phép toán nối chuỗi
    echo 'Chào bạn lần 2: ' . $ho . '' . $ten ;
?>
