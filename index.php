<?php
$a = "b";
$b = "c";
echo $$a; // the $$ makes the value of $a to be taken and takes it as the name of the variable, that's why it displays $b
function c(){
echo "<br/><br/><br/>function content";
}

// Ways to call the function

c(); // Traditional

$$a(); // 1. alternative way

echo $$a(); // 2. alternative way (in this case echo is useless)

$c = $$a(); // 3. alternative way (this is good for implement result of function on another function process)
echo $c; // if you need implement on a new function use yourNewProcess($c) to send data at the function (remember define use of this datta in your function ex: function yourNewProcess($value){return $value;}) 
?>
