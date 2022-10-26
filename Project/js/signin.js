function validationForm() {
    let x = document.forms["signin-form"]["email"].value;
    let x2 = document.forms["signin-form"]["password"].value;
    if(x == "" && x2 == ""){
alert("Form must be filled out");
      return false;
}
    if (x == "") {
      alert("Email must be filled out");
      return false;
    }
    if (x2 == "") {
        alert("Password must be filled out");
        return false;
      }

  }