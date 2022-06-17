const addAdminForm = document.getElementById("addAdminForm");
const editAdminForm = document.getElementById("editAdminForm");
const addMemberForm = document.getElementById("addMemberForm");
const editMemberForm = document.getElementById("editMemberForm");

addAdminForm.addEventListener('submit', (e) => {                
    const adminID = document.getElementById("adminID");
    const adminUsername = document.getElementById("adminUsername");
    const adminPassword = document.getElementById("adminPassword");

    const idVal = Number(adminID.value);
    const usernameVal = adminUsername.value.trim();
    const pswVal = adminPassword.value;
    if(idVal === 0){
        setError(adminID, "Please enter admin ID");
        e.preventDefault();
    }
    else if(!validateNumber(idVal)){
        setError(input, "Member ID can only contain number");
        e.preventDefault();
    }
    else if(usernameVal === ''){
        setError(adminUsername, "Please enter admin username");
        e.preventDefault();
    }
    else if(!validateString(usernameVal)){
        setError(input, "Must be alphanumeric");
        e.preventDefault();
    }
    else if(pswVal === ''){
        setError(adminPassword, "Please set admin password");
        e.preventDefault()
    } 
    else if(!validatePassword(pswVal)){
        setError(psw, "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace");
        e.preventDefault()
    }

})

addMemberForm.addEventListener('submit', (e) => {
    const memberID = document.getElementById("memberID");
    const memberUsername = document.getElementById("memberUsername");
    const memberPassword = document.getElementById("memberPassword");
    const memberName = document.getElementById("memberName");
    const memberGender = document.getElementById("memberGender");
    const memberEmail = document.getElementById("memberEmail");
    const memberHP = document.getElementById("memberHP");
    console.log("debug")
    if(Number(memberID.value) === 0){
        setError(memberID, "Please enter member ID");
        e.preventDefault();
    }
    else if (!validateNumber(Number(memberID.value))){
        setError(memberID, "Member ID must be numerical");
        e.preventDefault();
    }
    else if(memberUsername.value.trim() === ''){
        setError(memberUsername, "Please enter member username");
        e.preventDefault();j
    }
    else if(!validateString(memberUsername.value)){
        setError(memberUsername, "Username must be alphanumeric w/o spaces");
        e.preventDefault();
    }
    else if(memberPassword.value.trim() === ''){
        setError(memberPassword, "Please enter user password");
        e.preventDefault();
    }
    else if (!validatePassword(memberPassword.value)){
        setError(memberPassword, "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace");
        e.preventDefault();
    }
    else if (memberName.value === ''){
        setError(memberName, "Please enter member name");
        e.preventDefault();
    }
    else if(!validateStrWS(memberName.value)){
        setError(memberName, "Must only contains letters and spaces");
        e.preventDefault();
    }
    else if(memberGender.value === ''){
        setError(memberGender, "Please enter member gender");
        e.preventDefault();
    }
    else if(!validateStringWoWS(memberGender.value)){
        setError(memberGender, "Must only contain letter");
        e.preventDefault();
    }
    else if(memberAddress.value === ''){
        setError(memberAddress, "Please enter member address");
        e.preventDefault();
    }
    else if(memberEmail.value === ''){
        setError(memberEmail, "Please enter member email");
        e.preventDefault();
    }
    else if(!validateEmail(memberEmail.value)){
        setError(memberEmail, "Enter a valid email");
        e.preventDefault();
    }
    else if(memberHP.value === ''){
        setError(memberHP, "Please enter member HP");
        e.preventDefault();
    }
    else if(!validateHP(memberHP.value)){
        setError(memberHP, "Please enter a valid HP and not more than 15 digits");
        e.preventDefault();
    }

})
function validateHP(hp){
    if(!(/(^[0-9]*$){1,15}/.test(hp))){
        return false;
    }
    return true;
}

function setError(input, message){
    alert(message);
    input.focus();
}
function validateStringWoWS(str){
    if(!(/^[a-zA-Z]*$/.test(str))){
        return false;
    }
    return true;
}
function validateString(str){
    if(!(/^[a-zA-Z0-9]*$/.test(str))){
        return false;
    }
    return true;
}
function validateStrWS(str){
    if(!(/^[a-zA-Z\s]*$/.test(str))){
        return false;
    }
    return true;
}
function validatePassword(psw){
    if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(psw))){
        return false;
    }
    return true;
}

function validateNumber(num){
    if( !(/^[0-9]*$/.test(num))){
        return false;
    }
    return true;
}
function validateEmail(email){
    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        return false;
    }
    return true;
}
function edit(id, username, password){
    const row = document.getElementById(id);
    const col = row.getElementsByTagName("td");
    const input = [col[1].getElementsByTagName("input"), col[2].getElementsByTagName("input")];
    const button = document.createElement("button");
    console.log(button);
    for(let i in input){
        const inputList = input[i];
        for(let j in inputList){
            inputList[j].disabled = false;
        }
    }


    
}

