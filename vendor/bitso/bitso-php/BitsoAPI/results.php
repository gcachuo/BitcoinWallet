<?php
namespace BitsoAPI;

include('bitso.php');


class results
{
	
	// your api credentials
	const key = '';
	const secret = '';

	public function processResults(){

		$a =0;
		$b = 0;
		$c=0;
		$d=0;
		$e=0;
		$f=0;
		$g=0;
		$h=0;
		$i=0;
		$j=0;
		$k=0;
		$l=0;
		$m=0;
		$n=0;
		$o=0;
		$p=0;


		$bitsoPublic = new bitso("https://dev.bitso.com/api/v3");
		$bitso = new bitso(self::key, self::secret,"https://dev.bitso.com/api/v3");

		$order_book = $bitsoPublic->order_book(array('book'=>'btc_mxn','aggregate' => 'True'));

		$ticker = $bitsoPublic->ticker(array('book'=>'btc_mxn'));
		$trades = $bitsoPublic->trades(['book'=>'btc_mxn', 'limit' => '2']);
		$available_books = $bitsoPublic->available_books();
		$account_status = $bitso->account_status();
		$balances = $bitso->balances();
		$fees = $bitso->fees();
		$ledger = $bitso->ledger(array('limit'=>'10'));
		$withdrawals = $bitso->withdrawals(array('limit'=>'10'));
		$fundings = $bitso->fundings(array('limit'=>'1'));
		$user_trades = $bitso->user_trades(array('book'=>'btc_mxn'));
		$open_orders = $bitso->open_orders(array('book'=>'btc_mxn'));
		$place_order = $bitso->place_order(array('book'  => 'btc_mxn',
		                              'side'  => 'buy',
		                              'major' => '.01',
		                              'price' => '1000',
		                              'type'  => 'limit'));
		$id = $place_order->payload->oid; 
		$lookup_order = $bitso->lookup_order(array($id));

		#NEED TO IMPLEMENT ALL
		$cancel_order =  $bitso->cancel_order(array($id,$id,$id));

		$funding_destination = $bitso->funding_destination(array('fund_currency'=>'eth'));




		// $btc_withdrawal = $bitso->btc_withdrawal(array('amount'  => '.05',
		//                               'address'  => ''));

		// $eth_withdrawal = $bitso->eth_withdrawal(array('amount'  => '.05',
		//                               'address'  => ''));

		// $ripple_withdrawal = $bitso->ripple_withdrawal(array('currency'=>'MXN','amount'  => '.05','address'  => ''));

		// $spei_withdrawal = $bitso->spei_withdrawal(array('amount'  => '105',
		//                               'recipient_given_names'  => 'Andre Pierre','recipient_family_names'=>'Gignac', 'clabe'=>'CLABE','notes_ref'=>'NOTESREF','numeric_ref'=>'NUMREF'));


		if ($ticker->success==1){
			$a = 1;
		}
		if ($order_book->success==1){
			$b = 1;
		}
		if ($trades->success==1){
			$c = 1;
		}
		if ($available_books->success==1){
			$d = 1;
		}
		if ($account_status->success==1){
			$e = 1;
		}
		if ($balances->success==1){
			$f = 1;
		}
		if ($fees->success==1){
			$g = 1;
		}
		if ($ledger->success==1){
			$h = 1;
		}
		if ($withdrawals->success==1){
			$i = 1;
		}
		if ($fundings->success==1){
			$j = 1;
		}
		if ($user_trades->success==1){
			$k = 1;
		}
		if ($open_orders->success==1){
			$l = 1;
		}
		if ($place_order->success==1){
			$m = 1;
		}
		if ($lookup_order->success==1){
			$n = 1;
		}
		if ($cancel_order->success==1){
			$o = 1;
		}
		if ($funding_destination->success==1){
			$p = 1;
		}

		if(($a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p) == 16){
			return 1;
		}

	}
}
