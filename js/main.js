document.fonts.ready.then(() => {
  function initializeAnimations() {
    // Đợi cho tất cả các font tải xong
    document.fonts.ready.then(() => {
      // Khởi tạo tất cả các animation sử dụng SplitText ở đây
      animateText();
      // Các animation khác có thể thêm vào đây
    });
  }

  function animateText() {
    // Đợi fonts tải xong
    document.fonts.ready.then(() => {
      // Lấy tất cả các phần tử có class split-text
      const splitTextElements = document.querySelectorAll(".split-text");
      
      splitTextElements.forEach(element => {
        const mySplitText = new SplitText(element, {
          type: "words,chars",
          charsClass: "char",
          wordsClass: "word"
        });
        
        // Ẩn tất cả các ký tự ban đầu
        gsap.set(mySplitText.chars, { opacity: 0, y: 30 });
        
        // Animation chỉ trigger khi scroll đến phần tử
        gsap.to(mySplitText.chars, {
          opacity: 1,
          y: 0,
          scale: 1,
          duration: 1.2, // Thời gian animation dài hơn
          stagger: 0.05, // Tăng thời gian stagger để chậm hơn
          ease: "back.out(1.5)",
          scrollTrigger: {
            trigger: element,
            start: "top 80%", // Kích hoạt khi phần trên của phần tử ở 80% độ cao của viewport
            toggleActions: "play none none none", // Chỉ chạy một lần khi scroll đến
            // markers: true // Uncomment để debug vị trí trigger
          }
        });
      });
    });
  }

  // Thay thế gọi trực tiếp animateText() với:
  initializeAnimations();
});