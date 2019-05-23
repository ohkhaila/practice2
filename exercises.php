<h1>Coding Exercises</h1>
<?php
for($a=0; $a<10; $a++){
  echo "$a"." Khaila is coding woo.</br>";
}

function getFellow($fellowId){
  $fellows = array(
    0 => array(
      "fellowId" => 0,
      "name" => "Hannah",
      "email" => "totallyreal@email.com",
      "school" => "WashU",
      "website" => "@Hannah",
    ),
    1 => array(
      "fellowId" => 1,
      "name" => "Shahd",
      "email" => "totallyreal@email.com",
      "school" => "WashU",
      "website" => "@Shahd",
    ),
    2 => array(
      "fellowId" => 2,
      "name" => "Michaela",
      "email" => "totallyreal@email.com",
      "school" => "WebsterU",
      "website" => "@Michaela",
    ),
    3 => array(
      "fellowId" => 3,
      "name" => "Eva",
      "email" => "totallyreal@email.com",
      "school" => "WashU",
      "website" => "@Eva",
    ),
  );
  return $fellows[$fellowId];
}
getFellow(0);
 ?>
