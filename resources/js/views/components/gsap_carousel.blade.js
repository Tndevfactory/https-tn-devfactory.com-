export function AnimateCarousel() {
    CSSPlugin.defaultForce3D = true;
    gsap.defaults({ duration: 145, ease: "none", force3D: true });

    var box = document.querySelector(".box");

    // console.log(window.location.href);

    if (box != null) {
        var boxWidth = box.getBoundingClientRect().width;
        var noBoxes = document.querySelectorAll(".box").length;
        var totalWidth = boxWidth * noBoxes;
        var dirFromLeft = "+=" + totalWidth;

        gsap.set(".card-title", {
            autoAlpha: 1,
            fontSize: "120%",
            z: 0.01,
            rotation: 0.001,
            ease: Linear.easeNone,
            force3D: true,
        });

        gsap.set(".card-text", {
            autoAlpha: 1,
            fontSize: "90%",
            z: 0.01,
            rotation: 0.001,
            ease: Linear.easeNone,
            force3D: true,
        });

        gsap.set(".box", { x: (x) => x * boxWidth });

        const boxMotionTl = gsap.timeline({ ease: "none", repeat: -1 });

        boxMotionTl.to(".box", {
            x: dirFromLeft,
            z: 0.01,
            rotation: 0.001,
            ease: Linear.easeNone,
            force3D: true,
            modifiers: {
                x: gsap.utils.unitize((x) => parseFloat(x) % totalWidth),
            },
        });

        let oneBox = document.querySelectorAll(".box");

        oneBox.forEach((item) => {
            let overlaybtnTl = gsap.timeline({ ease: "power1.out" });

            overlaybtnTl.pause();

            let overlay = item.children[0].children[1];
            let detail = overlay.children[0];
            let commander = overlay.children[1];

            overlaybtnTl
                .to(overlay, {
                    background: "rgba(0,0,0,0.84)",
                    scaleY: 1,
                    duration: 0.2,
                    transformOrigin: "left",
                })
                .from(detail, { x: -40, duration: 0.2 })
                .from(commander, { x: 40, duration: 0.2 }, "<");

            item.addEventListener("mouseenter", (e) => {
                overlaybtnTl.play();

                boxMotionTl.pause();

                detail.addEventListener("click", (e) => {
                    console.log("details clicked");
                });

                commander.addEventListener("click", (e) => {
                    console.log("commander clicked");
                });
            });

            item.addEventListener("mouseleave", (e) => {
                overlaybtnTl.reverse();
                boxMotionTl.play();
            });
        });
    }
}

export function grabModalConsulterPanier() {
    let consulterPanier = document.querySelector(".consulter_panier");

    if (consulterPanier != null) {
        consulterPanier.addEventListener("click", (e) => {
            console.log("consulter panier clicked");
        });
    }
}
