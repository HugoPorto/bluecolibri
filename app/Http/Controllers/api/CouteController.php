<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class CouteController extends Controller
{
    public function index(){}

    public function dolar(Client $client)
    {
        $value = null;
        $client = new Client();
        $crawler = $client->request('GET', 'https://dolarhoje.com/');
        $value = $crawler->filter('#nacional')->each(function ($node) {
            $dolar = $node->attr('value');
            return $dolar;
        });
        return ['dolar' => $value];
    }

    public function euro(Client $client)
    {
        $value = null;
        $client = new Client();
        $crawler = $client->request('GET', 'https://dolarhoje.com/euro-hoje/');
        $value = $crawler->filter('#nacional')->each(function ($node) {
            $euro = $node->attr('value');
            return $euro;
        });
        return ['euro' => $value];
    }

    public function bitcoin(Client $client)
    {
        $value = null;
        $client = new Client();
        $crawler = $client->request('GET', 'https://dolarhoje.com/bitcoin-hoje/');
        $value = $crawler->filter('#nacional')->each(function ($node) {
            $bitcoin = $node->attr('value');
            return $bitcoin;
        });
        return ['bitcoin' => $value];
    }

    public function ouro(Client $client)
    {
        $value = null;
        $client = new Client();
        $crawler = $client->request('GET', 'https://dolarhoje.com/ouro-hoje/');
        $value = $crawler->filter('#nacional')->each(function ($node) {
            $ouro = $node->attr('value');
            return $ouro;
        });
        return ['ouro' => $value];
    }

    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
