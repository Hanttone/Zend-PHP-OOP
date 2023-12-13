<?php 

//namespace Application\Validator;

class InputValidator {

    public string $email;
    public string $username;
    public string $password;
    public string $input;

    // Method to check if input is a valid email
    public function isValidEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Method to check if input is a valid username
    public function isValidUsername($username) {
        // Example criteria: Username should be at least 5 characters long
        return strlen($username) >= 5;
    }

    // Method to check if input is a valid password
    public function isValidPassword($password) {
       
        $errors = array();
        if (strlen($password) < 8 || strlen($password) > 16) {
            $errors[] = "Password should be min 8 characters and max 16 characters";
        }
        if (!preg_match("/\d/", $password)) {
            $errors[] = "Password should contain at least one digit";
        }
        if (!preg_match("/[A-Z]/", $password)) {
            $errors[] = "Password should contain at least one Capital Letter";
        }
        if (!preg_match("/[a-z]/", $password)) {
            $errors[] = "Password should contain at least one small Letter";
        }
        if (!preg_match("/\W/", $password)) {
            $errors[] = "Password should contain at least one special character";
        }

        if ($errors) {
            foreach ($errors as $error) {
                echo $error . "\n";
            }
            die();
        } else {
            echo "$password => MATCH\n";
        }
    }

    // Method to sanitize input data (prevent SQL injection, etc.)
    public function sanitizeString($input) {
        // Remove leading/trailing whitespace
        $input = trim($input);
        
        // Remove backslashes
        $input = stripslashes($input);
        
        // Convert special characters to HTML entities
        $input = htmlspecialchars($input);
    
        return $input;
    }
}