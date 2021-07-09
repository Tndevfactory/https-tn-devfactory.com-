export function backToTop() {
    let backToTop = document.querySelector(".back_to_top");

    if (backToTop != null) {
        function backToTopfn() {
            window.scroll(0, 0);
        }

        backToTop.addEventListener("click", backToTopfn);

        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        }
    }
}
