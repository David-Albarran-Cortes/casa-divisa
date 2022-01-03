<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use SebastianBergmann\Environment\Console;
use Symfony\Component\HttpFoundation\AcceptHeader;
use Livewire\WithPagination;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

use function PHPSTORM_META\map;

class CryptoController extends Component
{
    use WithPagination;

    public  $coin;
    public  $search;
    public $open_modal = false;
    public $viewcoin;

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function coinview($coin)
    {
        $this->open_modal = true;
        $this->coin = $coin;
        $view = Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $infoview =$view->object();
       
        
   
        $this->viewcoin  = $infoview; 
        
    }





    public function render()
    {
        $respuesta = Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $coins = $respuesta->object();
        /*  $coins['0'];  */


        return view('livewire.crypto-controller', compact('coins'));
    }
}
