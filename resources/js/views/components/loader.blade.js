export function loader(action) {
    let spinner = document.querySelector(".spinner-border");

    if (spinner != null) {
        if (action === "show") {
            spinner.classList.remove("d-none");
            spinner.classList.add("d-block");
        } else if (action === "hide") {
            spinner.classList.remove("d-block");
            spinner.classList.add("d-none");
        }
    }
}
