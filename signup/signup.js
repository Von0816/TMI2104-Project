
window.addEventListener('load', () => {
    console.log("js loaded");
    const form = document.getElementById("signup-form");
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
            setError(password, "Password must be exactly 6 character long");
        }
        else {
            setValid(password);
        }
    })

    password.addEventListener('blur', (e) => {
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
            setError(password, "Password must be exactly 6 character long");
        }
        else {
            setValid(password);
        }
    })

    form.addEventListener('submit', (e) => {
        const error = form.getElementsByClassName("error");
        if(!validate()){
            e.preventDefault()
        }
    })

    
    /*--------------------------------------------------------------------------------------------------*/
    function validate() {
        const usernameVal = username.value;
        const nameVal = name.value;
        const emailVal = email.value;
        const addressVal = address.value;
        const hpVal = hp.value;
        const passwordVal = password.value;
        let hasError = false;

        if(usernameVal.trim() === ''){
            setError(username, "Please set your username");
            hasError = true;
        }
        else if(!(/^[a-zA-Z]*$/.test(usernameVal))){
            setError(username, "Username must only contains letter");
            hasError = true;
        }
        else {
            setValid(username);
        }

        if(nameVal.trim() === ''){
            setError(name, "Please enter your full name");
            hasError = true;
        }
        else if(!(/^[a-zA-Z\s]*$/.test(nameVal))){
            setError(name, "Name must only contains letter");
            hasError = true;
        }
        else {
            setValid(name);
        }

        if(emailVal.trim() === ''){
            setError(email, "Please enter your email");
            hasError = true;
        }
        else if(!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailVal))){
            setError(email, "Please enter a valid email");
            hasError = true;
        }
        else {
            setValid(email);
        }

        if(addressVal.trim() === ''){
            setError(address, "Please enter your address");
            hasError = true;
        }
        else {
            setValid(address);
        }

        if(hpVal.trim() === ''){
            setError(hp, "Please enter your phone number");
            hasError = true;
        }
        else if(!(/^\+(\d{2})(\d{1,13}$)/.test(hpVal))){
            setError(hp, "Please enter a valid phone number");
            hasError = true;
        }
        else {
            setValid(hp);
        }

        if(passwordVal.trim() === ''){
            setError(password, "Please set your password");
        }
        else if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(passwordVal))){
            setError(password, "Password must contains ONE UPPER CASE, ONE LOWER CASE, ONE NUMBER AND ONE SPECIAL CHARACTER");
            hasError = true;
        }
        else if(passwordVal.length != 6){
            setError(password, "Password must be exactly 6 character long");
            hasError = true;
        }
        else {
            setValid(password);
        }


        if(hasError === false){
            return true;
        }
        else {
            return false
        }
    }


    function setError(input, errorMsg){
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