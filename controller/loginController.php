//Login Validation

<?php

class ValidationController extends Controller {
   
   //validates the user using user table
   public function validateform(Request $request){
   	$username = $request->username;
   	$password = $request->password;
   	//validate based on 
   	1. office_IP
   	2. password
   	3. login attempt
   	4. account active status

   	//track the login
   }

   // function to change password
    public function forgotPasswordAction()
    {
    }

    // function to change password
    public function changePasswordAction()
    {
    }
    // function to logout process
    public function logoutAction()
    {
    }
      // function to add-edit users
    public function addEditUserAction()
    {
    }
}