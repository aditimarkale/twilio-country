<?php
  require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
    $auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
    $client = new Client($account_sid, $auth_token); 
 
 /*   $messages = $client->messages->("+12678108571" /*to number*/, array( 
        //'From' => "+12674407881",  //from number
        //'Body' => "",      //message
 // ));    */  
     
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
        Hello <?php echo $number ?>.
        You said <?php echo $city ?>
    </Message>
</Response>
?>