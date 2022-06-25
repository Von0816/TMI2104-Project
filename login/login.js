window.addEventListener('load', () => {
    const pswVis = document.getElementById("pswVis");

    pswVis.addEventListener('click', () => {
        if(pswVis.innerText === 'Show'){
            pswVis.innerText = 'Hide';
            password.type = 'text';
        }
        else {
            pswVis.innerText = 'Show';
            password.type = 'password';
        }
    })
})