<?php
$dataUrl = file_get_contents("https://api.instagram.com/v1/users/203110951/media/recent/?access_token=203110951.d29b6ba.925b18d2ec2742a882137218575510f0");
file_put_contents("ig.json", $dataUrl);
?>