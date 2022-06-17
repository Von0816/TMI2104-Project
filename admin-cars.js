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
    else if(!validateNum(Number(carBHP.value))){
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
    else if(carMonthlyRate.value === 0){
        setError(carMonthlyRate, "Please enter car monthly rate");
        e.preventDefault();
    }
    else if(!validateFloat(carMonthlyRate.value)){
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