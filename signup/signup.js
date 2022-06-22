
window.addEventListener('load', () => {
    console.log("js loaded");
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const address = document.getElementById("address");
    const hp = document.getElementById("hp");
    const password = document.getElementById("password");
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

    username.addEventListener('input', (e) => {
        console.log("Validating username");
        const usernameVal = username.value;
        if(usernameVal.trim() === ''){
            setError(username, "Please set your username");
            e.preventDefault();
        }
        else if(!(/^[a-zA-Z]*$/.test(usernameVal))){
            setError(username, "Username must only contains letter");
            e.preventDefault();
        }
        else {
            setValid(username);
        }
    })

    username.addEventListener('blur', (e) => {
        console.log("Validating username");
        const usernameVal = username.value;
        if(usernameVal.trim() === ''){
            setError(username, "Please set your username");
            e.preventDefault();
        }
        else if(!(/^[a-zA-Z]*$/.test(usernameVal))){
            setError(username, "Username must only contains letter");
            e.preventDefault();
        }
        else {
            setValid(username);
        }
    })

    name.addEventListener('input', (e) => {
        console.log("Validating name");
        const nameVal = name.value;
        if(nameVal.trim() === ''){
            setError(name, "Please enter your full name");
            e.preventDefault();
        }
        else if(!(/^[a-zA-Z\s]*$/.test(nameVal))){
            setError(name, "Name must only contains letter");
            e.preventDefault();
        }
        else {
            setValid(name);
        }
    })

    name.addEventListener('blur', (e) => {
        console.log("Validating name");
        const nameVal = name.value;
        if(nameVal.trim() === ''){
            setError(name, "Please enter your full name");
            e.preventDefault();
        }
        else if(!(/^[a-zA-Z\s]*$/.test(nameVal))){
            setError(name, "Name must only contains letter");
            e.preventDefault();
        }
        else {
            setValid(name);
        }
    })
    
    email.addEventListener('input', (e) => {
        console.log("Validating email");
        const emailVal = email.value;
        if(emailVal.trim() === ''){
            setError(email, "Please enter your email");
            e.preventDefault();
        }
        else if(!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailVal))){
            setError(email, "Please enter a valid email");
            e.preventDefault();
        }
        else {
            setValid(email);
        }
    })

    email.addEventListener('blur', (e) => {
        console.log("Validating email");
        const emailVal = email.value;
        if(emailVal.trim() === ''){
            setError(email, "Please enter your email");
            e.preventDefault();
        }
        else if(!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailVal))){
            setError(email, "Please enter a valid email");
            e.preventDefault();
        }
        else {
            setValid(email);
        }
    })

    address.addEventListener('input', (e) => {
        console.log("Validating address");
        const addressVal = address.value;
        if(addressVal.trim() === ''){
            setError(address, "Please enter your address");
            e.preventDefault();
        }
        else {
            setValid(address);
        }
    })

    address.addEventListener('blur', (e) => {
        console.log("Validating address");
        const addressVal = address.value;
        if(addressVal.trim() === ''){
            setError(address, "Please enter your address");
            e.preventDefault();
        }
        else {
            setValid(address);
        }
    })
    

    hp.addEventListener('input', (e) => {
        console.log("Validating hp");
        const hpVal = hp.value;
        if(hpVal.trim() === ''){
            setError(hp, "Please enter your phone number");
            e.preventDefault();
        }
        else if(!(/^\+(\d{2})(\d{1,13}$)/.test(hpVal))){
            setError(hp, "Please enter a valid phone number");
            e.preventDefault();
        }
        else {
            setValid(hp);
        }
    })

    hp.addEventListener('blur', (e) => {
        console.log("Validating hp");
        const hpVal = hp.value;
        if(hpVal.trim() === ''){
            setError(hp, "Please enter your phone number");
            e.preventDefault();
        }
        else if(!(/^\+(\d{2})(\d{1,13}$)/.test(hpVal))){
            setError(hp, "Please enter a valid phone number");
            e.preventDefault();
        }
        else {
            setValid(hp);
        }
    })


    password.addEventListener('input', (e) => {
        console.log("Validating password");
        const passwordVal = password.value;
        if(passwordVal.trim() === ''){
            setError(password, "Please set your password");
            e.preventDefault();
        }
        else if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(passwordVal))){
            setError(password, "Password must contains ONE UPPER CASE, ONE LOWER CASE, ONE NUMBER AND ONE SPECIAL CHARACTER");
            e.preventDefault();
        }
        else if(passwordVal.length != 6){
            setError(password, "Password must be exactly 6 character long")
            console.log(passwordVal.length);
        }
        else {
            setValid(password);
        }
    })

    password.addEventListener('blur', (e) => {
        console.log("Validating password");
        const passwordVal = password.value;
        if(passwordVal.trim() === ''){
            setError(password, "Please set your password");
            e.preventDefault();
        }
        else if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(passwordVal))){
            setError(password, "Password must contains ONE UPPER CASE, ONE LOWER CASE, ONE NUMBER AND ONE SPECIAL CHARACTER");
            e.preventDefault();
        }
        else if(passwordVal.length != 6){
            setError(password, "Password must be exactly 6 character long")
            console.log(passwordVal.length);
        }
        else {
            setValid(password);
        }
    })

    
    /*--------------------------------------------------------------------------------------------------*/
    function setError(input, errorMsg){
        console.log("Setting error");
        const formEl = input.parentElement;
        const small = formEl.getElementsByTagName("small");

        if(formEl.classList.contains("valid")){
            formEl.classList.remove("valid");
        }
        formEl.classList.add("error");

        for(let i in small){
            small[i].innerText = errorMsg;
        }
    }

    function setValid(input){
        const formEl = input.parentElement;
        if(formEl.classList.contains("error")){
            formEl.classList.remove("error");
        }
        formEl.classList.add("valid");
    }
})