const addCarForm = document.getElementById("addCarForm");
const editCarForm = document.getElementById("editCarForm");

addCarForm.addEventListener('submit', (e) => {
    const carID = document.getElementById("carID");
    const carName = document.getElementById("carName");
    const carBody = document.getElementById("carBody");
    const carTrim = document.getElementById("carTrim");
    const carFuel = document.getElementById("carFuel");
    const carBHP = document.getElementById("carBHP");
    const carGearBox = document.getElementById("carGearBox");
    const carPaint = document.getElementById("carPaint");
    const carTerm = document.getElementById("carTerm");
    const carMonthlyRate = document.getElementById("carMonthlyRate");
    console.log("debug")
    if(Number(carID.value) === 0){
        setError(carID, "Please enter car ID");
        e.preventDefault();
    }
    else if (!validateNumber(Number(carID.value))){
        setError(carID, "car ID must be numerical");
        e.preventDefault();
    }
    else if(carName.value.trim() === ''){
        setError(carName, "Please enter car name");
        e.preventDefault();
    }
    else if(carBody.value.trim() === ''){
        setError(carBody, "Please enter car body");
        e.preventDefault();
    }
    else if(carTrim.value.trim() === ''){
        setError(carTrim, "Enter car trim");
        e.preventDefault();
    }
    else if (carFuel.value.trim() === ''){
        setError(carFuel, "Please enter car fuel");
        e.preventDefault();
    }
    else if(Number(carBHP.value) === 0){
        setError(carBHP, "Please enter car BHP");
        e.preventDefault();
    }
    else if(!(validateNumber(Number(carBHP.value)))){
        setError(carBHP, "Must only contain number");
        e.preventDefault();
    }
    else if(carGearBox.value.trim() === ''){
        setError(carGearBox, "Please enter gear box");
        e.preventDefault();
    }
    else if(carPaint.value.trim() === ''){
        setError(carPaint, "Please enter car paint");
        e.preventDefault();
    }
    else if(carTerm.value.trim() === ''){
        setError(carTerm, "Please enter term");
        e.preventDefault();
    }
    else if(Number(carMonthlyRate.value) === 0){
        setError(carMonthlyRate, "Please enter car monthly rate");
        e.preventDefault();
    }
    else if(!(validateFloat(Number(carMonthlyRate.value)))){
        setError(carMonthlyRate, "Enter a valid rate");
        e.preventDefault();
    }



})
function validateFloat(float){
    if(!(/^[0-9\.0-9]*$/.test(float))){
        return false;
    }
    return true;
}
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

function editCar(id){
    const row = document.getElementById(id);
    const col = row.getElementsByTagName("td");
    const oldBtn = [];
    const newBtn = [document.createElement("button"), document.createElement("button")]
    for(let i in col){
        if(col[i].childElementCount === 1){
            const inputList = col[i].getElementsByTagName("input");
            for (let j in inputList){
                inputList[j].disabled = false;
            }
        }
    }
    newBtn[0].innerText = "Save";
    newBtn[0].type = "submit";
    newBtn[0].value = id;
    newBtn[0].name = "updateCar";
    newBtn[0].classList.add("save-btn");
    newBtn[0].setAttribute("form", "editCarForm");

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
        if(col[i].childElementCount > 0){
            if(col[i].getElementsByTagName("button").length > 0){
                while(col[i].lastElementChild){
                    oldBtn.push(col[i].lastElementChild.cloneNode(true));
                    col[i].removeChild(col[i].lastElementChild);
                }
                col[i].append(newBtn[0], newBtn[1]);
            }
        }

    }
}