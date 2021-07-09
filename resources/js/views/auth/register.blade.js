export function showRegisterPassword() {
    let registerPasswordInput = document.querySelector("#register_password");

    if (registerPasswordInput != null) {
        let registerShowPasswordBtn = document.querySelector(
            ".register_show_password"
        );
        let registerHidePasswordBtn = document.querySelector(
            ".register_hide_password"
        );

        function showPassword(e) {
            registerPasswordInput.type = "text";

            registerShowPasswordBtn.classList.remove("d-block");
            registerShowPasswordBtn.classList.add("d-none");

            registerHidePasswordBtn.classList.remove("d-none");
            registerHidePasswordBtn.classList.add("d-block");

            //console.log(loginPasswordInput.type);
        }
        function hidePassword(e) {
            registerPasswordInput.type = "password";

            registerHidePasswordBtn.classList.remove("d-block");
            registerHidePasswordBtn.classList.add("d-none");

            registerShowPasswordBtn.classList.remove("d-none");
            registerShowPasswordBtn.classList.add("d-block");
        }

        registerShowPasswordBtn.addEventListener("click", (e) =>
            showPassword(e)
        );
        registerHidePasswordBtn.addEventListener("click", (e) =>
            hidePassword(e)
        );
    }
}

export function showRegisterConfirmPassword() {
    let registerConfirmPasswordInput = document.querySelector(
        "#register_password_confirm"
    );

    if (registerConfirmPasswordInput != null) {
        let registerShowPasswordBtn = document.querySelector(
            ".register_confirm_show_password"
        );
        let registerHidePasswordBtn = document.querySelector(
            ".register_confirm_hide_password"
        );

        function showPassword(e) {
            registerConfirmPasswordInput.type = "text";

            registerShowPasswordBtn.classList.remove("d-block");
            registerShowPasswordBtn.classList.add("d-none");

            registerHidePasswordBtn.classList.remove("d-none");
            registerHidePasswordBtn.classList.add("d-block");

            //console.log(loginPasswordInput.type);
        }
        function hidePassword(e) {
            registerConfirmPasswordInput.type = "password";

            registerHidePasswordBtn.classList.remove("d-block");
            registerHidePasswordBtn.classList.add("d-none");

            registerShowPasswordBtn.classList.remove("d-none");
            registerShowPasswordBtn.classList.add("d-block");
        }

        registerShowPasswordBtn.addEventListener("click", (e) =>
            showPassword(e)
        );
        registerHidePasswordBtn.addEventListener("click", (e) =>
            hidePassword(e)
        );
    }
}
