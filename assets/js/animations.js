// GSAP Scroll Animations for CSA Vietnam Website
// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Animation cho feature items
gsap.fromTo(".feature-item", 
    {
        opacity: 0,
        y: 50
    },
    {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".features",
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse"
        }
    }
);

// Animation cho reveal text
gsap.fromTo(".reveal-text",
    {
        opacity: 0,
        scale: 0.5
    },
    {
        opacity: 1,
        scale: 1,
        duration: 1,
        ease: "back.out(1.7)",
        scrollTrigger: {
            trigger: ".reveal-text",
            start: "top 80%",
            toggleActions: "play none none reverse"
        }
    }
);

// Animation cho scroll items (từ trái và phải xen kẽ)
gsap.utils.toArray(".scroll-item").forEach((item, index) => {
    gsap.fromTo(item,
        {
            opacity: 0,
            x: index % 2 === 0 ? -100 : 100
        },
        {
            opacity: 1,
            x: 0,
            duration: 0.8,
            ease: "power2.out",
            scrollTrigger: {
                trigger: item,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }
        }
    );
});

// Floating element với rotation liên tục
gsap.fromTo(".floating-element",
    {
        opacity: 0,
        rotation: 0
    },
    {
        opacity: 1,
        rotation: 360,
        duration: 2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".floating-element",
            start: "top 80%",
            toggleActions: "play none none reverse"
        }
    }
);

// Continuous rotation cho floating element
gsap.to(".floating-element", {
    rotation: 360,
    duration: 3,
    repeat: -1,
    ease: "none"
});

// Parallax effect cho hero section
gsap.to(".hero", {
    yPercent: -50,
    ease: "none",
    scrollTrigger: {
        trigger: ".hero",
        start: "top bottom",
        end: "bottom top",
        scrub: true
    }
});

// Header animation khi scroll
ScrollTrigger.create({
    start: "top -80",
    end: "max",
    onUpdate: self => {
        if (self.direction === -1) {
            gsap.to("header", {y: 0, duration: 0.3});
        } else {
            gsap.to("header", {y: -100, duration: 0.3});
        }
    }
});

console.log("GSAP ScrollTrigger animations initialized!");
