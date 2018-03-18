<?php
$code='';
$output='';

if(!empty($_POST)){
 $code = $_POST['editor'];
 $file = "run.cpp";
 file_put_contents($file, $code);

 putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");

 shell_exec("g++ run.cpp -o run.exe");

 $output = shell_exec("run.exe");


}

?>
<form method=POST>
<h1 style="color:blue">C Compiler</h1>
<p>
<textarea id=editor name=editor placeholder="C and C++ code" style="width: 100%; height:100px; padding: 10"><?php echo $code; ?></textarea>
<br>
<br>
<textarea id=output name=output placeholder="output" style="width:100%; height: 100px;"><?php echo $output; ?></textarea>
<p>
<center>
<input type=submit value="Compile &amp; Run" style="background-color: rgb(14, 245, 199); border-radius: 31px; border: 1px solid rgb(24, 171, 41); display: inline-block; cursor: pointer; color: rgb(255, 255, 255); font-family: Arial; font-size: 17px; font-weight: bold; font-style: italic; padding: 19px 21px; text-decoration: none; text-shadow: rgb(47, 102, 39) 0px 1px 31px;">
</center>

</form>﻿
