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

    // Khởi tạo navigation mobile
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".navigation");

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener("click", function () {
            this.classList.toggle("active");
            navigation.classList.toggle("active");
        });
    }

    // Đợi fonts tải xong trước khi thực hiện SplitText
    document.fonts.ready.then(() => {
        console.log("Fonts loaded, initializing animations");

        // Animation cho header
        gsap.from(".header", {
            y: -50,
            opacity: 0,
            duration: 1,
            ease: "power3.out",
        });

        // Hero section animation
        gsap.from(".hero-image", {
            x: 100,
            opacity: 0,
            duration: 1.2,
            delay: 0.5,
            ease: "power3.out",
        });

        // Lấy tất cả các phần tử có class "split"
        const splitElements = document.querySelectorAll(".split");

        splitElements.forEach((element) => {
            // Thiết lập SplitText chỉ khi scroll đến phần tử
            let splitTextTrigger = ScrollTrigger.create({
                trigger: element,
                start: "top 80%",
                onEnter: function () {
                    // Khởi tạo SplitText cho phần tử khi scroll đến
                    const mySplitText = new SplitText(element, {
                        type: "words,chars",
                        charsClass: "char",
                        wordsClass: "word",
                    });

                    // Thiết lập trạng thái ban đầu
                    gsap.set(mySplitText.chars, {
                        opacity: 0,
                        y: 30,
                    });

                    // Animation hiển thị từng ký tự
                    gsap.to(mySplitText.chars, {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 1.2,
                        stagger: 0.05,
                        ease: "back.out(1.5)",
                    });

                    // Chỉ trigger một lần
                    splitTextTrigger.kill();
                },
            });
        });

        // Animation cho các section khác khi scroll
        gsap.utils.toArray(".section-header").forEach((section) => {
            gsap.from(section, {
                y: 50,
                opacity: 0,
                duration: 1,
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                },
            });
        });

        // Animation cho các service cards
        gsap.utils.toArray(".service-card").forEach((card, index) => {
            gsap.from(card, {
                y: 100,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                },
            });
        });

        // Animation cho portfolio items
        gsap.utils.toArray(".portfolio-card").forEach((card, index) => {
            gsap.from(card, {
                scale: 0.8,
                opacity: 0,
                duration: 0.8,
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                },
            });
        });

        // Animation cho testimonials
        gsap.utils.toArray(".testimonial-card").forEach((card, index) => {
            gsap.from(card, {
                x: index % 2 === 0 ? -50 : 50,
                opacity: 0,
                duration: 0.8,
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                },
            });
        });
    });

    // Smooth scroll cho các liên kết navigation
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            if (targetId !== "#") {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Đóng mobile menu nếu đang mở
                    if (navigation && navigation.classList.contains("active")) {
                        navigation.classList.remove("active");
                        if (mobileMenuToggle) mobileMenuToggle.classList.remove("active");
                    }

                    // Smooth scroll đến phần tử
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

    // Portfolio filter (nếu có filter)
    const filterButtons = document.querySelectorAll(".portfolio-filter li");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    if (filterButtons.length > 0) {
        filterButtons.forEach((button) => {
            button.addEventListener("click", function () {
                // Remove active class from all buttons
                filterButtons.forEach((btn) => btn.classList.remove("active"));
                // Add active class to clicked button
                this.classList.add("active");

                const filterValue = this.getAttribute("data-filter");

                portfolioItems.forEach((item) => {
                    if (filterValue === "*") {
                        item.style.display = "block";
                        setTimeout(() => {
                            item.style.transform = "scale(1)";
                            item.style.opacity = "1";
                        }, 100);
                    } else if (item.classList.contains(filterValue.substring(1))) {
                        item.style.display = "block";
                        setTimeout(() => {
                            item.style.transform = "scale(1)";
                            item.style.opacity = "1";
                        }, 100);
                    } else {
                        item.style.transform = "scale(0.8)";
                        item.style.opacity = "0";
                        setTimeout(() => {
                            item.style.display = "none";
                        }, 300);
                    }
                });
            });
        });
    }

    // Form handling
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            // Here you would normally send the form data to your server
            alert("Thank you for your message! We will get back to you soon.");
            contactForm.reset();
        });
    }

    const newsletterForm = document.querySelector(".newsletter-form");
    if (newsletterForm) {
        newsletterForm.addEventListener("submit", function (e) {
            e.preventDefault();
            // Here you would normally send the form data to your server
            alert("Thank you for subscribing to our newsletter!");
            newsletterForm.reset();
        });
    }

    // Console log để xác nhận script đã tải
    console.log("Animation script loaded and initialized");
});
