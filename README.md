# BÀI TẬP THỰC HÀNH NHÓM SỐ 1 - NHÓM 12
## MÔN: THIẾT KẾ VÀ LẬP TRÌNH WEB (KHOA TOÁN - TIN, TRƯỜNG ĐH SƯ PHẠM - ĐH ĐÀ NẴNG)

---

### 👥 DANH SÁCH THÀNH VIÊN NHÓM 12 (LỚP 24CNTT3)

1. **Xaiyasith Yoi** – MSV: **3120224189** (Nhóm trưởng)
2. **Phommaket Haysady** – MSV: **3120224181** (Thành viên)
3. **Vongsena Sauphasith** – MSV: **3120224186** (Thành viên)

---

### 📂 CẤU TRÚC THƯ MỤC DỰ ÁN

```text
Yoi_Laptrinh_Web/
├── docs/                                   # Tài liệu báo cáo và slide thuyết trình
│   ├── Nhom12_Baitap1_BaoCao.md            # Báo cáo hoàn chỉnh 8-12 trang chuẩn theo Rubric R1.2
│   ├── Slide_Nhom12_Baitap1.md             # Kịch bản 10 slide thuyết trình (5-7 phút)
│   └── HuongDan_ChupAnh_DevTools.md        # Hướng dẫn chụp 6 ảnh minh chứng thực tế
│
├── src/                                    # Mã nguồn PHP theo yêu cầu mục 2.3
│   ├── hello.php                           # Trang PHP đầu tiên (date, phpinfo)
│   └── thanhvien/                          # Thư mục chứa trang cá nhân của từng thành viên
│       ├── Xaiyasith_Yoi/
│       │   └── gioithieu.php
│       ├── Phommaket_Haysady/
│       │   └── gioithieu.php
│       └── Vongsena_Sauphasith/
│           └── gioithieu.php
│
├── BaiTapNhom1_Chuong1.md                  # Đề bài gốc của học phần
└── README.md                               # Hướng dẫn quản lý mã nguồn và nộp bài
```

---

### 🚀 HƯỚNG DẪN ĐƯA CODE LÊN GITHUB (MỖI THÀNH VIÊN 1 COMMIT)

Để đạt điểm tối đa ở tiêu chí C (kho GitHub đủ commit của từng thành viên):

#### Bước 1: Nhóm trưởng (Xaiyasith Yoi) khởi tạo kho trên GitHub
1. Đăng nhập vào tài khoản GitHub cá nhân.
2. Tạo mới một repository đặt tên là: `ltweb-btn1-nhom12` (chế độ Public).
3. Thêm 2 bạn còn lại làm Collaborator (Cộng tác viên) vào repo:
   - Vào **Settings** $\rightarrow$ **Collaborators** $\rightarrow$ **Add people** $\rightarrow$ Nhập username GitHub của 2 bạn.

#### Bước 2: Nhóm trưởng push mã nguồn ban đầu từ máy tính
Mở PowerShell tại thư mục `c:\Users\asus\Downloads\Yoi_Laptrinh_Web`:
```bash
git init
git config user.name "Xaiyasith Yoi"
git config user.email "your-email@gmail.com"
git branch -M main
git remote add origin https://github.com/Xaiyasith-Yoi/ltweb-btn1-nhom12.git
git add .
git commit -m "feat(init): khoi tao ma nguon va tai lieu nhom 12"
git push -u origin main
```

#### Bước 3: Thành viên 2 (Phommaket Haysady) commit tệp cá nhân
Thực hiện trên máy tính của Phommaket Haysady:
```bash
git clone https://github.com/Xaiyasith-Yoi/ltweb-btn1-nhom12.git
cd ltweb-btn1-nhom12
git config user.name "Phommaket Haysady"
git config user.email "haysady-email@gmail.com"
git add src/thanhvien/Phommaket_Haysady/
git commit -m "feat(member): them trang gioithieu cua Phommaket Haysady"
git push origin main
```

#### Bước 4: Thành viên 3 (Vongsena Sauphasith) commit tệp cá nhân
Thực hiện trên máy tính của Vongsena Sauphasith:
```bash
git clone https://github.com/Xaiyasith-Yoi/ltweb-btn1-nhom12.git
cd ltweb-btn1-nhom12
git config user.name "Vongsena Sauphasith"
git config user.email "sauphasith-email@gmail.com"
git pull origin main
git add src/thanhvien/Vongsena_Sauphasith/
git commit -m "feat(member): them trang gioithieu cua Vongsena Sauphasith"
git push origin main
```

---

### 📦 ĐÓNG GÓI SẢN PHẨM NỘP BÀI (DEADLINE: TRƯỚC TUẦN 3)

Nhóm trưởng đăng nhập vào hệ thống e-Learning (`nhhai.net`) và nộp các file sau:

1. **Báo cáo:** `Nhom12_Baitap1.pdf` (Từ file `docs/Nhom12_Baitap1_BaoCao.md` chèn thêm 6 ảnh minh chứng rồi xuất sang PDF).
2. **Slide trình bày:** `Nhom12_Baitap1_slide.pptx` (hoặc `Nhom12_Baitap1_slide.pdf`) từ file `docs/Slide_Nhom12_Baitap1.md`.
3. **Mã nguồn và ảnh chụp nén:** Nén toàn bộ thư mục `src/` và thư mục ảnh chụp kết quả thành tệp `LTW_BTN1_Nhom12_code.zip`.
4. **Link GitHub:** Ghi kèm link `https://github.com/Xaiyasith-Yoi/ltweb-btn1-nhom12` vào phần ghi chú nộp bài.
