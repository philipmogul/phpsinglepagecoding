<?php
$heredoc = <<< EOF
This is a cool method when it comes to 
writing multiline statements.
Php programming is very fun.
I github everyday.
EOF;
echo $heredoc;
echo "\n\n";
$normdoc = <<< 'EOF'
Normdoc is the same like the heredoc
But the eof is has single quotes.
Has only single quotes at the beginning 
But it does not have to be ended with single 
quotes at the close 
EOF;
echo $normdoc;