<?php

define('BASE_URL','http://localhost/');


function url($path = ''){
  return BASE_URL.$path;
}

define('HOST',$_SERVER['SERVER_NAME']);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

$currentUrl = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$prevPage = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] == $_SERVER['SERVER_NAME'].'/'? BASE_URL : $_SERVER['HTTP_REFERER'];

$content = '';

$exceptDir = [
  'phpMyAdmin',
  'assets'
];

$data = [];
$content .= '<div class="list-group list-group-flush p-0 m-0" style="max-height: 285px;overflow-y: auto;scroll-behavior: smooth;">';
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        $dir = explode('.',$entry);
        if(!isset($dir[1]) && !in_array($entry,$exceptDir)){
          $entryName = preg_replace("/[_-]/",' ',$entry);
          if($_SERVER['SERVER_NAME'] == 'localhost'){
            $content .= '<a href="https://'.$entry.'.dev" class="list-group-item text-capitalize border-0 mb-2 fw-semibold bg-transparent text-dark">'.$entryName.'</a>';
          }else{
            $content .= '<a href="https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].$entry.'" class="list-group-item text-capitalize border-0 mb-2 fw-semibold bg-transparent text-dark">'.$entryName.'</a>';
          }
        }            
    }
    closedir($handle);
  }
$content .= '</div>';