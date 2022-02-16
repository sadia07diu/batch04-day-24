<?php

require_once 'vendor/autoload.php';
use App\classes\StudentInfo;
use App\classes\FileUpload;
use App\classes\Auth;


if (isset($_GET['pages']))
{

    if ($_GET['pages'] == 'file-upload') {

        include "pages/fileUpload.php";
    }
    elseif ($_GET['pages']== 'view-students')
    {
        $fileUpload =new  FileUpload();
        $students = $fileUpload->getAllStudentInfo();
        include "pages/viewStudents.php";
    }
    elseif ($_GET['pages']== 'logIn')
    {
        include "pages/logIn.php";
    }
    elseif ($_GET['pages']== 'logOut')
    {
        $auth= new Auth();
        $auth->logOut();

    }




}
elseif (isset($_POST["btn"]))
{
    $fileUpload =new FileUpload($_POST,$_FILES);
    $message =$fileUpload->index();
    include "pages/fileUpload.php";




}
elseif (isset($_POST["loginbtn"]))
{
    $auth = new Auth($_POST);
    $message=$auth->logIn();
    include  "pages/logIn.php";



//    echo "<pre/>";
//    print_r($_FILES);
//    print_r($_POST);


}






