<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ex-1</title>
  </head>
  <body>
    <?php
      echo $var = '<br>';
      echo 'lunghezza: '.strlen($text_lorem).'<br>';

      $word_censored = $_GET['badword'];

      $text_lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
       Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
       laborum.';


      echo str_replace($word_censored, '***', $var);
    ?>
  </body>
</html>
