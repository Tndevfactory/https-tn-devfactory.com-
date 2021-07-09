export function showLoginPassword() {
    let loginPasswordInput = document.querySelector("#login_password");

    if (loginPasswordInput != null) {
        let loginShowPasswordBtn = document.querySelector(
            ".login_show_password"
        );
        let loginHidePasswordBtn = document.querySelector(
            ".login_hide_password"
        );

        function showPassword(e) {
            loginPasswordInput.type = "text";

            loginShowPasswordBtn.classList.remove("d-block");
            loginShowPasswordBtn.classList.add("d-none");

            loginHidePasswordBtn.classList.remove("d-none");
            loginHidePasswordBtn.classList.add("d-block");

            //console.log(loginPasswordInput.type);
        }
        function hidePassword(e) {
            loginPasswordInput.type = "password";

            loginHidePasswordBtn.classList.remove("d-block");
            loginHidePasswordBtn.classList.add("d-none");

            loginShowPasswordBtn.classList.remove("d-none");
            loginShowPasswordBtn.classList.add("d-block");
        }

        loginShowPasswordBtn.addEventListener("click", (e) => showPassword(e));
        loginHidePasswordBtn.addEventListener("click", (e) => hidePassword(e));
    }
}
