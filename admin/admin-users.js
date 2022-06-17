function edit(id, username, password){
    const row = document.getElementById(id);
    const col1 = document.createElement("td");
    const col2 = document.createElement("td");
    const col3 = document.createElement("td");
    const col4 = document.createElement("td");
    const adminID = document.createElement("input");
    const adminUsername = document.createElement("input");
    const adminPassword = document.createElement("input");
    const saveBtn = document.createElement("button");
    const cancelBtn = document.createElement("button");
    console.log(row.children.length);
    while(row.hasChildNodes()){
        row.removeChild(row.firstChild);
    }

    adminID.form = "editAdmin";
    adminID.type = "number";
    adminID.value = id;
    adminID.name = "adminID"
    adminID.disabled= "disabled";
    col1.appendChild(adminID);

    adminUsername.form = "editAdmin";
    adminUsername.type = "text";
    adminUsername.name = "adminUsername";
    adminUsername.value = username;
    col2.appendChild(adminUsername);

    adminPassword.form = "editAdmin";
    adminPassword.type = "text";
    adminPassword.name = "adminPassword";
    adminPassword.value = password;
    col3.appendChild(adminPassword);

    saveBtn.form = "editAdmin";
    saveBtn.type = "submit";
    saveBtn.name = "submit";
    saveBtn.innerText = "Save";
    col4.appendChild(saveBtn);

    row.appendChild(col1);
    row.appendChild(col2);
    row.appendChild(col3);
    row.appendChild(col4);

}