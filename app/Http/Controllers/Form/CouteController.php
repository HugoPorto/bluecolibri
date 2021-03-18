<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class CouteController extends Controller
{
    public function index()
    {
        //
    }

    public function dolar(Client $client)
    {
        // $crawler = $client->request('GET', 'https://dolarhoje.com/');
        // $data = 'nacional';
        // $dl = $crawler->filter("[id='$data']")->first();
        // dd($dl->html());
        $client = new Client();
        $crawler = $client->request('GET', 'https://dolarhoje.com/');
        $crawler->filter('#nacional')->each(function ($node) {
            $dolar = $node->attr('value');
            echo $dolar;
        });
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
