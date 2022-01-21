<?php
  function getSiteOG( $url, $specificTags=0 ){
  
      $doc = new DOMDocument();
  
      @$doc->loadHTML(file_get_contents($url));
  
      $res['title'] = $doc->getElementsByTagName('title')->item(0)->nodeValue;
  
      foreach ($doc->getElementsByTagName('meta') as $m){
          $tag = $m->getAttribute('name') ?: $m->getAttribute('property');
          if(in_array($tag,['description','keywords']) || strpos($tag,'og:')===0) $res[str_replace('og:','',$tag)] = $m->getAttribute('content');
      }
      echo $specificTags ? array_push( $res, $specificTags) : $res['image'];
  
  }
  
  ?>