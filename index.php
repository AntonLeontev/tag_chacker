<?php 
require_once 'functions.php';

$one = '[people]
[name]Иванов[/name]
[surname]Иванов [/surname]
[age]13 [/age]
[/people]';

$two = '[people]
[name]Иванов[/name]
[surname]Иванов [/surname]
[age]13 [age]
[/people]';

$three = '[people]
[surname]Иванов[/name]
[/name] Иванов [/surname]
[age]13[/age]
[/people]';

$four = '[/people]
[name]Иванов[/name]
[surname]Иванов [/surname]
[age]13 [/age]
[/people]';

echo check_string($one);
echo "\n";
echo check_string($two);
echo "\n";
echo check_string($three);
echo "\n";
echo check_string($four);
echo "\n";
