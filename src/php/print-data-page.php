<?php
$jsonFile = "../data/data.json";
$jsonFileContent = file_get_contents($jsonFile);

// var_dump($jsonFileContent);

$jsonContentDecode = json_decode($jsonFileContent, true);

function printPage()
{
  global $jsonContentDecode;
  $getTitle = $_GET['title'];
  foreach ($jsonContentDecode as $project) {
    if ($project['title'] == $getTitle) {
      $title = str_replace('-', ' ', $project['title']);
      echo '<h3>' . $title . '</h3>
      <div>
        <span>
          <img src="/assets/img/portfolio/' . $project['mainImg'] . '" alt="" />
          <p>' . $project['subtitle'] . '</p>
          <a href="'.$project['link'].'" target="_blank">link&nbsp;to&nbsp;work&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </span>
        <span>
          <p>' . $project['text'] . '</p>
        </span>
      </div>
      <div class="galery">';
      foreach ($project['imgTab'] as $img) {
        echo '<img src="/assets/img/portfolio/' . $img . '" alt="" class="card" />';
      }
      echo '</div>';
    }
  }
}
