function validateContactUsForm() {
	var letters = /^[A-Za-z]+$/;
	
	/*checking if first name is entered*/
	if(document.contactform.firstname.value =="") {
		alert("Please enter your first name.");
		document.contactform.firstname.focus();
		return false;
	}
	
	
	if(!document.contactform.firstname.value.match(letters)) {
		alert("Please enter letters only for your first name.");
		document.contactform.firstname.focus();
		return false;
	}
		
		
	
	/*checking if last name is entered*/
	if(document.contactform.lastname.value =="") {
		alert("Please enter your last name.");
		document.contactform.lastname.focus();
		return false;
	}
	
	/*checking if last name contained letters only*/
	if(!document.contactform.lastname.value.match(letters)) {
		alert("Please enter letters only for your last name.");
		document.contactform.lastname.focus();
		return false;
	}
		
		
	
	/*checking if email is entered*/
	if(document.contactform.email.value =="") {
		alert("Please enter your email.");
		document.contactform.email.focus();
		return false;
	}
	
	/*checking if email format is correct (must have @)*/
	var emailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	
	if(!document.contactform.email.value.match(emailFormat)) {
		alert("Please enter a correct email format with @.");
		document.contactform.email.focus();
		return false;
	}
	
	
	if(document.contactform.subject.value =="") {
		alert("Please enter your subject.");
		document.contactform.subject.focus();
		return false;
	}
	
	if(document.contactform.message.value =="") {
		alert("Please enter your message.");
		document.contactform.message.focus();
		return false;
	}
	
	
	return( true );	
}
