<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

require_once 'Eden/Curl.php';
require_once 'Eden/Authorizenet/Error.php';
require_once 'Eden/Authorizenet/Base.php';
require_once 'Eden/Authorizenet/Customer.php';
require_once 'Eden/Authorizenet/Direct.php';
require_once 'Eden/Authorizenet/Payment.php';
require_once 'Eden/Authorizenet/Recurring.php';
require_once 'Eden/Authorizenet/Server.php';

/**
 * Authorize.net API factory. This is a factory class with
 * methods that will load up different Authorize.net classes.
 * Authorize.net classes are organized as described on their
 * developer site: customer integration, direct post, advance
 * integration, authomated recurring and server integration method
 *
 * @package    Eden
 * @category   Authorize.net
 * @author     Christian Symon M. Buenavista sbuenavista@openovate.com
 */
class Eden_Authorizenet extends Eden_Class {
	/* Constants
	-------------------------------*/
	const PEM = '/authorizenet/cert.pem';

	/* Public Properties
	-------------------------------*/
	/* Protected Properties
	-------------------------------*/
	/* Private Properties
	-------------------------------*/
	/* Get
	-------------------------------*/
	public static function i() {
		return self::_getSingleton(__CLASS__);
	}

	/* Magic
	-------------------------------*/
	/* Public Methods
	-------------------------------*/
	/**
	 * Returns authorize.net customer integration method
	 *
	 * @param *string API login key
	 * @param *string API transaction key
	 * @param *string API signature
	 * @param *boolean Live mode
	 * @return Eden_Authorizenet_Customer
	 */
	public function customer($apiLogin, $transactionKey, $live = false, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Authorizenet_Customer::i($apiLogin, $transactionKey, $certificate, $live);
	}

	/**
	 * Returns authorize.net direct post method
	 *
	 * @param *string API login key
	 * @param *string API transaction key
	 * @param *string API signature
	 * @param *boolean Live mode
	 * @return Eden_Authorizenet_Direct
	 */
	public function direct($apiLogin, $transactionKey, $live = false, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Authorizenet_Direct::i($apiLogin, $transactionKey, $certificate, $live);
	}

	/**
	 * Returns authorize.net advance integration method
	 *
	 * @param *string API login key
	 * @param *string API transaction key
	 * @param *string API signature
	 * @param *boolean Live mode
	 * @return Eden_Authorizenet_Payment
	 */
	public function payment($apiLogin, $transactionKey, $live = false, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Authorizenet_Payment::i($apiLogin, $transactionKey, $certificate, $live = false);
	}

	/**
	 * Returns authorize.net authomated recurring method
	 *
	 * @param *string API login key
	 * @param *string API transaction key
	 * @param *string API signature
	 * @param *boolean Live mode
	 * @return Eden_Authorizenet_Recurring
	 */
	public function recurring($apiLogin, $transactionKey, $live = false, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Authorizenet_Recurring::i($apiLogin, $transactionKey, $certificate, $live = false);
	}

	/**
	 * Returns authorize.net server integration method
	 *
	 * @param *string API login key
	 * @param *string API transaction key
	 * @param *string API signature
	 * @param *boolean Live mode
	 * @return Eden_Authorizenet_Server
	 */
	public function server($apiLogin, $transactionKey, $live = false, $certificate = NULL) {
		if(!is_string($certificate)) {
			$certificate = dirname(__FILE__).self::PEM;
		}

		return Eden_Authorizenet_Server::i($apiLogin, $transactionKey, $certificate, $live = false);
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}