export function openDrawer() {
    let openDrawerBtnAr = document.querySelector(".drawer_toggle_ar"); // from navbar
    let openDrawerBtnFr = document.querySelector(".drawer_toggle_fr"); // from navbar

    if (openDrawerBtnFr != null) {
        let drawer = document.querySelector(".drawer");
        let drawerWidth = drawer.getBoundingClientRect().width;

        openDrawerBtnFr.addEventListener("click", (e) => openDrawerfnFr(e));
    } else {
        openDrawerBtnAr.addEventListener("click", (e) => openDrawerfnAr(e));
    }

    function openDrawerfnAr(e) {
        e.preventDefault();
        gsap.to(drawer, {
            x: -500,
            force3D: true,
            duration: 0.5,
            // boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
            // ease: "power2.out",
        });
    }

    function openDrawerfnFr(e) {
        e.preventDefault();
        gsap.to(drawer, {
            x: 500,
            force3D: true,
            duration: 0.5,
            // boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
            // ease: "power2.out",
        });
    }
}

export function closeDrawer() {
    let closeDrawerBtnAr = document.querySelector(".close_drawer_ar"); // from drawer
    let closeDrawerBtnFr = document.querySelector(".close_drawer_fr"); // from drawer
    let drawer = document.querySelector(".drawer");
    let drawerWidth = drawer.getBoundingClientRect().width;

    if (closeDrawerBtnFr != null) {
        closeDrawerBtnFr.addEventListener("click", (e) => closeDrawerfnFr(e));
    } else {
        closeDrawerBtnAr.addEventListener("click", (e) => closeDrawerfnAr(e));
    }

    function closeDrawerfnAr(e) {
        e.preventDefault();
        gsap.to(drawer, {
            x: 413,
            force3D: true,
            boxShadow: "none",
            ease: "power2.in",
            duration: 0.81,
        });
    }

    function closeDrawerfnFr(e) {
        e.preventDefault();
        gsap.to(drawer, {
            x: -413,
            force3D: true,
            boxShadow: "none",
            ease: "power2.in",
            duration: 0.81,
        });

        // window.onscroll = () => closeDrawerfn();
        // window.onclick = (e) => {
        //     if (!e.target.className.includes("drawer")) {
        //         closeDrawerfn();
        //     }
        // };
    }
}
