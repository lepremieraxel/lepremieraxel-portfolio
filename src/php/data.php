<?php



// var_dump($jsonContentDecode);

foreach ($jsonContentDecode as $value) {
  // var_dump($value);
  $id = $value['id'];
  $title = $value['title'];
  $subtitle = $value['subtitle'];
  $text = $value['text'];
  $mainImg = $value['mainImg'];
  $imgTab = $value['imgTab'];
  // var_dump($imgTab);
}
