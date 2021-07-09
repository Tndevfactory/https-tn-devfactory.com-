export function tabToggleG() {
    let descriptionLink = document.querySelector("#descriptionLink");
    let ficheTechniqueLink = document.querySelector("#ficheTechniqueLink");
    let livraisonLink = document.querySelector("#livraisonLink");
    let avisLink = document.querySelector("#avisLink");

    if (descriptionLink !== null) {
        let i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        tablinks = document.getElementsByClassName("tablinks");

        function changeTab(e) {
            e.preventDefault();

            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(
                    " active",

                    ""
                );
            }

            let tab = e.target.id;
            let tabcontentId = tab.slice(0, tab.length - 4);

            document.getElementById(tabcontentId).style.display = "block";
            e.currentTarget.className += " active";
        }

        descriptionLink.addEventListener("click", (e) => changeTab(e));
        ficheTechniqueLink.addEventListener("click", (e) => changeTab(e));
        livraisonLink.addEventListener("click", (e) => changeTab(e));
        avisLink.addEventListener("click", (e) => changeTab(e));
    }
}

export function photoSelector() {
    let img_big_screen = document.querySelector(".img_big_screen");
    let img_screen = document.querySelectorAll(".img_screen");
    if (img_big_screen !== null) {
        function changeSrc(e) {
            img_big_screen.src = e.target.src;
            imageZoom("myimage", "myresult");
        }

        img_screen.forEach((item) =>
            item.addEventListener("click", (e) => changeSrc(e))
        );
    }
}

export function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    //console.log(img);
    if (img !== null) {
        // this chunk is injected with blade
        // console.log(" removing div");

        /* Create lens: */
        var lensDiv = document.querySelector(".img-zoom-lens");

        if (lensDiv !== null) {
            lensDiv.remove();
            // console.log(" removing div");
        }
        // lens creation
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");
        /* Insert lens: */
        img.parentElement.insertBefore(lens, img);

        /* Calculate the ratio between result DIV and lens: */
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        /* Set background properties for the result DIV */
        result.style.backgroundImage = "url('" + img.src + "')";

        result.style.backgroundSize =
            img.width * cx + "px " + img.height * cy + "px";

        /* Execute a function when someone moves the cursor over the image, or the lens: */
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /* And also for touch screens: */
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);

        function moveLens(e) {
            var pos, x, y;
            /* Prevent any other actions that may occur when moving over the image */
            e.preventDefault();
            /* Get the cursor's x and y positions: */

            pos = getCursorPos(e);
            /* Calculate the position of the lens: */

            x = pos.x - lens.offsetWidth / 2;
            y = pos.y - lens.offsetHeight / 2;

            /* Prevent the lens from being positioned outside the image: */
            if (x > img.width - lens.offsetWidth) {
                x = img.width - lens.offsetWidth;
            }
            if (x < 0) {
                x = 0;
            }
            if (y > img.height - lens.offsetHeight) {
                y = img.height - lens.offsetHeight;
            }
            if (y < 0) {
                y = 0;
            }

            /* Set the position of the lens: */
            lens.style.left = x + "px";
            lens.style.top = y + "px";

            /* Display what the lens "sees": */
            result.style.backgroundPosition =
                "-" + x * cx + "px -" + y * cy + "px";
        }
    }

    function getCursorPos(e) {
        var a,
            x = 0,
            y = 0;
        e = e || window.event;

        /* Get the x and y positions of the image: */
        a = img.getBoundingClientRect();

        /* Calculate the cursor's x and y coordinates, relative to the image: */
        x = e.pageX - a.left;
        y = e.pageY - a.top;

        /* Consider any page scrolling: */
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;

        return { x: x, y: y };
    }
}
