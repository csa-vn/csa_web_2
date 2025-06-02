document.addEventListener("DOMContentLoaded", function () {
    // --- Chức năng 1: Thay đổi màu header khi cuộn ---
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
            // if (header) header.classList.add("scrolled");
        } else {
            headerLinks.forEach((link) => {
                link.style.color = ""; // Đặt lại màu mặc định
            });
            // Tùy chọn: Xóa class để đặt lại màu nền của header
            // if (header) header.classList.remove("scrolled");
        }
    });

    // --- Chức năng 2: Hiệu ứng SplitText với GSAP và ScrollTrigger ---

    // Đăng ký các plugin GSAP
    // QUAN TRỌNG: Đảm bảo cả SplitText.min.js và ScrollTrigger.min.js
    // đã được tải trong HTML TRƯỚC file script.js này.
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, SplitText);

    // Đợi cho tất cả các font tải xong trước khi khởi tạo animation text
    document.fonts.ready.then(() => {
        // Lấy tất cả các phần tử có class 'split' (đã sửa từ 'split-text')
        const splitElements = document.querySelectorAll(".split");

        splitElements.forEach((element) => {
            // Khởi tạo SplitText cho từng phần tử
            const mySplitText = new SplitText(element, {
                type: "words,chars",
                charsClass: "char",
                wordsClass: "word",
            });

            // Ẩn tất cả các ký tự ban đầu
            // Đây là trạng thái khởi điểm của animation, nên nó sẽ ẩn cho đến khi scrollTrigger kích hoạt
            gsap.set(mySplitText.chars, { opacity: 0, y: 30 });

            // Animation chỉ trigger khi scroll đến phần tử
            gsap.to(mySplitText.chars, {
                opacity: 1,
                y: 0,
                scale: 1, // Để chắc chắn tỷ lệ ban đầu không bị ảnh hưởng nếu có scale 0
                duration: 1, // Thời gian animation
                stagger: 0.025,
                ease: "back.out(1.5)", // Hiệu ứng động
                scrollTrigger: {
                    trigger: element, // Phần tử sẽ kích hoạt animation
                    start: "top 80%", // Kích hoạt khi phần trên của phần tử ở 80% độ cao của viewport
                    toggleActions: "play none none none", // Chỉ chạy một lần khi scroll đến
                    // markers: true // Bỏ ghi chú dòng này để debug vị trí trigger trên trình duyệt
                },
            });
        });
    });

    // Thêm animation cho các phần tử header khi trang tải xong
    gsap.from(".header", {
        y: -50,
        opacity: 0,
        duration: 1.5,
        ease: "power3.out",
    });

    // Smooth scroll cho các liên kết điều hướng
    document.querySelectorAll("nav a").forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            if (targetId.startsWith("#")) {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: {
                            y: targetElement,
                            offsetY: 80,
                        },
                        ease: "power3.inOut",
                    });
                }
            }
        });
    });

    // Console log để xác nhận script đã tải
    console.log("Animation script loaded and initialized");
});
