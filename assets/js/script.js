// Get data
const nameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const message = document.querySelector("#message");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

// Validate data
function validateForm() {
  clearMessages();
  let errorFlag = false;

  if (nameInput.value.trim().length < 1) {
    errorNodes[0].innerText = "Name cannot be blank";
    nameInput.classList.add("error-border");
    errorFlag = true;
  }

  if (!emailIsValid(emailInput.value)) {
    errorNodes[1].innerText = "Invalid email address";
    emailInput.classList.add("error-border");
    errorFlag = true;
  }

  if (message.value.trim().length < 1) {
    errorNodes[2].innerText = "Please enter a message";
    message.classList.add("error-border");
    errorFlag = true;
  }

  if (!errorFlag) {
    success.innerText = "Success!";
  }
}

// Clear error / success messages
function clearMessages() {
  for (let i = 0; i < errorNodes.length; i++) {
    errorNodes[i].innerText = "";
  }
  success.innerText = "";
  nameInput.classList.remove("error-border");
  emailInput.classList.remove("error-border");
  message.classList.remove("error-border");
}

// Check if email is valid
function emailIsValid(email) {
  let pattern = /\S+@\S+\.\S+/;
  return pattern.test(email);
}
