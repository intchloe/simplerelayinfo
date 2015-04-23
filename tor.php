<?php

$url='https://onionoo.torproject.org/details?search=' . htmlspecialchars($_GET['s']);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);
$obj = (json_decode($result));
foreach ($obj->relays AS $relay) printf("%s - IP: %s | Country: %s | Name: %s | flags: %s | Consensus Weight: %s </br>", $relay->fingerprint, $relay->host_name, $relay->country_name, $relay->nickname, implode(',', $relay->flags), $relay->consensus_weight) . "
\n";

?>
