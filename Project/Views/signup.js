function validationForm() {
    let x = document.forms["signup-form"]["username"].value;
    let x2 = document.forms["signup-form"]["password"].value;
    let x3 = document.forms["signup-form"]["email"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    if (x2 == "") {
        alert("Password must be filled out");
        return false;
      }
      if (x3 == "") {
        alert("Email must be filled out");
        return false;
      }
  }