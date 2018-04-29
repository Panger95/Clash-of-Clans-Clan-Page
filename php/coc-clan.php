<?php
  ####################################################################
  # EDIT CLASH OF CLANS TOKEN
  # ------------------------------------------------------------------
  # Get your API key from the following website.
  # https://developer.clashofclans.com/
  ####################################################################
  $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImYxN2MyNzVjLTM2ZDAtNGJlMy1hNjdmLTQ0OTA2NzEyNWZkNCIsImlhdCI6MTUyNDk2NjA4NCwic3ViIjoiZGV2ZWxvcGVyL2ZkZTJhYzA0LTFiNDItYjliNy0zZDg1LWQ4NDdkODNhNjFmNCIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjIwNC4yMzIuMTc1Ljc4Il0sInR5cGUiOiJjbGllbnQifV19.TXmtIiLTJAXN42VzKJrUjhaBttuBpFWgBhCgv-b6te5I3EEty914ODM0NdOD_U_g2Za_nabT3KBbcPHMz1r6rQ";

  ####################################################################
  # EDIT CLASH OF CLANS CLAN TAG
  # ------------------------------------------------------------------
  # Input your Clan tag #, don't forget the # sign.
  ####################################################################
  $clantag = "#QQVJ9GUL";


  ####################################################################
  # DO NOT MODIFY ANYTHING BELOW THIS COMMENT
  ####################################################################
  $playertag = $_GET['player'];


  header('Content-Type: text/html; charset=UTF-8');

  if ($playertag) {
    $url = "https://api.clashofclans.com/v1/players/" . urlencode($playertag);
  } else {
    $url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);
  }

  $ch = curl_init($url);

  $headr = array();
  $headr[] = "Accept: application/json";
  $headr[] = "Authorization: Bearer ".$token;

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $res = curl_exec($ch);
  echo json_encode(json_decode($res, true), JSON_PRETTY_PRINT);
  curl_close($ch);

?>
