function validationForm() {
    let x = document.forms["signup-form"]["first-name"].value;
    let x2 = document.forms["signup-form"]["last-name"].value;
    let x3 = document.forms["signup-form"]["email"].value;
    let x4 = document.forms["signup-form"]["password"].value;
    if(x == "" && x2 == "" && x3 == "" && x4 == "" ){
alert("Form must be filled out");
      return false;
}
    if (x == "") {
      alert("First name must be filled out");
      return false;
    }
    if (x2 == "") {
        alert("Last name must be filled out");
        return false;
      }
    if (x3 == "") {
        alert("Email must be filled out");
        return false;
      }
   if (x4 == "") {
        alert("Password must be filled out");
        return false;
      }
  }