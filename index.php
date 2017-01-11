<?php
/**
 * Created by PhpStorm.
 * User: Memo
 * Date: 11/ene/2017
 * Time: 03:58 PM
 */
$key = "SUqaCnPIQu";
$nonce = round(microtime(true) * 1000);
$bitsoClientId = "131376";
$message = $nonce . $bitsoClientId . $key;
$secret = "48792544eec665a1f3f5cd84ec2c7fcb";
$signature = hash_hmac('sha256', $message, $secret);
#$fee = "195.08851643595063383254730541086";
#$fee = "194.16117033561831732530385687557";
?>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script>
    $(function () {
        $.get("https://api.bitso.com/v2/ticker", function (get) {
            $("#ask").html(get.ask);
            $("#bid").html(get.bid);
            $("#high").html(get.high);
            $("#last").html(get.last);
            $("#low").html(get.low);
            $("#vwap").html(get.vwap);
            $.post("https://api.bitso.com/v2/balance", {
                key: "<?=$key?>",
                nonce: "<?=$nonce?>",
                signature: "<?=$signature?>"
            }, function (post) {
                $("#bitcoin").html(post.btc_available);
                $("#mxn").html(Math.round((post.btc_available * (get.bid - (get.bid * 0.01)))*100)/100);
            }, 'json');
        }, 'json');
    });
</script>
Balance: <span id="bitcoin"></span><br>
MXN: <span id="mxn"></span>

<hr>
<br>

Ask: <span id="ask"></span><br>
<b>Bid: <span id="bid"></span></b><br>
High: <span id="high"></span><br>
Last: <span id="last"></span><br>
Low: <span id="low"></span><br>
Vwap: <span id="vwap"></span><br>