function validate() {

    //First name validation 
    if( document.myForm.fname.value == "" ){
        alert( "Please provide your first name!" );
        document.myForm.fname.focus() ;
        return false;
    }
    //Last name validation
    if( document.myForm.lname.value == "" ){
        alert( "Please provide your last name!" );
        document.myForm.lname.focus() ;
        return false;
    }

    //Email validation
    if(document.myForm.email.value =="") {
        alert("Please enter your email.");
        document.myForm.email.focus();
        return false;
    }
    var emailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!document.myForm.email.value.match(emailFormat)) {
        alert("Please enter a correct email format with @.");
        document.myForm.email.focus();
        return false;
    }

    //Address validation
    if( document.myForm.adr.value == "" ){
        alert( "Please provide your address!" );
        document.myForm.adr.focus() ;
        return false;
    }
    
    //City validation
    if( document.myForm.city.value == "" ){
    alert( "Please provide your city!" );
    document.myForm.city.focus() ;
    return false;
    }

    //State validation
    if( document.myForm.state.value == "" ){
        alert( "Please provide your state!" );
        document.myForm.state.focus() ;
        return false;
    }

    //Card name validation
    if( document.myForm.cardname.value == "" ){
        alert( "Please provide your card name!" );
        document.myForm.cardname.focus() ;
        return false;
    }

    //Card number validation
    if( document.myForm.cardnumber.value == "" ){
        alert( "Please provide your card number!" );
        document.myForm.cardnumber.focus() ;
        return false;
    }

    //Cad expiry month validation
    if( document.myForm.expmonth.value == "" ){
        alert( "Please provide your card expiry month!" );
        document.myForm.expmonth.focus() ;
        return false;
    }

    //Cad expiry year validation
    if( document.myForm.expyear.value == "" ){
        alert( "Please provide your card expiry year!" );
        document.myForm.expyear.focus() ;
        return false;
    }

    //Cad CVV validation
    if( document.myForm.cvv.value == "" ){
        alert( "Please provide your card CVV!" );
        document.myForm.cvv.focus() ;
        return false;
    }

}