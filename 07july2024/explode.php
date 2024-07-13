 <?php
 $summary = <<<summary
 The most up to date source for PHP documentation is the PHP manual.
 It contins many examples and user contributed code and comments.
 It is available on the main PHP web site
 <a href="http://www.php.net">PHP’s</a>.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do smod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea mmodo
summary;
 $words = sizeof(explode(' ',strip_tags($summary)));
 echo "Total words in summary: $words";
 ?>

 