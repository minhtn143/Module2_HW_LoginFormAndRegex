### Bài tập về nhà.
##### 1.Xây dựng chức năng đăng ký người dung thoả mãn

**Password**
* Có ít nhất 8 ký tự trở lên
 * Bao gồm ít nhất 1 số
 * Bao gồm ít nhất 1 chữ viết hoa
 * chứa ít nhất 1 trong các ký tự đặc biệt @!^-%$
 * Không chứa ký tự khoảng trắng
 
 **Email**
   * đúng định dạng xxx@xxx (admin@gmail.com ->true) á@gmail.com -> false
   
   **phone:**
   * Đúng định dạng điện thoại 
   * Đúng định dạng đầu số việt nam của các nhà mạng Viettel, MobilePhone, Vina

##### 2.Xây dựng chức năng đăng nhập
* Nếu đăng nhập thành công mới được vào trang Home
* Nếu không đăng nhập mà cố tình vào trang Home thì phải đưa trở về trang Login
* **Gợi ý:** Dùng file json để lưu danh sách người dùng
* Khi login thì so sánh thông tin nhận được từ form với thông tin trong json
    * Khớp thì login thành công 
    * Sai -> báo tài khoản mật khẩu sai tại trang login
 
* Dùng session để thực hiện kiểm tra xem người đó đã login thành công chưa
* có thể đọc bootstap để làm giao diện