const inputDivs= document.querySelectorAll(".textfield");

console.log(inputDivs);
// console.log(test);
let checkboxDiv=document.querySelectorAll(".checkbox");
console.log(checkboxDiv);
let emailInput=document.querySelector("#email");
let loginInput=document.querySelector("#login");
let passInput=document.querySelector("#pass");
let pass2Input=document.querySelector("#pass2");
let newsletterCheckbox=document.querySelector("#newsletter");
let termsCheckbox=document.querySelector("#terms");

//define a global variables
let newsletterMsg="It is possible to receive the spam emails";
let termsErrorMsg="terms and conditons must be checked";
let defaultMSg="";
let emailErrorMsg="Please enter a valid email";
let loginErrorMsg="Please enter a valid login name";
let passErrorMsg = "Please input at least 6 characters and at least 1 uppercase letter and 1 lowercase letter!";
let pass2ErrorMsg="Please enter a same valid password as above";
//method to validate email
function vaildateEmail(){
    let email = emailInput.value; // access the value of the email
    let emailError=document.getElementById('emailError');

    // let regexp='[a-z0-9]+@[a-z]+\.[a-z]{2,3}';
    let regexp=/\S+@\S+\.\S+/; //regulare expression 

    if(regexp.test(email)){ //test is predefiend method to check if the entered email matches the regexp
        error = defaultMSg;
        emailInput.style.borderColor="None";
    }
    else {   
        error = emailErrorMsg; 
        emailError.innerText = emailErrorMsg;
        emailError.style.display="inline";// block: msg will under the input field.
        emailInput.style.borderColor="red";
    }
    
    emailInput.onfocus = function() {
        if(emailError.innerText !=""){
            email = "";
        }
        emailError.innerText="";
        emailInput.style.borderColor="None";
    }   
    return error;     
}

//method to validate login
function vaildateLogin(){
    let login = loginInput.value; // access the value of the email
    login = login.trim();
    // console.log(login);
    let loginError = document.getElementById('loginError');

    if(login === ""){
        error = loginErrorMsg;
        // console.log(error);
        loginError.innerText=loginErrorMsg;
        loginError.style.display="inline";// block: msg will under the input field.
        loginInput.style.borderColor="red"; 
    }
    else{
        if(login.length>20){
            error = loginErrorMsg;
            loginError.innerText=loginErrorMsg;
            loginError.style.display="inline";// block: msg will under the input field.
            loginInput.style.borderColor="red"; 
        }
        else{
            loginInput.innerText = login.toLowerCase();
            error = defaultMSg;
        }
    }

    loginInput.onfocus = function() {
        if(loginError.innerText !=""){
            login = "";
        }
        loginError.innerText = "";
        // loginInput.innerText = "";
        loginInput.style.borderColor="None";
    }
    return error;    
} 


//method to validate password
function vaildatePass(){
    var pass = passInput.value; // access the value of the pass
    let passError = document.getElementById('passError');
    let regexp=/(?=.*[a-z])(?=.*[A-Z]).{6}/;

    if (pass.length >= 6 && regexp.test(pass)){
        error = defaultMSg;
    }
    else {             
        error = passErrorMsg;
        passError.innerText=passErrorMsg;
        passError.style.display="inline";
        passInput.style.borderColor="red"; 
        }

    passInput.onfocus = function() {
        if(passError.innerText != ""){
            pass = "";
        }
        passError.innerText="";
        passInput.style.borderColor="None";
    }
    return error; 
}

//method to validate password2
function vaildatePass2(){
    var pass2 = pass2Input.value; // access the value of the pass
    // let regexp=/(?=.*[a-z])(?=.*[A-Z])/;
    var pass2Error = document.getElementById('pass2Error');
    var pass = passInput.value;

    if(pass != pass2){
        error = pass2ErrorMsg;
        pass2Error.innerText = pass2ErrorMsg;
    }else{
        error=defaultMSg;
    }

    pass2Input.onfocus = function() {
        if(pass2Error.innerText != ""){
            pass2 = "";
        }
        pass2Error.innerText = "";
    }
    return error;     
}

//method to validate the newsletter 
function validatNewsletter(){
    let newsletterError = document.getElementById('newsletterError');
    let error = newsletterError.textContent;
    // if(newsletterCheckbox.checked){
    //     newsletterCheckbox.addEventListener("click", function(){// anonymous function
            if(this.checked){
                alert("You will receive the spam email!");
                error= defaultMSg;
            }
            // });
        // }
    return false;
}

//method to validate the terms 
function validatTerms(){
    let termsError = document.getElementById('termsError');
    if(termsCheckbox.checked){
        error = defaultMSg;
    }
    else{
        // alert("You must accept the condition and terms!")
        error = termsErrorMsg;
    }
    return error;
}

//event handler for submit event
function validate(){
    let valid = true;
    let emailValidation=vaildateEmail();
    let loginValidation=vaildateLogin();
    let passValidation=vaildatePass();
    let pass2Validation=vaildatePass2();
    let newsletterValidation=validatNewsletter();
    let termsValidation=validatTerms();
    if(emailValidation !==defaultMSg){
        emailError.textContent = emailValidation;
        valid = false;
    }
    if(loginValidation !==defaultMSg){
        loginError.textContent = loginValidation;
        valid = false;
    }
    if(passValidation !==defaultMSg){
        passError.textContent = passValidation;
        valid = false;
    }
    if(pass2Validation !==defaultMSg){
        pass2Error.textContent = pass2Validation;
        valid = false;
    }
    if(termsValidation!==defaultMSg){
        termsError.textContent=termsValidation;
        valid = false;
    }
    return valid;
};


// add event listner to the email if you entered correct email,the error paragraph with be empty
emailInput.addEventListener("blur",()=>{ // arrow function
    let x=vaildateEmail();
    if(x == defaultMSg){
        emailError.textContent = defaultMSg;
    }
    });

// add event listner to the email if you entered correct email,the error paragraph with be empty
loginInput.addEventListener("blur",()=>{ // arrow function
    let x=vaildateLogin();
    if(x == defaultMSg){
        loginError.textContent = defaultMSg;
    }
    });
 
 // add event listner to the email if you entered correct email,the error paragraph with be empty
passInput.addEventListener("blur",()=>{ // arrow function
    let x=vaildatePass();
    if(x == defaultMSg){
        passError.textContent = defaultMSg;
    }
    });

// add event listner to the email if you entered correct email,the error paragraph with be empty
pass2Input.addEventListener("blur",()=>{ // arrow function
    let x=vaildatePass2();
    if(x == defaultMSg){
        pass2Error.textContent = defaultMSg;
    }
    });

// add event listner to the email if you entered correct email,the error paragraph with be empty
newsletterCheckbox.addEventListener("change",function(){ // arrow function
    let x=validatNewsletter();
    if(this.checked){
        alert("You will receive the spam email!");
        newsletterError.textContent = defaultMSg;
    }
    }); 
    
// add event listner to the checkbox if you check the terms box,the error paragraph with be empty
termsCheckbox.addEventListener("change", function(){// anonymous function
    if(this.checked){
        termsError.textContent= defaultMSg;
    }
    });  
     
//event listner to empty the text inside the two paragraph when resent
function reserFormError() {
    emailError.textContent=defaultMSg;
    loginError.textContent=defaultMSg;
    passError.textContent=defaultMSg;
    pass2Error.textContent=defaultMSg;
    newsletterError.textContent=defaultMSg;
    termsError.textContent=defaultMSg;
}
 document.myForm.addEventListener("reset",reserFormError);
 document.myForm.addEventListener("submit", validate);

 