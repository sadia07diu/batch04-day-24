<?php


namespace App\classes;


class Auth
{
    protected $email;
    protected $password;
    protected $authEmail;
    protected $authPassword;
    public function __construct($post=null)
    {
        if($post)
        {
            $this->email= $post["email"];
            $this->password= $post["password"];
        }
    }
    public function logIn()
    {
        $this->authEmail= "admin@admin.com";
        $this->authPassword ="123456";

        if ($this->email== $this->authEmail && $this->password==$this->authPassword)
        {
            header( "Location: action.php?pages=file-upload");
        }
        else
        {
            return "sorry.....try again";
        }
    }
    public function logOut()
    {
        header("Location: action.php?pages=logOut");
    }

}