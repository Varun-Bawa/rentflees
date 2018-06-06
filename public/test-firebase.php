<?php

use Firebase\Firebase;

$fb = Firebase::initialize('https://bullionguru-1287.firebaseio.com', 'voQLfJMsAKqkzLrgjL4L5asGCeDw7gFL2XovrJTB');

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => 'https://bullionguru-1287.firebaseio.com', 'token' => 'voQLfJMsAKqkzLrgjL4L5asGCeDw7gFL2XovrJTB' ], new GuzzleHttp\Client());

//retrieve a node
$nodeGetContent = $fb->get('/rentflees');

return $nodeGetContent;
/*
//set the content of a node
$nodeSetContent = $fb->set('/node/path', array('data' => 'toset'));

//update the content of a node
$nodeUpdateContent = $fb->update('/node/path', array('data' => 'toupdate'));

//delete a node
$nodeDeleteContent = $fb->delete('/node/path');

//push a new item to a node
$nodePushContent = $fb->push('/node/path', array('name' => 'item on list'));
*/
?>