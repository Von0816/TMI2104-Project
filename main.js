function openContainer() {
    const loginContainer = document.getElementById("login-container");
    loginContainer.style.display = "flex";
    loginContainer.style.pointerEvents = "auto";
    document.getElementById("body").style.overflow = "hidden";

}

function closeContainer() {
    const loginContainer = document.getElementById("login-container");
    loginContainer.style.display = "none";
    loginContainer.style.pointerEvents = "none";
    document.getElementById("body").style.overflow = "auto";
}