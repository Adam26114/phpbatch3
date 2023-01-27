<?php

// Variables

// variable ကြေညာရင် $ ကို သုံးရမယ်  
$fullname = "Zwe Aung Naing";
$job = "Developer";

echo $fullname;
echo $job;
echo "$fullname"; // double code က ပေးလိုက်တဲ့  variable ဘာသာပြန်ပေးနိုင်တယ် 
echo '$fullname'; // single code က ရေးတဲ့ အတိုင်း ဘဲ‌ပေါ်တယ်
echo `$job`; // back tip က ဘာမှ မပေါ်ဝူး

echo "<br/>"; 

echo "My name is    $fullname."; // result = My name is Zwe Aung Naing
echo "<br/>"; 
echo "My name is ${fullname}."; // result = My name is Zwe Aung Naing
echo "<br/>"; 
echo 'My name is $(fullname).'; // result = My name is ${fullname}
echo "<br/>"; 
echo "I am {$job}." ;// result = I am Developer

echo "<hr/>";// result = I am Developer

echo 'He\'s my father,he is a $job.';  // result = He's my father,he is a $job
echo "<br/>"; 
echo "He\'s my father,he is a \$job.";  // result = He's my father,he is a $job
echo "<br/>"; 
echo "He\'s my father,he is a \${job}.";  // result = He's my father,he is a ${job}
echo "<br/>"; 
echo "He\'s my father,he is a \{$job}.";  // result = He's my father,he is a \{developer}
echo "<br/>"; 
echo "He\'s my father,he is a {\$job}.";  // result = He's my father,he is a {$job}

echo "<hr/>"; 

$gender = print 'female'; // result = female
// $nation = echo 'burma'; // error 

echo "<hr/>";

// Concat
$firstname = 'Aung';
$lastname = 'Kyaw Kyaw';

echo $firstname;
echo $lastname;
echo "<br/>";
echo $firstname.$lastname; // စာတွေ ဆက်ချင်ရင် concat လုပ်ချင်ရင် . လေးနဲ့ဆက်ပေးရတယ် 
echo "<br/>";
echo $firstname.' '.$lastname;

// Comments
// Single Line Comments ( # ,// )
// Muti Line Comments ( /* */)



?>

<!-- 20IN -->

<!-- php -S localhost:8000 -t foldername -->
