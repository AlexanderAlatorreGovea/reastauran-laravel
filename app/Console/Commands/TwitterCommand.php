<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class TwitterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new Client();

        // $client = new Client(HttpClient::create(
        //     [
        //         'timeout' => 60
        //         ]
        //     )
        // );
        //css-901oao r-hkyrab r-1qd0xha r-a023e6 r-16dba41 r-ad9z0x r-bcqeeo r-bnwqim r-qvutc0
        //css-901oao r-hkyrab r-1qd0xha r-a023e6 r-16dba41 r-ad9z0x r-bcqeeo r-bnwqim r-qvutc0
        $crawler = $client->request('GET', 'https://billysrestaurant.herokuapp.com/');
        $inlineStyles = 'css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0';
        //$contact = $crawler->filter(selector:"[class='$inlineStyles']")->first();
        //$contact = $crawler->filter(selector:"[style='$inlineStyles']")->first();
        $contact = $crawler->filter('.circle-right');
        dd($contact->html());

        $crawler->filter('.css-901oao.css-16my406.r-1qd0xha.r-ad9z0x.r-bcqeeo.r-qvutc0')->each(function ($node) {
            print $node->text()."\n";
        });

    }
}
