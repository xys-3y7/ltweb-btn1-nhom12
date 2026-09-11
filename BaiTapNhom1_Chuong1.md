### **TRƯỜNG ĐẠI HỌC SƯ PHẠM – ĐẠI HỌC ĐÀ NẴNG KHOA TOÁN – TIN** 

_Học phần: Thiết kế và Lập trình web (Web Design and Programming) – Học kỳ 1, năm học 2026 – 2027_ 

# **BÀI TẬP THỰC HÀNH NHÓM SỐ 1** 

## **Chương 1 – Tổng quan về web và môi trường phát triển** 

_Phân tích một website thực tế, phác thảo website đồ án của nhóm và thiết lập môi trường phát triển web_ 

|**Hình thức**|Làm việc nhóm 4-5 sinh viên — nhóm này đồng thời là nhóm đồ án<br>của học phần. Đăng ký nhóm trên e-Learning (nhhai.net) trước buổi<br>thực hành tuần 2. Nộp bài trước buổi thực hành tuần 3;|
|---|---|
|**Sản phẩm**<br>**nộp**|Một báo cáo PDF, một tệp slide trình bày, mã nguồn kèm link kho<br>GitHub của nhóm.<br>Tên file bắt buộc phải bắt đầu với NhomZZ, trong đó ZZ là mã nhóm.<br>Ví dụ: Nhom05**_**Baitap1.pdf|
|**Chuẩn đầu**<br>**ra**|CLO1 – trình bày được kiến trúc ứng dụng web, mô hình client–<br>server, giao thức HTTP và quy trình phát triển một website. CLO5 –<br>tổ chức làm việc nhóm, tìm kiếm tài liệu tham khảo có giá trị, sử<br>dụng công cụ AI có trách nhiệm.|
|**Công cụ**|XAMPP hoặc Laragon (Apache, PHP ≥ 8.1, MySQL/MariaDB);<br>Visual Studio Code; Git và tài khoản GitHub; trình duyệt<br>Chrome/Firefox với DevTools (F12).|



## **1. Mục tiêu** 

Sau khi hoàn thành bài tập, sinh viên có thể: 

- Nhận diện mô hình client – server, giao thức HTTP/HTTPS và các thành phần front-end, back-end, cơ sở dữ liệu của một website đang dùng hằng ngày; dùng DevTools quan sát được request/response thực tế. 

- Phác thảo ý tưởng website động mà nhóm sẽ xây dựng xuyên suốt học phần (đồ án cuối kỳ): mục đích, người dùng, chức năng và dữ liệu chính — làm cơ sở đăng ký đề tài đồ án ở tuần 4. 

- Cài đặt và kiểm tra môi trường phát triển web trên máy cá nhân (XAMPP/Laragon, VS Code, Git); chạy được trang PHP đầu tiên trên localhost và đưa mã nguồn lên GitHub. 

- Phân công, phối hợp làm việc nhóm; tìm và trích dẫn tài liệu tham khảo; trình bày kết quả trước lớp. 

## **2. Nhiệm vụ** 

### **2.1. Phần A – Phân tích một website thực tế (2,5 điểm)** 

Mỗi nhóm chọn một website trong danh sách sau: (1) báo điện tử VnExpress / Tuổi Trẻ; (2) thương mại điện tử Shopee / Tiki; (3) cổng thông tin ued.udn.vn; (4) mạng xã hội Facebook / TikTok (bản web); (5) thư điện tử Gmail (bản web); (6) xem video YouTube; (7) hệ thống e-Learning của trường; (8) website khác do nhóm đề xuất và được giảng viên đồng ý. 

Với website đã chọn, nhóm phân tích và trình bày trong báo cáo các nội dung: 

- **Mô hình hoạt động:** vẽ sơ đồ client – server (– cơ sở dữ liệu) của website; xác định đây là web tĩnh hay web động và nêu dấu hiệu nhận biết. 

- **Quan sát bằng DevTools (F12 → Network):** tải trang chủ, chụp màn hình và chỉ ra: request đầu tiên (phương thức, mã trạng thái, Content-Type); tổng số request; các loại tài nguyên (HTML, CSS, JavaScript, ảnh, font…); tổng dung lượng và thời gian tải; website có dùng HTTPS không, phiên bản HTTP quan sát được (h2, h3…). 

- **Cấu trúc URL:** chọn 2 – 3 URL tiêu biểu của website (trang danh mục, trang chi tiết, trang tìm kiếm) và phân tích các thành phần: scheme, host, path, query string. 

- **Mã trạng thái:** tạo và chụp lại ít nhất ba tình huống: 200 (tải bình thường); 301/302 (ví dụ gõ http:// bị chuyển hướng sang https://); 404 (gõ một đường dẫn không tồn tại); giải thích ý nghĩa từng mã. Gợi ý thêm: quan sát 304 khi tải lại trang. 

### **2.2. Phần B – Phác thảo website đồ án của nhóm (3,0 điểm)** 

Website động (PHP + MySQL) là đề tài xuyên suốt học phần: chương 2 – 3 dựng giao diện, chương 5 – 6 lập trình PHP và cơ sở dữ liệu, chương 8 hoàn thiện và triển khai. Ở bài tập này nhóm chỉ phác thảo ý tưởng, chưa lập trình; kết quả Phần B là cơ sở để đăng ký đề tài chính thức (đồ án giai đoạn 1 – A1.2) ở tuần 4. Nội dung yêu cầu: 

- **Mô tả đề tài:** tên website, mục đích, đối tượng người dùng; tối thiểu hai vai trò: khách / người dùng đã đăng nhập và quản trị viên. Gợi ý hướng đề tài: bán hàng, đặt món / đặt sân, tin tức khoa, quản lý câu lạc bộ, chia sẻ tài liệu học tập, blog du lịch…; khuyến khích đề tài gắn với nhu cầu thật. 

- **Danh sách chức năng:** liệt kê theo mẫu ở Bảng 1, phân biệt chức năng bắt buộc (xem danh sách, xem chi tiết, tìm kiếm, đăng ký / đăng nhập, quản trị thêm – sửa – xóa) và chức năng mở rộng (giỏ hàng, bình luận, phân trang, upload ảnh, thống kê…). 

- **Sơ đồ website (sitemap) và wireframe:** sơ đồ các trang chính và liên kết giữa chúng; phác thảo wireframe cho ít nhất hai trang (trang chủ và một trang chức năng) — vẽ tay chụp lại hoặc dùng draw.io / Figma. 

- **Kiến trúc và dữ liệu:** áp mô hình ba tầng vào đề tài (trình duyệt – Apache + PHP – MySQL); mô tả bằng lời 3 – 5 nhóm dữ liệu chính cần lưu (ví dụ: người dùng, sản phẩm, đơn hàng…). Chưa yêu cầu thiết kế ERD — sẽ làm ở đồ án giai đoạn 1. 

- **Khảo sát website tương tự:** phân tích ngắn 1 – 2 website cùng loại: chức năng nào đáng học, giao diện nào đáng tham khảo. 

_Bảng 1. Mẫu danh sách chức năng (hai dòng đầu là ví dụ, nhóm thay bằng thiết kế của mình)_ 

|**STT**|**Chức năng**|**Vai trò sử dụng**|**Mô tả ngắn**|**Loại**|
|---|---|---|---|---|
|1|Xem danh sách sản<br>phẩm|Khách|Hiển thị sản phẩm theo<br>danh mục, có phân trang|Bắt<br>buộc|
|2<br>…|Giỏ hàng<br>…|Người dùng đã<br>đăng nhập<br>…|Thêm / xóa sản phẩm,<br>tính tổng tiền<br>…|Mở<br>rộng<br>…|



### **2.3. Phần C – Thiết lập môi trường và trang web đầu tiên (1,5 điểm)** 

Mỗi thành viên thực hiện trên máy của mình (ghi rõ hệ điều hành và phiên bản PHP): 

1. Cài XAMPP (hoặc Laragon) và VS Code (extension khuyến nghị: PHP Intelephense, Live Server); cài Git. Khởi động Apache và MySQL; chụp màn hình bảng điều khiển với hai dịch vụ đang chạy cùng kết quả lệnh php -v và git -- version. 

2. Tạo thư mục htdocs/ltweb (Laragon: www/ltweb), lưu tệp hello.php dưới đây rồi mở http://localhost/ltweb/hello.php. Chụp màn hình kết quả và kết quả "Xem nguồn trang" (View Source); nhận xét: mã PHP còn xuất hiện trong nguồn không, vì sao? 

3. Viết trang gioithieu.php theo khung gợi ý: trang giới thiệu bản thân dùng biến PHP và hàm date() hiển thị ngày giờ trên server. Chụp màn hình kết quả. 

4. Nhóm trưởng tạo kho GitHub ltweb-btn1-nhomZZ; mỗi thành viên đưa hai tệp của mình vào thư mục thanhvien/<ten>/ bằng các lệnh git add → commit → push (mỗi thành viên ít nhất một commit từ tài khoản của mình). Ghi link kho vào báo cáo. 

5. Mở lại trang hello.php khi DevTools → Network đang bật; chụp màn hình request hello.php và chỉ ra: phương thức, mã trạng thái, Content-Type — đối chiếu với nội dung đã học ở mục 1.1. 

### **hello.php** 

<?php // hello.php — trang PHP đầu tiên $monhoc = "Thiết kế và Lập trình web"; 

echo "<h1>Xin chào $monhoc!</h1>"; echo "<p>Bây giờ là " . date("H:i, ngày d/m/Y") . " trên server.</p>"; phpinfo(); 

### **gioithieu.php (khung gợi ý)** 

<?php $hoten   = "Nguyễn Văn A";              // thay bằng thông tin của bạn $lop     = "23CNTT1"; $sothich = "bóng đá, đọc sách, lập trình web"; ?> <!DOCTYPE html> <html lang="vi"> <head> <meta charset="UTF-8"> <title>Giới thiệu bản thân</title> </head> <body> <h1>Tôi là <?php echo $hoten; ?> — lớp <?php echo $lop; ?></h1> <p>Sở thích: <?php echo $sothich; ?></p> <p>Trang được tạo lúc: <?php echo date("H:i:s d/m/Y"); ?></p> </body> </html> 

### **2.4. Phần D – Câu hỏi thảo luận (1,0 điểm)** 

Nhóm thảo luận và trả lời ngắn gọn (mỗi câu 5 – 10 dòng) trong báo cáo: 

1. Phân biệt Internet và World Wide Web. Nêu hai ứng dụng dùng Internet nhưng không phải Web. 

2. Mô tả các bước chính xảy ra từ lúc gõ https://ued.udn.vn và nhấn Enter đến khi trang hiển thị (DNS, TCP/TLS, HTTP request/response, render). Vì sao lần truy cập thứ hai thường nhanh hơn lần đầu? 

3. Trang gioithieu.php ở Phần C là web tĩnh hay web động? Website đồ án của nhóm cần "động" ở những chức năng nào — vì sao không thể làm chỉ bằng HTML thuần? 

4. HTTP là giao thức không trạng thái (stateless). Điều này gây khó khăn gì cho chức năng đăng nhập hoặc giỏ hàng trong website đồ án của nhóm, và web giải quyết bằng những cơ chế nào (chỉ cần nêu tên — sẽ học kỹ ở chương 5)? 

## **3. Sản phẩm nộp và quy cách** 

- 

- **Báo cáo:** một tệp PDF từ 8 đến 12 trang (không kể phụ lục), đặt tên NhomZZ_Baitap1.pdf, trong đó ZZ là mã nhóm. Cấu trúc gợi ý: trang bìa (tên 

nhóm, thành viên, mã sinh viên); Phần A; Phần B; Phần C; Phần D; tài liệu tham khảo; phụ lục bảng phân công. 

- **Slide:** tệp trình bày 8 – 10 trang cho 5 – 7 phút thuyết trình, đặt tên NhomZZ_Baitap1_slide.pdf (hoặc .pptx). 

- **Mã nguồn:** link kho GitHub ltweb-btn1-nhomZZ (đủ commit của từng thành viên) ghi rõ trong báo cáo; đồng thời nén hello.php, gioithieu.php và ảnh chụp kết quả của từng thành viên thành LTW_BTN1_NhomZZ_code.zip. 

- **Nơi nộp:** mục "Bài tập nhóm số 1" trên e-Learning (nhhai.net); nhóm trưởng nộp một lần cho cả nhóm, trước buổi thực hành tuần 3. 

## **4. Tiêu chí đánh giá (thuộc bài đánh giá A1.2 – Rubric R1.2)** 

|**Tiêu chí**|**Điểm**|**Tốt (80 – 100%)**|**Đạt (50 – 79%)**|**Chưa đạt (<**<br>**50%)**|
|---|---|---|---|---|
|**A. Phân tích**<br>**website thực tế**|2,5|Xác định đúng mô<br>hình và web tĩnh /<br>động; ảnh<br>DevTools đúng,<br>được diễn giải;<br>phân tích URL và<br>mã trạng thái đầy<br>đủ.|Xác định đúng<br>phần lớn nội<br>dung; ảnh quan<br>sát chưa được<br>diễn giải hoặc<br>thiếu một nội<br>dung.|Nhận diện sai<br>mô hình; không<br>có quan sát thực<br>tế bằng<br>DevTools.|
|**B. Phác thảo**<br>**website đồ án**|3,0|Đề tài rõ ràng,<br>khả thi; đủ vai trò<br>và chức năng bắt<br>buộc; sitemap và<br>wireframe rõ; mô<br>tả dữ liệu hợp lý<br>— sẵn sàng đăng<br>ký đề tài.|Đủ nội dung cơ<br>bản; phạm vi,<br>wireframe hoặc<br>mô tả dữ liệu còn<br>sơ sài.|Thiếu nhiều nội<br>dung; đề tài<br>không khả thi<br>hoặc sao chép.|
|**C. Môi trường**<br>**và trang đầu**<br>**tiên**|1,5|Mọi thành viên<br>chạy được cả hai<br>trang; giải thích<br>đúng View<br>Source; kho<br>GitHub đủ<br>commit của từng<br>thành viên.|Đa số thành viên<br>chạy được; thiếu<br>ảnh minh chứng<br>hoặc commit của<br>một thành viên.|Không có kết<br>quả chạy hoặc<br>mã sao chép<br>không hiểu.|



|**Tiêu chí**|**Điểm**|**Tốt (80 – 100%)**|**Đạt (50 – 79%)**|**Chưa đạt (<**<br>**50%)**|
|---|---|---|---|---|
|**D. Câu hỏi**<br>**thảo luận**|1,0|Trả lời đúng, có<br>lập luận và ví dụ<br>cụ thể cho cả bốn<br>câu.|Trả lời đúng<br>hướng nhưng<br>còn chung chung<br>hoặc thiếu một<br>câu.|Trả lời sai hoặc<br>bỏ trống từ hai<br>câu trở lên.|
|**E. Hình thức**<br>**báo cáo và tài**<br>**liệu tham khảo**|2,0|Trình bày rõ ràng,<br>đúng quy cách;<br>hình vẽ có chú<br>thích; trích dẫn ít<br>nhất ba tài liệu tin<br>cậy.|Đúng quy cách;<br>trích dẫn còn<br>thiếu hoặc chưa<br>đúng chuẩn.|Sai quy cách,<br>không có tài liệu<br>tham khảo.|



## **5. Quy định** 

- Báo cáo hoặc mã nguồn sao chép giữa các nhóm, hoặc sao chép từ nguồn khác mà không trích dẫn, nhận 0 điểm cho tất cả các nhóm liên quan. 

- Được phép dùng công cụ AI để hỗ trợ tra cứu, sửa lỗi, nhưng phải ghi rõ trong báo cáo đã dùng ở đâu; mọi thành viên phải hiểu và giải thích được nội dung nộp khi giảng viên hỏi. 

- Thành viên không tham gia (theo bảng phân công có xác nhận của nhóm) nhận 0 điểm bài tập này. 

## **6. Tài liệu tham khảo và gợi ý** 

- Slide bài giảng Chương 1 – Tổng quan về web và môi trường phát triển (mục 1.1 về HTTP và URL, mục 1.2 về kiến trúc ứng dụng web, mục 1.3 về môi trường làm việc). 

- J. N. Robbins – Learning Web Design, 5th ed., O’Reilly, 2018: Phần I – Getting Started (chương 1 – 3). 

- J. Duckett – PHP & MySQL: Server-side Web Development, Wiley, 2022: phần mở đầu về cách web động hoạt động. 

- MDN Web Docs – “How the web works”, “An overview of HTTP” – developer.mozilla.org. 

- Chrome DevTools, Network panel – developer.chrome.com/docs/devtools. 

- XAMPP – apachefriends.org; Laragon – laragon.org; Pro Git (miễn phí), chương 1 – 2 – git-scm.com/book; GitHub Docs – “Hello World”. 

## **Phụ lục A – Mẫu bảng phân công công việc và tự đánh giá** 

|**TT**|**Họ và tên**|**Mã sinh viên**|**Công việc đảm nhận**|**Đóng**<br>**góp**<br>**(%)**|
|---|---|---|---|---|
|1|||Nhóm trưởng; …||
|2|||||
|3<br>4|||||



