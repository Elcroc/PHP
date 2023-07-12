<?php
class Contact
{
    public $name;
    public $email;
    public $phone;

    public function getName($name)
    {
        return $this->name = $name;
        
        
    }
    public function getEmail()
    {
        return $this->email = 'joao@example.com';
        
    }
    public function getPhone()
    {
        return $this->phone = '123456789';
         
    }
    public function setEmail($new)
    {
        $this->email = $new;
    }
    public function setPhone($new)
    {
        $this->phone = $new;
    }

}
$pessoa = new Contact;
$pessoa->name = 'João';
$pessoa->email =  'joao@example.com';
$pessoa->phone = '123456789';
$pessoa->getName('jesiel');