window.addEventListener('load', () => {
    // const loginBtn = document.getElementById("login-btn");
    // const logoutBtn = document.getElementById("logout-btn");
    const dropdownBtn = document.getElementById("dropdown-btn");
    const dropdownList = document.getElementById("dropdown-list");
    // loginBtn.addEventListener('click', () => {
    // })
    // logoutBtn.addEventListener('click', () => {

    // })
    dropdownBtn.addEventListener('click', () => {
        dropdownBtn.focus;
        dropdownList.classList.toggle("show-dropdown-list");
    })
    
    window.addEventListener('click', (e) => {
        if(e.target != dropdownBtn){
            if(dropdownList.classList.contains("show-dropdown-list")) {
                dropdownList.classList.remove("show-dropdown-list");
            }

        }
    })
})

