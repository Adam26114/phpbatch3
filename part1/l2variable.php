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

echo "My name is    $fullname"; // result = My name is Zwe Aung Naing
echo "<br/>"; 
echo "My name is $(fullname)"; // result = My name is Zwe Aung Naing
echo "<br/>"; 
echo 'My name is $(fullname)'; // result = My name is ${fullname}

?>