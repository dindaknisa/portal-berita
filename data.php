<?php
  //link akses data api
  $req="https://news.google.com/rss?hl=id&gl=ID&ceid=ID:id";

  //mengambil isi konten
  $temp=file_get_contents($req);

  //menjadikan format xml string
  $xml=simplexml_load_string($temp);

?>