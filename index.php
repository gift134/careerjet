<?php

require_once "Careerjet_API.php" ;

$locale = $_GET["locale"];

$keywords = $_GET["keywords"];

$location = $_GET["location"];

$page = $_GET["page"];

$affid = $_GET["affid"];




function jobs_search(){
	$api = new Careerjet_API($locale) ;

$result = $api->search(array(
  'keywords' => $keywords,
  'location' => $location,
  'page' => $page,
  'affid' => $affid,
));

error_reporting(E_ALL);

ini_set("display_errors", 1);

header('Content-Type: application/json; charset=utf-8');

return json_encode($result, JSON_PRETTY_PRINT);

}

echo  jobs_search();

?>
