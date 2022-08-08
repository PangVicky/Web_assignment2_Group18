
const inputDivs= document.querySelectorAll(".textfield");

console.log(inputDivs);
// console.log(test);
let emailInput=document.querySelector("#email");
console.log(emailInput);
let loginInput=document.querySelector("#login");
let passInput=document.querySelector("#pass");
let pass2Input=document.querySelector("#pass2");
let searchInput=document.querySelector("#searchKey");

//define a global variables
let defaultMSg="";
let emailErrorMsg="Please enter a valid email";
let loginErrorMsg="Please enter a valid login name";
let passErrorMsg = "Please input at least 6 characters and at least 1 uppercase letter and 1 lowercase letter!";
let pass2ErrorMsg="Please enter a same valid password as above";
let searchErrorMsg="Please enter a search keyword";
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

//event handler for submit event
function validate(){
    let valid = true;
    let emailValidation=vaildateEmail();
    let loginValidation=vaildateLogin();
    let passValidation=vaildatePass();
    let pass2Validation=vaildatePass2();

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
     
//event listner to empty the text inside the two paragraph when resent
function reserFormError() {
    emailError.textContent=defaultMSg;
    loginError.textContent=defaultMSg;
    passError.textContent=defaultMSg;
    pass2Error.textContent=defaultMSg;
    newsletterError.textContent=defaultMSg;
    termsError.textContent=defaultMSg;
}
 document.loginForm.addEventListener("reset",reserFormError);
 document.loginForm.addEventListener("submit", validate);

 
//method to validate search
function validateSearch(){
    var searchword = document.getElementById("searchKey");
    var pattern = new RegExp("^[`~!@#$^&*()=|{}':;',\\[\\].<>/?~@#￥……&*（）——|{}【】‘；：”“'。，、？]*$");
    if ( searchword == null || searchword == ''|| searchword == "" || searchword.indexOf('Please input') >=0 ){
        alert("Please input the search words");
        return false;
    }else if ( pattern.test(searchword)) {
        alert("Please input the right search words");
        return false;
    }else {
        return true;
    }    
}


function to() {
    if(validateSearch){
    const searchInput = document.getElementById("searchKey").value;
    console.log(searchInput);
    if( searchInput == '' ){
      return false;
    }else{
    for( var i=0; i < data.length;i++) {
      //if match the name or director or desc of movies, link to search page
      if(searchInput == data[i].names || searchInput == data[i].director || searchInput == data[i].desc) {
        window.location.href="http://localhost/Web_assignment2_Group18/browse.php?search="+searchInput;
      }
    }
  }
  }
  }
