 
 
 
 // Variables

 const showpass = document.querySelector("#show-password-1") // icon id
 const showpass2 = document.querySelector("#show-password-2")

 const passwordField = document.querySelector("#oldPassword") //input id
 const newpasswordField = document.querySelector("#newPassword")




    
//  System | New password Show function
 showpass.addEventListener("click", function () {
 this.classList.toggle("fa-eye-slash");
 
 this.classList.toggle("fa-eye", !this.classList.contains("fa-eye-slash"));
 const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
 passwordField.setAttribute("type", type);
 })


//  System | Old password Show function
 showpass2.addEventListener("click", function () {
 this.classList.toggle("fa-eye-slash");
 
 this.classList.toggle("fa-eye", !this.classList.contains("fa-eye-slash"));
 const type = newpasswordField.getAttribute("type") === "password" ? "text" : "password";
 newpasswordField.setAttribute("type", type);
 }) 


