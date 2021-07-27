
    function isValid(){
      var first_name=document.forms["first_name"].value;
      var last_name=document.forms["last_name"].value;
      var gender=document.forms["gender"].value;
      var birthdate=document.forms["birthdate"].value;
      var relegion=document.forms["relegion"].value;
      var email=document.forms["email"].value;
      var username=document.forms["username"].value;
      var password=document.forms["password"].value;
      
      if(first_name===""||last_name===""||gender===""||birthdate===""||relegion===""||email===""||username===""||password==="")
      {
        document.getElementById("firstnameError").innerHTML="Field Empty";
        document.getElementById("lastnameError").innerHTML="Field Empty";
        document.getElementById("genderError").innerHTML="Field Empty";
        document.getElementById("birthdateError").innerHTML="Field Empty";
        document.getElementById("relegionError").innerHTML="Field Empty";
        document.getElementById("emailError").innerHTML="Field Empty";
        document.getElementById("usernameError").innerHTML="Field Empty";
        document.getElementById("passwordError").innerHTML="Field Empty";
        return false;
      }
      
    }
 