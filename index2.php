<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>


      <?php

          $client = new SoapClient("http://api-b2b.pwrs.ru/WCF/ClientService.svc?wsdl");
          $params =  array
          (
              'login' => 'sa15432',
              'password' => 'F3yIq!Cs5f',
          );
          $answer = $client->GetMarkaAvto($params);
          print_r($answer);



          $client = new SoapClient("http://api-b2b.pwrs.ru/WCF/ClientService.svc?wsdl");
          $params =  array
          (
              'login' => 'sa15432',
              'password' => 'F3yIq!Cs5f',
  	        'marka' => 'Renault'
          );
          $answer = $client->GetModelAvto($params);
          print_r($answer);



          $client = new SoapClient("http://api-b2b.pwrs.ru/WCF/ClientService.svc?wsdl");
          $params =  array
          (
              'login' => 'sa15432',
              'password' => 'F3yIq!Cs5f',
              'marka' => 'Renault',
              'model' => 'Logan'
          );
          $answer = $client->GetYearAvto($params);
          print_r($answer);



          $client = new SoapClient("http://api-b2b.pwrs.ru/WCF/ClientService.svc?wsdl");
          $params =  array
          (
              'login' => 'sa15432',
              'password' => 'F3yIq!Cs5f',
              'marka' => 'Renault',
              'marka' => 'Ford',
              'model' => 'Focus',
              'year_beg' => 2011,
              'year_end' => 0
          );
          $answer = $client->GetModificationAvto($params);
          print_r($answer);



          $client = new SoapClient("http://api-b2b.pwrs.ru/WCF/ClientService.svc?wsdl");
          $params =  array
          (
              'login' => 'sa15432',
              'password' => 'F3yIq!Cs5f',
              'filter' => array(
                  'marka' => 'Renault',
                  'model' => 'Logan',
                  'modification' => '1.4i',
                  'year_beg' => '2004',
                  'year_end' => '2009',
                  'podbor_type' => array(0 => 1),
                  'type' => array(0 => 'disk'),
              ),
          );

          $answer = $client->GetGoodsByCar($params);
          print_r($answer);


      ?>


</body>
</html>
