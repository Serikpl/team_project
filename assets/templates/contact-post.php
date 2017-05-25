<?php 
//file to ensure safety of form and retrieve data asyncronic
class Form{
    private $client_name;
    private $client_email;
    private $client_text;
    private $errors = array();
    
    public function __construct($name, $email, $message){
        $this->client_name = $name;
        $this->client_email = $email;
        $this->client_text = $message;
        
        $this->name_validate();
        $this->message_validate();
        $this->email_validate();
        
        var_dump($this->errors);
        
    }
    
    public function validate_data($data){
        htmlspecialchars(stripslashes(trim($data)));
        return $data;
    }
    
    public function name_validate(){
        $tmp = $this->validate_data($this->client_name);
        if(!empty($tmp)){  
            return true;
        }else{
            $this->errors['client_name_error'] = 'you should fill the name*';
            return false;
        }
    }
    
    public function message_validate(){
        $tmp = $this->validate_data($this->client_text);
        echo $tmp;
        if(!empty($tmp)){  
            if(!(strlen($tmp) >= 30)){
                $this->errors['message_error'] = 'message should be at least 30 signs*';
                return false;
            }
            return true;
        }else{
            $this->errors['message_error'] = 'message shouldn\'t be empty*';
            return false;
        } 
    }
    
    public function email_validate(){
        $tmp = $this->validate_data($this->client_email);

        if(!empty($tmp)){  
        if(!(filter_var($tmp, FILTER_VALIDATE_EMAIL))){
                $this->errors['email_error'] = 'check if email is correct*';
                return false;
            }
            return true;

           }else{
            $this->errors['email_error'] = 'email shouldn\'t be empty*';
            return false;
        } 

    }
}
    $form = new Form($_POST['client_name'], $_POST['email'], $_POST['message']);
?>
