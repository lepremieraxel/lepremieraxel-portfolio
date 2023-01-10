<?php
$jsonFile = "../data/data.json";
$jsonFileContent = file_get_contents($jsonFile);

// var_dump($jsonFileContent);

$jsonContentDecode = json_decode($jsonFileContent, true);

function printPage(){
  global $jsonContentDecode;
  $getId = $_GET['id'];
  foreach ($jsonContentDecode as $project) {
    if($project['id'] == $getId){
      echo '<h3>'.$project['title'].'</h3>
      <div>
        <span>
          <img src="/assets/img/portfolio/'.$project['mainImg'].'" alt="" />
          <p>'.$project['subtitle'].'</p>
        </span>
        <span>
          <p>'.$project['text'].'</p>
        </span>
      </div>
      <div class="galery">';
      foreach ($project['imgTab'] as $img) {
        echo '<img src="/assets/img/portfolio/'.$img.'" alt="" class="card" />';
      }
      echo '</div>';
    }
  }
}

