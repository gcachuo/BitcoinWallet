<?php

namespace Controller;

use Controller;
use Model\Usuarios_Transacciones;
use System;

class Trades extends Controller
{
    public function __construct()
    {
        parent::__construct([
            'GET' => [
                'data' => 'getTrades'
            ]
        ]);
    }

    protected function getTrades()
    {
        System::check_value_empty($_GET, ['coin']);

        $Usuarios_Transacciones = new Usuarios_Transacciones();
        $trades = $Usuarios_Transacciones->selectTrades(1, $_GET['coin']);

        array_walk($trades, function (&$trade) {
            if (!$trade['price'] || $trade['price'] <= 0) {
                $trade = null;
            }
            $trade = [
                'date' => date('Y-m-d H:i', strtotime($trade['date'])),
                'value' => $trade['price']
            ];
        });

        $trades = array_filter($trades);

        return compact('trades');
    }
}
