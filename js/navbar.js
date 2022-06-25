window.addEventListener('load', () => {
    const dropdownBtn = document.getElementById("dropdown-btn");
    const dropdownList = document.getElementById("dropdown-list");

    if(dropdownBtn !== null){
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
    }
})

