<?php
$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
$file = file_get_contents($url);
$data = json_decode($file, true);
    foreach ($data as $character) {  
        //$country = $character['country'];
        if($character['country'] == $body) {
          $city = $character['city'];
            $res = "Capital of $body is $city";
        }  
        else
            $res = "Enter a valid country name";
    }
header('Content-Type: text/xml');
?>

<Response>
    <Message>
            <?php echo $res ?>
    </Message>
</Response>