<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;

class CouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $crawler = $client->request('GET', 'http://dolarhoje.com/');
        $crawler->filter('#nacional')->each(function ($node) {
            $dolar = $node->attr('value');
            $arr = array('dolar' => $dolar);
            echo json_encode($arr);

            // $value = $node->extract(array('value'));
            // var_dump($value[0]);
        });

        return ['status' => true];

      
    }
    // public function dolar(Client $client)
    // {
    //     // $crawler = $client->request('GET', 'https://dolarhoje.com/');
    //     // $data = 'nacional';
    //     // $dl = $crawler->filter("[id='$data']")->first();
    //     // dd($dl->html());
    //     $client = new Client();
    //     $crawler = $client->request('GET', 'https://dolarhoje.com/');
    //     $crawler->filter('#nacional')->each(function ($node) {
    //         $dolar = $node->attr('value');
    //         $arr = array('dolar' => $dolar);
    //         echo json_encode($arr);

    //         // $value = $node->extract(array('value'));
    //         // var_dump($value[0]);
    //     });

    //     // return ['status' => true];

      
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
