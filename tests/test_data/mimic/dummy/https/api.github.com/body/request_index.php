<?php
return array (
  0 => array(
    'method' => 'POST',
    'headers' => array(
      'accept' => 'application/json',
      'content-type' => 'application/json',
	  'content-length' => new Mimic_Request_Wildcard_Require,
    ),
    'query' => array(),
    'response' => array(
      'status' => 201,
      'headers' => array(),
      'body_file' => NULL,
    ),
  ),
  1 => array(
    'method' => 'POST',
    'headers' => array(
      'accept' => 'application/json',
      'content-type' => 'text/html',
	  'content-length' => new Mimic_Request_Wildcard_Require,
    ),
    'query' => array(),
    'response' => array(
      'status' => 201,
      'headers' => array(),
      'body_file' => NULL,
    ),
  ),
  2 => array(
    'method' => 'GET',
    'headers' => array(
      'accept' => 'application/dummy.content',
      'content-type' => 'application/json',
	  'content-length' => new Mimic_Request_Wildcard_Require,
    ),
    'query' => array(),
    'response' => array(
      'status' => 200,
      'headers' => array(),
      'body_file' => NULL,
    ),
  ),
);