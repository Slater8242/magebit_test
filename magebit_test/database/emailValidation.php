<?php

class emailValidation {
    // Email correction check
    function checkemail($emailText) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $emailText) ) ? FALSE : TRUE;
    }
    // Columbia check
    function columbia($emailText){
        return (!preg_match("/@([\w-])+\.co$/mi", $emailText)) ? FALSE : TRUE;
    }
    // Email & Tos validation check
    function validation(){
        if(isset($_POST["emailSubmit"])){
            if (empty($_POST["emailText"])) {
                header("Location: ../magebit_test/index.php?error=emptyfields");
                exit();
            } else {
              $emailText = $_POST["emailText"];
                if (!$this->checkEmail($emailText)) {
                 header("Location: ../magebit_test/index.php?error=invalidmail");
                 exit();
                }elseif ($this->columbia($emailText)) {
                    header("Location: ../magebit_test/index.php?error=columbia");
                    exit();
                }elseif(empty($_POST["tos"])){
                    header("Location: ../magebit_test/index.php?error=checkbox");
                    exit();
                }else{
                    header("Location:../magebit_test/success.html");
                }
            }
        }
    }
}