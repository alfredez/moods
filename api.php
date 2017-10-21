
<?php




$Authorization = "?Authorization=QmVhcmVyIFJIaXpTWGFFenJpeEtiT1ZoVWNFaEZERzZGRjhsa3g4NFRNSWJ2QkY";


//Welcome to our API. The documentation is available on https://developers.musimap.net
$json = file_get_contents('https://api.musimap.net/'.$Authorization);
//$json = file_get_contents('https://api.musimap.net/albums/search?name=Homework'.$Authorization.'');

$data = json_decode($json,true);


echo "<pre>";

print_r($data);
?>
