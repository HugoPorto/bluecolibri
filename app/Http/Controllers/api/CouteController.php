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

    public function allcoins(Client $client)
    {
        $client = new Client();
        $crawlerDolar = $client->request('GET', 'https://dolarhoje.com/');
        $crawlerEuro = $client->request('GET', 'https://dolarhoje.com/euro-hoje/');
        $crawlerBitcoin = $client->request('GET', 'https://dolarhoje.com/bitcoin-hoje/');
        $crawlerOuro = $client->request('GET', 'https://dolarhoje.com/ouro-hoje/');
        $crawlerDolarTurismo = $client->request('GET', 'https://dolarhoje.com/dolar-turismo/');
        $crawlerEuroTurismo = $client->request('GET', 'https://dolarhoje.com/euro-turismo/');
        $crawlerDolarAustraliano = $client->request('GET', 'https://dolarhoje.com/dolar-australiano-hoje/');
        $crawlerDolarCanadense = $client->request('GET', 'https://dolarhoje.com/dolar-canadense-hoje/');
        $crawlerDolarNeozelandes = $client->request('GET', 'https://dolarhoje.com/dolar-neozelandes-hoje/');
        $crawlerDolarSuico = $client->request('GET', 'https://dolarhoje.com/franco-suico-hoje/');
        $crawlerIene = $client->request('GET', 'https://dolarhoje.com/iene/');
        $crawlerLibra = $client->request('GET', 'https://dolarhoje.com/libra-hoje/');
        $crawlerNovoSol = $client->request('GET', 'https://dolarhoje.com/novo-sol-hoje/');
        $crawlerPesoArgentino = $client->request('GET', 'https://dolarhoje.com/peso-argentino/');
        $crawlerPesoChileno = $client->request('GET', 'https://dolarhoje.com/peso-chileno/');
        $crawlerPesoMexicano = $client->request('GET', 'https://dolarhoje.com/peso-mexicano-hoje/');
        $crawlerPesoUruguaio = $client->request('GET', 'https://dolarhoje.com/peso-uruguaio/');
        $crawlerRubloRusso = $client->request('GET', 'https://dolarhoje.com/rublo-russo-hoje/');
        $crawlerWonCoreanoHoje = $client->request('GET', 'https://dolarhoje.com/won-sul-coreano-hoje/');
        $crawlerYuanHoje = $client->request('GET', 'https://dolarhoje.com/yuan-hoje/');
        $crawlerAeternity = $client->request('GET', 'https://dolarhoje.com/aeternity-hoje/');
        $crawlerArk = $client->request('GET', 'https://dolarhoje.com/ark-hoje/');
        $crawlerBasicAttention = $client->request('GET', 'https://dolarhoje.com/basic-attention-token-hoje/');
        $crawlerBitcoinCashHoje = $client->request('GET', 'https://dolarhoje.com/bitcoin-cash-hoje/');
        $crawlerBitcoinDiamondHoje = $client->request('GET', 'https://dolarhoje.com/bitcoin-diamond-hoje/');
        $crawlerBitcoinGold = $client->request('GET', 'https://dolarhoje.com/bitcoin-gold-hoje/');
        $crawlerBitcoinSV = $client->request('GET', 'https://dolarhoje.com/bitcoin-sv-hoje/');
        $crawlerBitshares = $client->request('GET', 'https://dolarhoje.com/bitshares-hoje/');
        $crawlerBytecoin = $client->request('GET', 'https://dolarhoje.com/bytecoin-hoje/');
        $crawlerBytom = $client->request('GET', 'https://dolarhoje.com/bytom-hoje/');
        $crawlerCardano = $client->request('GET', 'https://dolarhoje.com/cardano-hoje/');
        $crawlerDash = $client->request('GET', 'https://dolarhoje.com/dash/');
        $crawlerDecred = $client->request('GET', 'https://dolarhoje.com/decred/');
        $crawlerDentacoin = $client->request('GET', 'https://dolarhoje.com/dentacoin-hoje/');
        $crawlerDigibyte = $client->request('GET', 'https://dolarhoje.com/digibyte-hoje/');
        $crawlerDogecoin = $client->request('GET', 'https://dolarhoje.com/dogecoin-hoje/');
        $crawlerElectroneum = $client->request('GET', 'https://dolarhoje.com/electroneum-hoje/');
        $crawlerEos = $client->request('GET', 'https://dolarhoje.com/eos-hoje/');
        $crawlerEthereum = $client->request('GET', 'https://dolarhoje.com/ethereum/');
        $crawlerEthereumClassic = $client->request('GET', 'https://dolarhoje.com/ethereum-classic-hoje/');
        $crawlerGolem = $client->request('GET', 'https://dolarhoje.com/golem-hoje/');
        $crawlerIcon = $client->request('GET', 'https://dolarhoje.com/icon-hoje/');
        $crawlerIota = $client->request('GET', 'https://dolarhoje.com/iota/');
        $crawlerKomodo = $client->request('GET', 'https://dolarhoje.com/komodo-hoje/');
        $crawlerLisk = $client->request('GET', 'https://dolarhoje.com/lisk/');
        $crawlerLitecoin = $client->request('GET', 'https://dolarhoje.com/litecoin/');
        $crawlerMonero = $client->request('GET', 'https://dolarhoje.com/monero/');
        $crawlerNano = $client->request('GET', 'https://dolarhoje.com/nano-hoje/');
        $crawlerNem = $client->request('GET', 'https://dolarhoje.com/nem/');
        $crawlerNeo = $client->request('GET', 'https://dolarhoje.com/neo/');
        $crawlerOmisego = $client->request('GET', 'https://dolarhoje.com/omisego/');
        $crawlerOntology = $client->request('GET', 'https://dolarhoje.com/ontology-hoje/');
        $crawlerPopulous = $client->request('GET', 'https://dolarhoje.com/populous-hoje/');
        $crawlerPundi = $client->request('GET', 'https://dolarhoje.com/pundi-x-hoje/');
        $crawlerQtum = $client->request('GET', 'https://dolarhoje.com/qtum-hoje/');
        $crawlerReddcoin = $client->request('GET', 'https://dolarhoje.com/reddcoin-hoje/');
        $crawlerRipple = $client->request('GET', 'https://dolarhoje.com/ripple-hoje/');
        $crawlerSalt = $client->request('GET', 'https://dolarhoje.com/salt-hoje/');
        $crawlerSiacoin = $client->request('GET', 'https://dolarhoje.com/siacoin-hoje/');
        $crawlerStatus = $client->request('GET', 'https://dolarhoje.com/status-hoje/');
        $crawlerSteem = $client->request('GET', 'https://dolarhoje.com/steem-hoje/');
        $crawlerStellar = $client->request('GET', 'https://dolarhoje.com/stellar-lumens-hoje/');
        $crawlerStratis = $client->request('GET', 'https://dolarhoje.com/stratis-hoje/');
        $crawlerTether = $client->request('GET', 'https://dolarhoje.com/tether-hoje/');
        $crawlerTezos = $client->request('GET', 'https://dolarhoje.com/tezos-hoje/');
        $crawlerTron = $client->request('GET', 'https://dolarhoje.com/tron-hoje/');
        $crawlerTrueusd = $client->request('GET', 'https://dolarhoje.com/trueusd-hoje/');
        $crawlerUSDCOIN = $client->request('GET', 'https://dolarhoje.com/usd-coin-hoje/');
        $crawlerVechain = $client->request('GET', 'https://dolarhoje.com/vechain-hoje/');
        $crawlerVerge = $client->request('GET', 'https://dolarhoje.com/verge-hoje/');
        $crawlerWanchain = $client->request('GET', 'https://dolarhoje.com/wanchain-hoje/');
        $crawlerWaves = $client->request('GET', 'https://dolarhoje.com/waves-hoje/');
        $crawlerZcash = $client->request('GET', 'https://dolarhoje.com/zcash/');
        $crawlerZilliqa = $client->request('GET', 'https://dolarhoje.com/zilliqa-hoje/');
        $crawler0x = $client->request('GET', 'https://dolarhoje.com/0x-hoje/');
        
        $dolar = $crawlerDolar->filter('#nacional')->each(function ($node) {
            $dolar = $node->attr('value');
            return $dolar;
        });
        
        $euro = $crawlerEuro->filter('#nacional')->each(function ($node){
            $euro = $node->attr('value');
            return $euro;
        });

        $bitcoin = $crawlerBitcoin->filter('#nacional')->each(function ($node){
            $bitcoin = $node->attr('value');
            return $bitcoin;
        });

        $ouro = $crawlerOuro->filter('#nacional')->each(function ($node){
            $ouro = $node->attr('value');
            return $ouro;
        });

        $dolarTurismo = $crawlerDolarTurismo->filter('#nacional')->each(function ($node){
            $dolarTurismo = $node->attr('value');
            return $dolarTurismo;
        });

        $euroTurismo = $crawlerEuroTurismo->filter('#nacional')->each(function ($node){
            $euroTurismo = $node->attr('value');
            return $euroTurismo;
        });

        $dolarAustraliano = $crawlerDolarAustraliano->filter('#nacional')->each(function ($node){
            $dolarAustraliano = $node->attr('value');
            return $dolarAustraliano;
        });

        $dolarCanadense = $crawlerDolarCanadense->filter('#nacional')->each(function ($node){
            $dolarCanadense = $node->attr('value');
            return $dolarCanadense;
        });

        $dolarNeozelandes = $crawlerDolarNeozelandes->filter('#nacional')->each(function ($node){
            $dolarNeozelandes = $node->attr('value');
            return $dolarNeozelandes;
        });

        $dolarSuico = $crawlerDolarSuico->filter('#nacional')->each(function ($node){
            $dolarSuico = $node->attr('value');
            return $dolarSuico;
        });

        $iene = $crawlerIene->filter('#estrangeiro')->each(function ($node){
            $iene = $node->attr('value');
            return $iene;
        });

        $libra = $crawlerLibra->filter('#nacional')->each(function ($node){
            $libra = $node->attr('value');
            return $libra;
        });

        $libra = $crawlerLibra->filter('#nacional')->each(function ($node){
            $libra = $node->attr('value');
            return $libra;
        });

        $novoSol = $crawlerNovoSol->filter('#nacional')->each(function ($node){
            $novoSol = $node->attr('value');
            return $novoSol;
        });

        $pesoChileno = $crawlerPesoChileno->filter('#estrangeiro')->each(function ($node){
            $pesoChileno = $node->attr('value');
            return $pesoChileno;
        });

        $pesoMexicano = $crawlerPesoMexicano->filter('#nacional')->each(function ($node){
            $pesoMexicano = $node->attr('value');
            return $pesoMexicano;
        });

        $pesoUruguaio = $crawlerPesoUruguaio->filter('#nacional')->each(function ($node){
            $pesoUruguaio = $node->attr('value');
            return $pesoUruguaio;
        });

        $rubloRusso = $crawlerRubloRusso->filter('#nacional')->each(function ($node){
            $rubloRusso = $node->attr('value');
            return $rubloRusso;
        });

        $wonCoreanoHoje = $crawlerWonCoreanoHoje->filter('#nacional')->each(function ($node){
            $wonCoreanoHoje = $node->attr('value');
            return $wonCoreanoHoje;
        });

        $yuanHoje = $crawlerYuanHoje->filter('#nacional')->each(function ($node){
            $yuanHoje = $node->attr('value');
            return $yuanHoje;
        });

        $aeternity = $crawlerAeternity->filter('#nacional')->each(function ($node){
            $aeternity = $node->attr('value');
            return $aeternity;
        });

        $ark = $crawlerArk->filter('#nacional')->each(function ($node){
            $ark = $node->attr('value');
            return $ark;
        });

        $basicAttention = $crawlerBasicAttention->filter('#nacional')->each(function ($node){
            $basicAttention = $node->attr('value');
            return $basicAttention;
        });

        $bitcoinCashHoje = $crawlerBitcoinCashHoje->filter('#nacional')->each(function ($node){
            $bitcoinCashHoje = $node->attr('value');
            return $bitcoinCashHoje;
        });

        $bitcoinDiamondHoje = $crawlerBitcoinDiamondHoje->filter('#nacional')->each(function ($node){
            $bitcoinDiamondHoje = $node->attr('value');
            return $bitcoinDiamondHoje;
        });

        $bitcoinGold = $crawlerBitcoinGold->filter('#nacional')->each(function ($node){
            $bitcoinGold = $node->attr('value');
            return $bitcoinGold;
        });

        $bitcoinSV = $crawlerBitcoinSV->filter('#nacional')->each(function ($node){
            $bitcoinSV = $node->attr('value');
            return $bitcoinSV;
        });

        $bitshares = $crawlerBitshares->filter('#nacional')->each(function ($node){
            $bitshares = $node->attr('value');
            return $bitshares;
        });

        $bytecoin = $crawlerBytecoin->filter('#nacional')->each(function ($node){
            $bitshares = $node->attr('value');
            return $bitshares;
        });

        $bytom = $crawlerBytom->filter('#nacional')->each(function ($node){
            $bytom = $node->attr('value');
            return $bytom;
        });

        $cardano = $crawlerCardano->filter('#nacional')->each(function ($node){
            $cardano = $node->attr('value');
            return $cardano;
        });

        $dash = $crawlerDash->filter('#nacional')->each(function ($node){
            $dash = $node->attr('value');
            return $dash;
        });

        $decred = $crawlerDecred->filter('#nacional')->each(function ($node){
            $decred = $node->attr('value');
            return $decred;
        });

        $dentacoin = $crawlerDentacoin->filter('#nacional')->each(function ($node){
            $dentacoin = $node->attr('value');
            return $dentacoin;
        });

        $digibyte = $crawlerDigibyte->filter('#nacional')->each(function ($node){
            $digibyte = $node->attr('value');
            return $digibyte;
        });

        $dogecoin = $crawlerDogecoin->filter('#nacional')->each(function ($node){
            $dogecoin = $node->attr('value');
            return $dogecoin;
        });

        $electroneum = $crawlerElectroneum->filter('#nacional')->each(function ($node){
            $electroneum = $node->attr('value');
            return $electroneum;
        });

        $eos = $crawlerEos->filter('#nacional')->each(function ($node){
            $eos = $node->attr('value');
            return $eos;
        });

        $ethereum = $crawlerEthereum->filter('#nacional')->each(function ($node){
            $ethereum = $node->attr('value');
            return $ethereum;
        });

        $ethereumClassic = $crawlerEthereumClassic->filter('#nacional')->each(function ($node){
            $ethereumClassic = $node->attr('value');
            return $ethereumClassic;
        });

        $golem = $crawlerGolem->filter('#nacional')->each(function ($node){
            $golem = $node->attr('value');
            return $golem;
        });

        $icon = $crawlerIcon->filter('#nacional')->each(function ($node){
            $icon = $node->attr('value');
            return $icon;
        });

        $iota = $crawlerIota->filter('#nacional')->each(function ($node){
            $iota = $node->attr('value');
            return $iota;
        });

        $komodo = $crawlerKomodo->filter('#nacional')->each(function ($node){
            $komodo = $node->attr('value');
            return $komodo;
        });

        $lisk = $crawlerLisk->filter('#nacional')->each(function ($node){
            $lisk = $node->attr('value');
            return $lisk;
        });

        $litecoin = $crawlerLitecoin->filter('#nacional')->each(function ($node){
            $litecoin = $node->attr('value');
            return $litecoin;
        });

        $monero = $crawlerMonero->filter('#nacional')->each(function ($node){
            $monero = $node->attr('value');
            return $monero;
        });

        $nano = $crawlerNano->filter('#nacional')->each(function ($node){
            $nano = $node->attr('value');
            return $nano;
        });

        $nem = $crawlerNem->filter('#nacional')->each(function ($node){
            $nem = $node->attr('value');
            return $nem;
        });

        $omisego = $crawlerOmisego->filter('#nacional')->each(function ($node){
            $omisego = $node->attr('value');
            return $omisego;
        });

        $ontology = $crawlerOntology->filter('#nacional')->each(function ($node){
            $ontology = $node->attr('value');
            return $ontology;
        });

        $populous = $crawlerPopulous->filter('#nacional')->each(function ($node){
            $populous = $node->attr('value');
            return $populous;
        });

        $pundi = $crawlerPundi->filter('#nacional')->each(function ($node){
            $pundi = $node->attr('value');
            return $pundi;
        });

        $qtum = $crawlerQtum->filter('#nacional')->each(function ($node){
            $qtum = $node->attr('value');
            return $qtum;
        });

        $reddcoin = $crawlerReddcoin->filter('#nacional')->each(function ($node){
            $reddcoin = $node->attr('value');
            return $reddcoin;
        });

        $ripple = $crawlerRipple->filter('#nacional')->each(function ($node){
            $ripple = $node->attr('value');
            return $ripple;
        });

        $salt = $crawlerSalt->filter('#nacional')->each(function ($node){
            $salt = $node->attr('value');
            return $salt;
        });

        $siacoin = $crawlerSiacoin->filter('#nacional')->each(function ($node){
            $siacoin = $node->attr('value');
            return $siacoin;
        });

        $status = $crawlerStatus->filter('#nacional')->each(function ($node){
            $status = $node->attr('value');
            return $status;
        });
        
        $steem = $crawlerSteem->filter('#nacional')->each(function ($node){
            $steem = $node->attr('value');
            return $steem;
        });

        $stellar = $crawlerStellar->filter('#nacional')->each(function ($node){
            $stellar = $node->attr('value');
            return $stellar;
        });

        $stratis = $crawlerStratis->filter('#nacional')->each(function ($node){
            $stratis = $node->attr('value');
            return $stratis;
        });

        $tether = $crawlerTether->filter('#nacional')->each(function ($node){
            $tether = $node->attr('value');
            return $tether;
        });
        
        $tezos = $crawlerTezos->filter('#nacional')->each(function ($node){
            $tezos = $node->attr('value');
            return $tezos;
        });

        $tron = $crawlerTron->filter('#nacional')->each(function ($node){
            $tron = $node->attr('value');
            return $tron;
        });

        $trueusd = $crawlerTrueusd->filter('#nacional')->each(function ($node){
            $trueusd = $node->attr('value');
            return $trueusd;
        });

        $usdcoin = $crawlerUSDCOIN->filter('#nacional')->each(function ($node){
            $usdcoin = $node->attr('value');
            return $usdcoin;
        });

        $vechain = $crawlerVechain->filter('#nacional')->each(function ($node){
            $vechain = $node->attr('value');
            return $vechain;
        });

        $verge = $crawlerVerge->filter('#nacional')->each(function ($node){
            $verge = $node->attr('value');
            return $verge;
        });

        $wanchain = $crawlerWanchain->filter('#nacional')->each(function ($node){
            $wanchain = $node->attr('value');
            return $wanchain;
        });

        $waves = $crawlerWaves->filter('#nacional')->each(function ($node){
            $waves = $node->attr('value');
            return $waves;
        });

        $zcash = $crawlerZcash->filter('#nacional')->each(function ($node){
            $zcash = $node->attr('value');
            return $zcash;
        });

        $zilliqa = $crawlerZilliqa->filter('#nacional')->each(function ($node){
            $zilliqa = $node->attr('value');
            return $zilliqa;
        });

        $ox = $crawler0x->filter('#nacional')->each(function ($node){
            $ox = $node->attr('value');
            return $ox;
        });

        $coins = [
            "dolar" => $dolar,
            "euro" => $euro,
            "bitcoin" => $bitcoin,
            "ouro" => $ouro,
            "dolarTurismo" => $dolarTurismo,
            "euroTurismo" => $euroTurismo,
            "dolarAustraliano" => $dolarAustraliano,
            "dolarCanadense" => $dolarCanadense,
            "dolarNeozelandes" => $dolarNeozelandes,
            "dolarSuico" => $dolarSuico,
            "iene" => $iene,
            "libra" => $libra,
            "novoSol" => $novoSol,
            "pesoChileno" => $pesoChileno,
            "pesoMexicano" => $pesoMexicano,
            "pesoUruguaio" => $pesoUruguaio,
            "rubloRusso" => $rubloRusso,
            "wonCoreanoHoje" => $wonCoreanoHoje,
            "yuanHoje" => $yuanHoje,
            "aeternity" => $aeternity,
            "ark" => $ark,
            "basicAttention" => $basicAttention,
            "bitcoinCashHoje" => $bitcoinCashHoje,
            "bitcoinDiamondHoje" => $bitcoinDiamondHoje,
            "bitcoinGold" => $bitcoinGold,
            "bitcoinSV" => $bitcoinSV,
            "bitshares" => $bitshares,
            "bytecoin" => $bytecoin,
            "bytom" => $bytom,
            "cardano" => $cardano,
            "dash" => $dash,
            "decred" => $decred,
            "dentacoin" => $dentacoin,
            "digibyte" => $digibyte,
            "dogecoin" => $dogecoin,
            "electroneum" => $electroneum,
            "eos" => $eos,
            "ethereum" => $ethereum,
            "ethereumClassic" => $ethereumClassic,
            "golem" => $golem,
            "icon" => $icon,
            "iota" => $iota,
            "komodo" => $komodo,
            "lisk" => $lisk,
            "litecoin" => $litecoin,
            "monero" => $monero,
            "nano" => $nano,
            "nem" => $nem,
            "omisego" => $omisego,
            "ontology" => $ontology,
            "populous" => $populous,
            "pundi" => $pundi,
            "qtum" => $qtum,
            "reddcoin" => $reddcoin,
            "ripple" => $ripple,
            "salt" => $salt,
            "siacoin" => $siacoin,
            "status" => $status,
            "steem" => $steem,
            "stellar" => $stellar,
            "stratis" => $stratis,
            "tether" => $tether,
            "tezos" => $tezos,
            "tron" => $tron,
            "trueusd" => $trueusd,
            "usdcoin" => $usdcoin,
            "vechain" => $vechain,
            "verge" => $verge,
            "wanchain" => $wanchain,
            "waves" => $waves,
            "zcash" => $zcash,
            "zilliqa" => $zilliqa,
            "ox" => $ox,
        ];
        return ['coins' => $coins];
    }
    
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
