<?php
$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
$file = file_get_contents($url);
$data = json_decode($file, true);

    foreach ($data as $character) {  
        if($character['country'] == $body) {
          $city = $character['city'];
        }        
    }
header('Content-Type: text/xml');
?>

<Response>
    <Message>
           Capital of <?php echo $body ?> is <?php echo $city ?>
    </Message>
</Response>
