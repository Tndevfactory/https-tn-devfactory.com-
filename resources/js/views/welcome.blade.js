export function welcomeOverlay() {
    CSSPlugin.defaultForce3D = true;

    gsap.defaults({ ease: "none", force3D: true });
    let boxWelcome = document.querySelectorAll(".box_welcome");
    let overlayWelcomeTl = gsap.timeline({ ease: "power1.out" });
    // overlayWelcomeTl.pause();

    boxWelcome.forEach((item) => {
        let overlayWelcome = item.children[1];
        let detailWelcome = overlayWelcome.children[0];
        let commanderWelcome = overlayWelcome.children[1];

        function anim() {
            gsap.set(detailWelcome, { x: 0 });
            gsap.set(commanderWelcome, { x: 0 });
            overlayWelcomeTl
                .to(overlayWelcome, {
                    background: "rgba(0,0,0,0.5)",
                    scaleY: 1,
                    duration: 0.05,

                    transformOrigin: "left",
                })
                .from(detailWelcome, { x: -40, duration: 0.2 })
                .from(commanderWelcome, { x: 40, duration: 0.2 }, "<");
        }
        function deAnim() {
            overlayWelcomeTl
                .to(detailWelcome, { x: -40, duration: 0 })
                .to(commanderWelcome, { x: 40, duration: 0 }, "<")
                .to(overlayWelcome, {
                    background: "rgba(0,0,0,0.84)",
                    scaleY: 0,
                    duration: 0,
                    transformOrigin: "left",
                });
        }

        item.addEventListener("mouseenter", (e) => {
            anim();

            detailWelcome.addEventListener("click", (e) => {
                console.log("details clicked");
            });
            commanderWelcome.addEventListener("click", (e) => {
                console.log("commander clicked");
            });
        });

        item.addEventListener("mouseleave", (e) => {
            deAnim();
        });
    });
}
