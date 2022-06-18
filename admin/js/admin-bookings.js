function editBooking(rowID, bookingID){
    const row = document.getElementById(rowID);
    const col = row.getElementsByTagName("td");
    const oldBtn = [];
    const newBtn = [document.createElement("button"), document.createElement("button")]
    for(let i in col){
        if(col[i].childElementCount === 1){
            const inputList = [];
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
    newBtn[0].value = bookingID;
    newBtn[0].name = "updateBooking";
    newBtn[0].classList.add("save-btn");
    newBtn[0].setAttribute("form", "editBookingForm");

    newBtn[1].innerText = 'Cancel';
    newBtn[1].classList.add("cancel-btn");
    newBtn[1].addEventListener('click', () => {
    for(let i in col){
        if(col[i].childElementCount === 1){
            const inputList = [];
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