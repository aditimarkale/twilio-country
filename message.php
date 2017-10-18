<?php
$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-capital-city.json';
$file = file_get_contents($url);
$data = json_decode($file, true);

    foreach ($data as $character) {  
        if($character['country'] == $body) {
          $city = $character['city'];        
            echo "<Response>
    <Message>
           Capital of " . $body . " is " . $city . "
    </Message>
</Response>
";
            break;
        }  
        else {
            "<Response>
    <Message>
           Please enter valid country name
    </Message>
</Response>
";
        }
    }
header('Content-Type: text/xml');
?>
