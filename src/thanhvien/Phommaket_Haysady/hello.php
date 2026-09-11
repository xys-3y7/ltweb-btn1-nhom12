<?php
// hello.php — trang PHP đầu tiên của Nhóm 12
// Học phần: Thiết kế và Lập trình web - Trường ĐH Sư phạm, ĐH Đà Nẵng

$monhoc = "Thiết kế và Lập trình web";

echo "<h1>Xin chào $monhoc!</h1>";
echo "<p>Nhóm 12 - Lớp 24CNTT3</p>";
echo "<p>Bây giờ là " . date("H:i, ngày d/m/Y") . " trên server.</p>";

// Hiển thị thông tin cấu hình môi trường PHP
phpinfo();
?>
