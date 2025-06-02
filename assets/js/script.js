document.addEventListener("DOMContentLoaded", function () {
    // --- Chức năng 1: Thay đổi màu header khi cuộn ---
    const header = document.querySelector("header");
    const headerLinks = document.querySelectorAll(
        "header a, header .dropdown-toggle"
    );

    window.addEventListener("scroll", function () {
        // Thay đổi màu header sau khi cuộn qua phần hero
        // Giả sử phần hero/hình ảnh đầu tiên cao khoảng 500px
        if (window.scrollY > 500) {
            headerLinks.forEach((link) => {
                link.style.color = "#000"; // Thay đổi thành màu đen khi cuộn
            });
            // Tùy chọn: Thêm class để thay đổi màu nền của header
            // header.classList.add("scrolled");
        } else {
            headerLinks.forEach((link) => {
                link.style.color = ""; // Đặt lại màu mặc định
            });
            // Tùy chọn: Xóa class để đặt lại màu nền của header
            // header.classList.remove("scrolled");
        }
    });

    // --- Chức năng 2: Hiệu ứng SplitText với GSAP ---
    // Đảm bảo GSAP và SplitText đã được tải trước khi chạy code này
    // (Kiểm tra lại trong file HTML, chúng phải được tải trước script.js)

    // Đăng ký plugin SplitText với GSAP
    gsap.registerPlugin(SplitText);

    // Tạo hiệu ứng SplitText
    // Nhắm mục tiêu đến phần tử có class 'split-me'
    let split = SplitText.create(".split", {
        type: "chars, words" // Chia thành ký tự và từ
    });

    // Tạo animation cho các ký tự đã được chia
    gsap.from(split.chars, {
        y: 100, // Di chuyển từ vị trí y 100px
        autoAlpha: 0, // Bắt đầu từ trạng thái ẩn (opacity 0)
        stagger: {
            amount: 0.5, // Tổng thời gian trải đều cho tất cả các ký tự
            from: "random" // Bắt đầu animation từ các ký tự ngẫu nhiên
        }
    });

    // Bạn có thể thêm các animation GSAP khác tại đây nếu cần
});
