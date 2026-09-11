<?php
// gioithieu.php — Trang giới thiệu của Vongsena Sauphasith (Thành viên Nhóm 12)
$hoten   = "Vongsena Sauphasith";
$masv    = "3120224186";
$lop     = "24CNTT3";
$vaitro  = "Thành viên (Member)";
$sothich = "Cơ sở dữ liệu MySQL, bảo mật web, chơi game, chụp ảnh";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu bản thân - <?php echo htmlspecialchars($hoten); ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fdf4ff;
            color: #1e293b;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 32px;
            max-width: 500px;
            width: 100%;
            border-top: 5px solid #a855f7;
        }
        h1 {
            color: #9333ea;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .badge {
            display: inline-block;
            background-color: #f3e8ff;
            color: #7e22ce;
            padding: 4px 12px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 16px;
        }
        p {
            line-height: 1.6;
            margin: 8px 0;
        }
        .highlight {
            font-weight: 600;
            color: #0f172a;
        }
        .footer-time {
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px dashed #cbd5e1;
            font-size: 13px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="card">
        <span class="badge"><?php echo htmlspecialchars($vaitro); ?></span>
        <h1>Tôi là <?php echo htmlspecialchars($hoten); ?></h1>
        <p><span class="highlight">Mã sinh viên:</span> <?php echo htmlspecialchars($masv); ?></p>
        <p><span class="highlight">Lớp:</span> <?php echo htmlspecialchars($lop); ?></p>
        <p><span class="highlight">Khoa:</span> Toán – Tin, Trường ĐH Sư phạm – ĐH Đà Nẵng</p>
        <p><span class="highlight">Sở thích:</span> <?php echo htmlspecialchars($sothich); ?></p>
        <div class="footer-time">
            🕒 Trang được tạo lúc: <strong><?php echo date("H:i:s, d/m/Y"); ?></strong> (Giờ Server)
        </div>
    </div>
</body>
</html>
