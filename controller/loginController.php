//Login Validation

<?php

class ValidationController extends Controller {
   
   //validates the user using user table
   public function validateform(Request $request){
   	$username = $request->username;
   	$password = $request->password;
   	//validate and show the required page
     
   }
}