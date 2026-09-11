<?php
// gioithieu.php — Trang giới thiệu của Xaiyasith Yoi (Nhóm trưởng Nhóm 12)
$hoten   = "Xaiyasith Yoi";
$masv    = "3120224189";
$lop     = "24CNTT3";
$vaitro  = "Nhóm trưởng (Team Leader)";
$sothich = "Lập trình web, nghiên cứu công nghệ mới, chơi bóng đá, nghe nhạc";
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
            background-color: #f0f4f8;
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
            border-top: 5px solid #2563eb;
        }
        h1 {
            color: #1d4ed8;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 12px;
        }
        .badge {
            display: inline-block;
            background-color: #dbeafe;
            color: #1e40af;
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
