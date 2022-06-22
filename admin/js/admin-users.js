const addAdminForm = document.getElementById("addAdminForm");
const editAdminForm = document.getElementById("editAdminForm");
const addMemberForm = document.getElementById("addMemberForm");
const editMemberForm = document.getElementById("editMemberForm");

const validateAdmin = (e) => {
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
        setError(input, "Admin ID can only contain number");
        e.preventDefault();
    }
    else if(usernameVal === ''){
        setError(adminUsername, "Please enter admin username");
        e.preventDefault();
    }
    else if(!validateString(usernameVal)){
        setError(input, "Admin username must be alphanumeric");
        e.preventDefault();
    }
    else if(pswVal === ''){
        setError(adminPassword, "Please set admin password");
        e.preventDefault()
    } 
    else if(!validatePassword(pswVal)){
        setError(psw, "admin password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace");
        e.preventDefault()
    }
}

const validateMember = (e) => {
    const memberID = document.getElementById("memberID");
    const memberUsername = document.getElementById("memberUsername");
    const memberPassword = document.getElementById("memberPassword");
    const memberName = document.getElementById("memberName");
    const memberGender = document.getElementById("memberGender");
    const memberEmail = document.getElementById("memberEmail");
    const memberHP = document.getElementById("memberHP");
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
        setError(memberUsername, "Member username must be alphanumeric w/o spaces");
        e.preventDefault();
    }
    else if(memberPassword.value.trim() === ''){
        setError(memberPassword, "Please enter member password");
        e.preventDefault();
    }
    else if(memberPassword.value.length != 6){
        setError(memberPassword, "Member password must be 6 character long");
        e.preventDefault();
    }
    else if (!validatePassword(memberPassword.value)){
        setError(memberPassword, "Member password contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace");
        e.preventDefault();
    }
    else if (memberName.value.trim() === ''){
        setError(memberName, "Please enter member name");
        e.preventDefault();
    }
    else if(!validateStrWS(memberName.value)){
        setError(memberName, "member name can only contains letters and spaces");
        e.preventDefault();
    }
    else if(memberGender.value.trim() === ''){
        setError(memberGender, "Please select member gender");
        e.preventDefault();
    }
    else if(memberAddress.value.trim() === ''){
        setError(memberAddress, "Please enter member address");
        e.preventDefault();
    }
    else if(memberEmail.value.trim() === ''){
        setError(memberEmail, "Please enter member email");
        e.preventDefault();
    }
    else if(!validateEmail(memberEmail.value)){
        setError(memberEmail, "Enter a valid member email");
        e.preventDefault();
    }
    else if(memberHP.value.trim() === ''){
        setError(memberHP, "Please enter member HP");
        e.preventDefault();
    }
    else if(!validateHP(memberHP.value)){
        setError(memberHP, "Please enter a member valid HP and not more than 15 digits");
        e.preventDefault();
    }
}

addAdminForm.addEventListener('submit', validateAdmin);
// editAdminForm.addEventListener('submit', validateAdmin);
addMemberForm.addEventListener('submit', validateMember);


function validateHP(hp){
    if(!(/^\+(\d{2})(\d{5,13}$)/.test(hp))){
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
    if(!(/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s))/.test(psw))){
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

function editAdmin(rowID, adminID){
    const row = document.getElementById(rowID);
    const col = row.getElementsByTagName("td");
    const oldBtn = [];
    const newBtn = [document.createElement("button"), document.createElement("button")]
    for(let i in col){
        if(col[i].childElementCount > 0){
            const inputList = col[i].getElementsByTagName("input");
            for (let j in inputList){
                inputList[j].disabled = false;
            }
        }
    }
    newBtn[0].innerText = "Save";
    newBtn[0].type = "submit";
    newBtn[0].value = adminID;
    newBtn[0].name = "updateAdmin";
    newBtn[0].id = "updateAdmin";
    newBtn[0].classList.add("save-btn");
    newBtn[0].setAttribute("form", "editAdminForm");

    newBtn[1].innerText = 'Cancel';
    newBtn[1].classList.add("cancel-btn");
    newBtn[1].addEventListener('click', () => {
        for(let i in col){
            if(col[i].childElementCount > 0){
                const inputList = col[i].getElementsByTagName("input");
                for (let j in inputList){
                    inputList[j].disabled = true;
                }
            }
        }

        while(col[3].lastElementChild){
            col[3].removeChild(col[3].lastElementChild);
        }
        col[3].append(oldBtn[1], oldBtn[0]);
    })
    while(col[3].lastElementChild){
        oldBtn.push(col[3].lastElementChild.cloneNode(true));
        col[3].removeChild(col[3].lastElementChild);
    }
    col[3].append(newBtn[0], newBtn[1]);

}

function editMember(rowID, memberID){
    const row = document.getElementById(rowID);
    const col = row.getElementsByTagName("td");
    const oldBtn = [];
    const newBtn = [document.createElement("button"), document.createElement("button")]
    for(let i in col){
        if(col[i].childElementCount === 1){
            const inputList = [];
            inputList.push(col[i].getElementsByTagName("input"));
            inputList.push(col[i].getElementsByTagName("select"));
            for (let j in inputList){
                for (let k in inputList[j]){
                    inputList[j][k].disabled = false;
                }
            }
        }
    }
    newBtn[0].innerText = "Save";
    newBtn[0].type = "submit";
    newBtn[0].value = memberID;
    newBtn[0].name = "updateMember";
    newBtn[0].classList.add("save-btn");
    newBtn[0].setAttribute("form", "editMemberForm");

    newBtn[1].innerText = 'Cancel';
    newBtn[1].classList.add("cancel-btn");
    newBtn[1].addEventListener('click', () => {
    for(let i in col){
        if(col[i].childElementCount === 1){
            const inputList = [];
            inputList.push(col[i].getElementsByTagName("input"));
            inputList.push(col[i].getElementsByTagName("select"));
            for (let j in inputList){
                for (let k in inputList[j]){
                    inputList[j][k].disabled = true;
                }
            }
        }
    }
        for(let i in col){
            if(col[i].getElementsByTagName("button").length > 0){
                while(col[i].lastElementChild){
                    col[i].removeChild(col[i].lastElementChild);
                }
                col[i].append(oldBtn[1], oldBtn[0]);
            }
        }
    })
    for(let i in col){
        if(col[i].getElementsByTagName("button").length > 0){
            while(col[i].lastElementChild){
                oldBtn.push(col[i].lastElementChild.cloneNode(true));
                col[i].removeChild(col[i].lastElementChild);
            }
            col[i].append(newBtn[0], newBtn[1]);
        }
    }
}
