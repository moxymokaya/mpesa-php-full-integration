<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->ci 	 =	& get_instance();
$config['ConsumerKey']			=	'2SEPZfDFlcBh5pvfQofxcei72Igflotd';
$config['ConsumerSecret']		=	'oDqu2qEYv9mMJMr8';
$config["token_link"]			=	'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$config["initiator"]			=	'testapi771';
$config["credential"]			=	'5PW7nppk';
$config["partyA_shortcode"]		=	'600771';
$config["partyB_shortcode"]		= 	'600000';
$config["test_msisdn"]			=	'254708374149';

//Mpesa Checkout
$config['checkout_processlink']	=	'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest'; 
$config['checkout_querylink']	=	'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$config['checkout_shortcode']	=	'174379';
$config['checkout_passkey']		=	'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$config['checkout_callbackurl']	=	'https://www.standardmedia.co.ke/magazines/callback';

// Mpesa Reversal
$config["reversal_link"]		=	'https://sandbox.safaricom.co.ke/mpesa/reversal/v1/request';
$config["reversal_resultUrl"]	=	'https://178.62.89.99/test.php';
$config["reversal_timeoutURL"]	=	'https://178.62.89.99/test.php';

// Mpesa Balance
$config["balance_link"]			=	'https://sandbox.safaricom.co.ke/mpesa/accountbalance/v1/query';
$config["balance_timeoutUrl"]	=	'https://178.62.89.99/test.php';
$config["balance_resultUrl"]	=	'https://178.62.89.99/test.php';

// Mpesa C2B 
$config["c2b_regiterUrl"]		=  	'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
$config["c2b_transactionUrl"]	=	'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
$config["c2b_confirmationURL"]	= 	'';
$config["c2b_validationURL"]	= 	'';
$config["c2b_shortcode"]		=	'';

// Mpesa Transaction Status
$config["transtat_link"]		=	'https://sandbox.safaricom.co.ke/mpesa/transactionstatus/v1/query';
$config["transtat_resultURL"]	=	'https://178.62.89.99/test.php';
$config["transtat_timeoutURL"]	=	'https://178.62.89.99/test.php';

// Mpesa B2B
$config["b2b_link"]				= 	'https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest';
$config["b2b_timeoutURL"]		=	'https://178.62.89.99/test.php';
$config["b2b_resultURL"]		=	'https://178.62.89.99/test.php';

// Mpesa B2C
$config["b2c_link"]				=	'https://sandbox.safaricom.co.ke/mpesa/b2c/v1/paymentrequest';
$config["b2c_timeoutURL"]		=	'https://178.62.89.99/test.php';
$config["b2c_resultURL"]		=	'https://178.62.89.99/test.php';
