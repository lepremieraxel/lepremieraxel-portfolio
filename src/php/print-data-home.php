<?php
$jsonFile = "src/data/data.json";
$jsonFileContent = file_get_contents($jsonFile);

// var_dump($jsonFileContent);

$jsonContentDecode = json_decode($jsonFileContent, true);

function printHome(){
  global $jsonContentDecode;
  foreach ($jsonContentDecode as $project) {
    echo '<a href="/src/page/page.php?id='.$project['id'].'" class="card">
    <p>'.$project['title'].'</p>
    <img src="/assets/img/portfolio/'.$project['mainImg'].'" alt="">
  </a>';
  }
}

