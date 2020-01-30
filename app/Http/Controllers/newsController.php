<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class newsController extends Controller
{
    public function news()
    {
       $url = 'https://news.bd24report.com/bn/?cat=21';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $international = $crawler->filter('.td-block-span6  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $images = $node->filter('img')->attr('src');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


       $url = 'https://news.bd24report.com/bn/?cat=20';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $national = $crawler->filter('.tdb_module_loop  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('h3')->text();
            $images = $node->filter('span')->attr('data-img-url');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


//সর্বশেষ
       $url = 'https://enews.bd24report.com/category/ভিন্ন-খবর';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $latest = $crawler->filter('.td-module-thumb')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $link = $node->filter('a')->attr('href');

            $item= [
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


        //আন্তর্জাতিক
       $url = 'https://news.bd24report.com/bn/?cat=24';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $international_all = $crawler->filter('.tdb_module_loop  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('h3')->text();
            $images = $node->filter('span')->attr('data-img-url');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



//     অনন্য
       $url = 'https://news.bd24report.com/bn/?cat=19';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
       $other = $crawler->filter('.tdb_module_loop  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('h3')->text();
            $images = $node->filter('span')->attr('data-img-url');
            $link = $node->filter('a')->attr('href');

            $item= [
              'text' => $text,
              'link' => $link,
            ];

            return $item;

        });


//       dd($other);




//        খেলাধূলা
        $url = 'https://news.bd24report.com/post/category/খেলাধুলা/';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $sports = $crawler->filter('.td-block-span6  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $images = $node->filter('img')->attr('src');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



        //        এক্সক্লুসিভ
        $url = 'https://news.bd24report.com/bn/?cat=34';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $exclusive = $crawler->filter('.td-block-span6  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $images = $node->filter('img')->attr('src');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



        //        বিনোদন
        $url = 'https://news.bd24report.com/bn/?cat=23';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $intertainment = $crawler->filter('.td-block-span6  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $images = $node->filter('img')->attr('src');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


        //       লাইফ স্টাইল
        $url = 'https://news.bd24report.com/bn/?cat=25';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $lifestyle = $crawler->filter('.tdb_module_loop  > div')->each(function (Crawler $node, $i)       {
            $text = $node->filter('h3')->text();
            $images = $node->filter('span')->attr('data-img-url');
            $link = $node->filter('a')->attr('href');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


        //        বিনোস্বাস্থ্য
        $url = 'https://enews.bd24report.com/category/স্বাস্থ্য/';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $health = $crawler->filter('.td_module_10')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $link = $node->filter('a')->attr('href');
            $images = $node->filter('img')->attr('src');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



        //        বিশেষ প্রতিবেদন
        $url = 'https://enews.bd24report.com/category/বিশেষ-প্রতিবেদন/';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $special_report = $crawler->filter('.td_module_10')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $link = $node->filter('a')->attr('href');
            $images = $node->filter('img')->attr('src');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });


        //        বরাজনীতি
       $url = 'https://enews.bd24report.com/category/রাজনীতি/';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $politics = $crawler->filter('.td_module_10')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $link = $node->filter('a')->attr('href');
            $images = $node->filter('img')->attr('src');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



        //        ভিন্ন খবর
       $url = 'https://enews.bd24report.com/category/ভিন্ন-খবর/';
       $client = new Client();
       $response = $client->request('GET', $url);
       $response_status_code = $response->getStatusCode();
       $html = ''.$response->getBody();

       $crawler = new Crawler($html);
        $different_news = $crawler->filter('.td_module_10')->each(function (Crawler $node, $i)       {
            $text = $node->filter('a')->attr('title');
            $link = $node->filter('a')->attr('href');
            $images = $node->filter('img')->attr('src');

            $item= [
              'image' => $images,
              'text' => $text,
              'link' => $link,
            ];

            return $item;
        });



//        $date = new BnDateTime('now', new DateTimeZone('Asia/Dhaka'));
//
//        $date->format('l jS F Y b');
//
        $date = bangla_date(time(),"en");


        return view('newsportal.home',compact('international','national','latest','international_all','other','sports','exclusive','intertainment','health','special_report','date','politics','different_news','lifestyle'));
    }
}
