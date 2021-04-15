form = document.getElementsByTagName("form");
inputPassword1 = document.getElementById("validationPassword#1");
inputPassword2 = document.getElementById("validationPassword#2");
submitSendButton = document.getElementById("submit-send");

inputPassword2.addEventListener("keypress", () => {
    // Verify if passwords are and don't null
    if (
        ValidateData(inputPassword1.value, inputPassword2.value) &&
        inputPassword1.value != null &&
        inputPassword2.value != null
    ) {
        console.log("passei pelo certo");
        // If passwords are equal
        submitSendButton.disabled = true;
        inputPassword1.classList.add("is-valid");
        inputPassword2.classList.add("is-valid");
        inputPassword1.classList.remove("is-invalid");
        inputPassword2.classList.remove("is-invalid");
    } else {
        console.log("passei pelo errado");
        console.log(inputPassword1.value);
        console.log(inputPassword2.value);
        // If passwords are different
        submitSendButton.disabled = false;
        inputPassword1.classList.add("is-invalid");
        inputPassword2.classList.add("is-invalid");
        inputPassword1.classList.remove("is-valid");
        inputPassword2.classList.remove("is-valid");
    }
});
