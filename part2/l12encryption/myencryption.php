<?php

// Note :: Interface can't inclue body
// Modifier must be public in interface, cu we need to override
// A class must use the implement keyword
interface encrypt
{

    public function setpasscode($plaintext);
    public function passworddef();
    public function passwordbcr();
    public function passwordvry();
    public function passwordrehash();

    public function strongpassword();
}

// password_hash(strinf,mixed)

class myencryption implements encrypt
{

    private $passcode;

    public function setpasscode($plaintext)
    {
        $this->passcode = $plaintext;
    }

    public function passworddef()
    {

        $newpasscode = password_hash($this->passcode, PASSWORD_DEFAULT);
        echo "Before encrypt = $this->passcode <br/> Afer encrypt = $newpasscode <br/>";
        echo strlen($newpasscode) . "<br/>"; //60
    }
    public function passwordbcr()
    {
        $newpasscode = password_hash($this->passcode, PASSWORD_BCRYPT);
        echo "Before encrypt = $this->passcode <br/> Afer encrypt = $newpasscode <br/>";
        echo strlen($newpasscode) . "<br/>";//60
    }
    public function passwordvry()
    {
        // Decription
        $plaintextone = "password123";
        $enccodeone = password_hash($plaintextone, PASSWORD_DEFAULT);
        echo "password hasg with PASSWORD_DEFAULT = " . $enccodeone;
        $plaintexttwo = "password123456";
        $enccodeone = password_hash($plaintexttwo, PASSWORD_DEFAULT);
        echo "password hasg with PASSWORD_DEFAULT = " . $enccodeone;

        echo "<br/>";

        $verify = password_verify($plaintextone, $enccodeone);

        if ($verify) {
            echo "OKI";
        } else {
            echo "FAILED";
        }
    }

    public function passwordrehash()
    {
        // password_hash(string,mixed,optional)
        // =keyword
        // PASSWORD_DEFAULT
        // PASSWORD_BCRYPT
        $plaintext = "password123";
        $encode = password_hash($plaintext, PASSWORD_DEFAULT);
        echo "password hash with PASSWORD_DEFAULT =" . $encode;

        if (password_needs_rehash($encode, PASSWORD_DEFAULT, ["cost" => 12])) {
            $rehashed = password_hash($plaintext, PASSWORD_DEFAULT, ["cost" => 12]);
            echo $rehashed . "<br/>";
            echo strlen($rehashed) . "<br/>";
        } else {
            echo "No need to rehash";
        }
    }

    public function passwordmd5()
    {
        // Messsage-Digest
        // => md5(string,raw)
        // NOTE ::Raw Optional (TRUE, true, FALSE, false)
        // TRUE/true = Raw 16 characters binary format
        // FALSE/fa1se = Raw 16 characters binary format- DEFAULT. 32 Character hax number

        $password = "howareyou";
        echo "Before encrypt with md5 " . $password . "<br/>";
        echo "Before encrypt with md5 " . md5($password) . "<br/>";
        echo "Before encrypt with md5 by false " . md5($password, false) . "<br/>";
        echo "Before encrypt with md5 by true " . md5($password, true) . "<br/>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";

        if ($getpassword === md5($password)) {
            echo "Password Match with md5 32 chars hax number";
        } elseif ($getpassword === md5($password, false)) {
            echo "Password Match with md5 16 raq chars bunary format";
        } else {
            echo 'Password do not match';
        }
    }

    public function passwordsha1()
    {
        // Secure Hash Algorithm
        // => shal(string,raw)
        // NOTE Raw Optional (TRUE)
        // TRUE/true - Raw 20 characters binary format
        // FALSE/ false = DEFAULT. 40 Character hax number

        $password = "goodluck";
        echo "Before encrypt with sha1 " . $password . "<br/>";
        echo "Before encrypt with sha1 " . sha1($password) . "<br/>";
        echo "Before encrypt with sha1 by false " . sha1($password, false) . "<br/>";
        echo "Before encrypt with sha1 by true " . sha1($password, true) . "<br/>";

        $getpassword = "b47123e4109e6839adb7ae2a28300d96";

        if ($getpassword === md5($password)) {
            echo "Password Match with md5 32 chars hax number";
        } elseif ($getpassword === md5($password, false)) {
            echo "Password Match with md5 16 raq chars bunary format";
        } else {
            echo 'Password do not match';
        }
    }

    public function passwordcrypt()
    {
        // => cryto(string,key)

        $password = "12345";
        $cryptkey = "12345abcdef";
        echo "Before encrypt with crypt = " . $password . "<br/>";
        echo "After encrypt with crypt = " . crypt($password, $cryptkey) . "<br/>";
        echo strlen(crypt($password, $cryptkey)) . "<br/>";


        $getpassword = "12eMC4Wi9/C9o";

        if ($getpassword === crypt($password, $cryptkey)) {
            echo "Password Math";
        } else {
            echo "Password do not match";
        }
    }

    public function strongpassword()
    {
        $password = "ilovemyjob";

        // Uncrypt
        $newpassword = md5($password);
        $newpassword = sha1($newpassword);
        $newpassword = crypt($newpassword, $newpassword);

        echo "Before encrypt = " . $password . "<br/>";
        echo "after encrypt = " . $newpassword . "<br/>";
        $getpassword = "b87BFK8O.P4dE";

        if ($getpassword === crypt(sha1(md5($password)), sha1(md5($password)))) {
            echo "Password Match";
        } else {
            echo "Password do not match";
        }
    }
}

echo "This is Interface <br/>";
$obj = new myencryption();
$obj->setpasscode("password123");
$obj->passworddef();
echo "<hr/>";
$obj->passwordbcr();
echo "<hr/>";
$obj->passwordrehash();
echo "<hr/>";
$obj->passwordmd5();
echo "<hr/>";
$obj->passwordsha1();
echo "<hr/>";
$obj->passwordcrypt();
echo "<hr/>";
$obj->strongpassword();



echo "<hr/>";


// 4EN