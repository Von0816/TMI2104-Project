function editProfile() {
    let input = document.getElementsByTagName('input');
    for(let x in input){
        input[x].disabled = false;
    }
    document.getElementById('edit-button').style.display = "none";
    document.getElementById("btn").style.display = "flex";
}

function cancelEdit() {

    let input = document.getElementsByTagName('input');
    for(let x in input){
        input[x].disabled = true;
    }
    document.getElementById('edit-button').style.display = "block";
    document.getElementById("btn").style.display = "none";
    
}