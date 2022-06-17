function jsValidate() {

    //memberUsername validation 
    if( document.myForm.memberUsername.value == "" ){
        alert( "Please provide username!" );
        document.myForm.memberUsername.focus() ;
        return false;
    }
     //memberName validation 
     if( document.myForm.memberName.value == "" ){
        alert( "Please provide your name!" );
        document.myForm.memberName.focus() ;
        return false;
    }
     //memberGender validation 
     if( document.myForm.memberGender.value == "" ){
        alert( "Please provide your gender!" );
        document.myForm.memberUsername.focus() ;
        return false;
    }
    //memberAddress validation 
    if( document.myForm.memberAddress.value == "" ){
        alert( "Please provide your address!" );
        document.myForm.memberAddress.focus() ;
        return false;
    }
    //memberEmail validation 
    if( document.myForm.memberEmail.value == "" ){
        alert( "Please provide your email!" );
        document.myForm.memberEmail.focus();
        return false;
    }
    var emailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!document.myForm.memberEmail.value.match(emailFormat)) {
        alert("Please enter a correct email format with @.");
        document.myForm.memberEmail.focus();
        return false;
    }
    //memberHP validation
    if( document.myForm.memberHP.value == "" ){
        alert( "Please provide your phone number!" );
        document.myForm.memberEmail.focus();
        return false;
    }
    var HPFormat = /^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/;
    if(!document.myForm.memberHP.value.match(HPFormat)) {
        alert("Please enter a correct phone number format");
        document.myForm.memberHP.focus();
        return false;
    }
    //memberPassword validation
    if( document.myForm.memberPassword.value == "" ){
        alert( "Please provide your password!" );
        document.myForm.memberPassword.focus();
        return false;
    }
    var PasswordFormat = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])$/;
    if(!document.myForm.memberPassword.value.match(PasswordFormat)) {
        alert("The password does not meet the requirements! Contain at least ONE uppercase, ONE numeric, ONE special character, number and no space");
        document.myForm.memberPassword.focus();
        return false;
    }

}