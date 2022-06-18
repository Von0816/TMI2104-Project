const form = document.getElementById("member-signup-form");

form.addEventListener('submit', (e) => {
    const username = document.getElementById("usernameInput");
    const name = document.getElementById("nameInput");
    const gender = document.getElementsByName("genderIput");
    const address = document.getElementById("addressInput");
    const email = document.getElementById("emailInput");
    const hp = document.getElementById("hpInput");
    const password = document.getElementById("passwordInput");

    if(username.value.trim() === ''){
        handleError(username, "Please provide username");
        e.preventDefault();
    }
    else if(!(/^[a-zA-Z0-9]*$/.test(username.value))){
        handleError(username, "Username must be alphanumeric only")
        e.preventDefault();
    }
    else if(name.value.trim() === ''){
        handleError(name, "Please provide your name");
        e.preventDefault();
    }
    else if(!(/^[a-zA-Z\s]*$/.test(name.value))){
        handleError(name, "Please enter a valid name");
        e.preventDefault();
    }
    else if(gender.value === ''){
        handleError(gender, "Please select your gender");
        e.preventDefault();
    }
    else if(!(/^[a-z]*$/.test(gender.value))){
        handleError(gender, "Invalid gender value");
        e.preventDefault();
    }
    else if(address.value.trim() === ''){
        handleError(address, "Please provide your addresss");
        e.preventDefault();
    }
    else if(email.value.trim() === ''){
        handleError(email, "Please provide your email");
        e.preventDefault();
    }
    else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))){
        handleError(email, "Please enter a valid email");
        e.preventDefault();
    }
    else if(hp.value.trim() === ''){
        handleError(hp, "Please provide your phone number");
        e.preventDefault();
    }
    else if(!(/^\+(\d{2})(\d{5,13}$)/.test(hp.value))){
        handleError(hp, "Please eneter a valid phone number");
        e.preventDefault();
    }
    else if(password.value.trim() === ''){
        handleError(password, "Please set your password");
        e.preventDefault();
    }
    else if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(password.value))){
        handleError(password, "Password MUST contains AT LEAST 1 SMALL LETTER, 1 CAPITAL LETTER, 1 SYMBOL AND 1 NUMBER");
        e.preventDefault();
    }


})

function handleError(input, msg){
    input.focus()
    alert(msg);
}
