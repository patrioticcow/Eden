<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

require_once 'Eden/Curl.php';
require_once 'Eden/Paypal/Error.php';
require_once 'Eden/Paypal/Base.php';
require_once 'Eden/Paypal/Authorization.php';
require_once 'Eden/Paypal/Base.php';
require_once 'Eden/Paypal/Billing.php';
require_once 'Eden/Paypal/Button.php';
require_once 'Eden/Paypal/Checkout.php';
require_once 'Eden/Paypal/Direct.php';
require_once 'Eden/Paypal/Recurring.php';
require_once 'Eden/Paypal/Transaction.php';

/**
 * Paypal API factory. This is a factory class with
 * methods that will load up different Paypal API methods.
 * Paypal classes are organized as described on their
 * developer site: Express Checkout, Transaction,
 * Authorization, Direct Payment, Recurring Payment,
 * Button Manager and Billing Agreement
 *
 * @package    Eden
 * @category   Paypal
 * @author     Christian Blanquera cblanquera@openovate.com
 */
class Eden_Paypal extends Eden_Class {
	/* Constants
	-------------------------------*/
	const PEM = '/paypal/cacert.pem';

	/* Public Properties
	-------------------------------*/
	/* Protected Properties
	-------------------------------*/
	/* Private Properties
	-------------------------------*/
	/* Magic
	-------------------------------*/
	public static function i() {
		return self::_getSingleton(__CLASS__);
	}

	/* Public Methods
	-------------------------------*/
	/**
	 * Returns paypal authorization
	 *
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string API certificate file
	 * @return Eden_Paypal_Authorization
	 */
	public function authorization($user, $password, $signature, $certificate = NULL) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Authorization::i($user, $password, $signature, $certificate);
	}

	/**
	 * Returns paypal billing
	 *
	 * @param string	API username
	 * @param string	API password
	 * @param string	API signature
	 * @param string	API certificate file
	 * @return Eden_Paypal_Billing
	 */
	public function billing($user, $password, $signature, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Billing::i($user, $password, $signature, $certificate);
	}

	/**
	 * Returns paypal button
	 *
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string API certificate file
	 * @return Eden_Paypal_Button
	 */
	public function button($user, $password, $signature, $certificate = NULL) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Button::i($user, $password, $signature, $certificate);
	}

	/**
	 * Returns paypal express checkout
	 *
	 * @param string
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string|null API certificate file
	 * @return Eden_Paypal_Checkout
	 */
	public function checkout($user, $password, $signature, $certificate = NULL, $live = false) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Checkout::i($user, $password, $signature, $certificate, $live);
	}

	/**
	 * Returns paypal directPayment
	 *
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string API certificate file
	 * @return Eden_Paypal_Direct
	 */
	public function direct($user, $password, $signature, $certificate = NULL) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Direct::i($user, $password, $signature, $certificate);
	}

	/**
	 * Returns paypal recurringPayment
	 *
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string API certificate file
	 * @return Eden_Paypal_Recurring
	 */
	public function recurring($user, $password, $signature, $certificate = NULL) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Recurring::i($user, $password, $signature, $certificate);
	}

	/**
	 * Returns paypal transaction
	 *
	 * @param string API username
	 * @param string API password
	 * @param string API signature
	 * @param string API certificate file
	 * @return Eden_Paypal_Transaction
	 */
	public function transaction($user, $password, $signature, $certificate = NULL) {
		Eden_Paypal_Error::i()
			->argument(1, 'string')
			->argument(2, 'string')
			->argument(3, 'string')
			->argument(4, 'string', 'null');

		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Paypal_Transaction::i($user, $password, $signature, $certificate);
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}