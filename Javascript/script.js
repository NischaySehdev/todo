
function openForgotPasswordpage() {
    document.getElementById("loginType").value == "forgot_password_action";
    document.getElementById("loginInput").click();
}
function openCreateAccountpage() {
    window.open("../Html/Create_account.html");
}

function checkUserIdIsCorrectOrNot() {
    let userId = document.getElementById("name").Value;
    
}
function isUserInDatabse(userId, responseText){
    console.log(responseText+"  "+user);
}
function newConfirmPassword(){
    let confirmPasword = document.getElementById("confirmPasword");
    let newPasswod = document.getElementById("newPasswod");
    if (newPasswod.value!=confirmPasword.value) {
        alert("Please enter the same password in the confirm column");
        newPasswod.value = ""
        confirmPasword.value="";
    }
    else{
        document.getElementById("input").nodeType = "submit";
        document.getElementByI("input").click();
    }
}