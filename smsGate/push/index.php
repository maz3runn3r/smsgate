<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ian Moone</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link type="text/css" rel="stylesheet" href="/YouknowWho/push/css/newCascadeStyleSheet.css">
        <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
    </head>
    <body>


        <div class="dc_clean_comment">
            <h3>Who is Ian Moone?</h3>
            <div class="avatar_box"> <img src="http://cdn.dcodes.net/p/52x52" alt="Avatar" class="avatar" />
                <!--<p class="username">Joe Blogs</p>-->
            </div>
            <div class="comment_box fr">
                <p class="comment_paragraph" contenteditable="true">You, me and all the other users who treasure their privacy. Hi Ian!</p>
                <!--<a href="#" class="reply">Reply</a> <span class="date">1st January 2020</span> </div>-->
                <div class="dc_clear"></div>
            </div>
        </div>

        <div class="dc_clean_comment">
            </br></br></br><h3>How does it work?</h3>
            <div class="avatar_box"> <img src="http://cdn.dcodes.net/p/52x52" alt="Avatar" class="avatar" />
                <!--<p class="username">Joe Blogs</p>-->
            </div>
            <div class="comment_box fr">
                <p class="comment_paragraph" contenteditable="true">Simple! Sms messaging without disclosing your location or number.</p>
                <!--<a href="#" class="reply">Reply</a> <span class="date">1st January 2020</span> </div>-->
                <div class="dc_clear"></div>
            </div>
        </div>





        <?php

        use SMSApi\Client;
        use SMSApi\Api\SmsFactory;

//use SMSApi\Exception\SmsapiException;

        require_once '../smsapi/autoload.php';

        $client = new Client('it.avdelning@outlook.com');
        $client->setPasswordHash('06cbd61b53eec3f549f08dbf733f9532');

        $smsapi = new SmsFactory;
        $smsapi->setClient($client);

        /* try {
          $actionSend = $smsapi->actionSend();

          $actionSend->setTo('46739471711');
          $actionSend->setText('Welcome to OnlineSallad.nu');
          $actionSend->setSender('Info');

          $response = $actionSend->execute();

          foreach ($response->getList() as $status) {
          echo $status->getNumber() . ' ' . $status->getPoints() . ' ' . $status->getStatus();
          }
          } catch (SmsapiException $exception) {
          echo 'ERROR: ' . $exception->getMessage();
          } */
        ?>

    </body>
</html>
