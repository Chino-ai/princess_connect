<?php
class person {
  public $email;
  public $password; 
  function set_email($new_email) { 
    $this->email = $new_email;  
   }

     function get_email() {
    return $this->email;
  }
  function set_password($new_password) { 
    $this->password = $new_password;  
   }

     function get_password() {
    return $this->password;
  }
}
?> 