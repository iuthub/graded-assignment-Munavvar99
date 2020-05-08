<?php

namespace App\Custom;

class ExchangeRate {
    //This function is disabled temporarily to save api resources!
    public static function getRates()
    {
        //Reference: ReadTheDocs, link: https://guzzle.readthedocs.io/en/latest/
        //$client = new \GuzzleHttp\Client();
        //$res = $client->request('GET','http://data.fixer.io/api/latest?access_key=afd6c48270d18d80d6740d5fc77c4b1c&format=1');
        //$body = json_decode($res->getBody()->getContents());
        //$uzs = round(($body->rates->UZS)/($body->rates->USD),2);
        $uzs = 8450.0;
        return $uzs;
    }

}
