<?php

$aContext = array(
    'http' => array(
        'proxy' => 'proxy:8080',
        'request_fulluri' => true,
    ),
);
$cxContext = stream_context_create($aContext);

$sFile = file_get_contents("https://api.brawlstars.com/v1/players/%23LGYRGV8J0", False, $cxContext);

echo $sFile;

?>