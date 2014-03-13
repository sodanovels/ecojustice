<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "10395532-uffwmow11R7Tb1Hllw4jAkANc1UUUGgY3BMTVJ7Kv",
    'oauth_access_token_secret' => "op5jHisqG8la43FbrvuHr7q0PwtrkOHZpgrgKmVp4dFb6",
    'consumer_key' => "F1iSNyXeV1Uetxz6brWzA",
    'consumer_secret' => "AlUMk6kGkDsYAqLu0nLHJT0ZavB2zX93ER4cJzuBc"
);

///** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
//$url = 'https://api.twitter.com/1.1/blocks/create.json';
//$requestMethod = 'POST';
//
///** POST fields required by the URL above. See relevant docs as above **/
//$postfields = array(
//    'screen_name' => 'usernameToBlock', 
//    'skip_status' => '1'
//);
//
///** Perform a POST request and echo the response **/
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->buildOauth($url, $requestMethod)
//             ->setPostfields($postfields)
//             ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=ecojustice_ca&count=2';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
           
?>