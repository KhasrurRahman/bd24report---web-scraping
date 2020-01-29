<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class scrapecontroller extends Controller
{
    public function scrape()
    {
       $url = 'https://news.bd24report.com/bn/?cat=21';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();

       $html = ''.$response->getBody();


       $crawler = new Crawler($html);
        $items = $crawler->filter('.td-block-span6  > div')->each(function (Crawler $node, $i)       {
            $text = $node->text();
            $images = $node->filter('img')->attr('src');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
                'link' => $link,
            ];

            return $item;
        });

        foreach ( $items as $data){
            echo '<img src="'.$data['image'].'"/>';
            echo '<p>'.$data['text'].'</p>';
            echo $data['link'];
        }

    }


}
