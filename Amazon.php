<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

require_once 'Eden/Amazon/Error.php';
require_once 'Eden/Amazon/Base.php';
require_once 'Eden/Amazon/Ec2.php';
require_once 'Eden/Amazon/Ec2/Base.php';
require_once 'Eden/Amazon/Ec2/Ami.php';
require_once 'Eden/Amazon/Ec2/Customergateway.php';
require_once 'Eden/Amazon/Ec2/Devpay.php';
require_once 'Eden/Amazon/Ec2/Dhcp.php';
require_once 'Eden/Amazon/Ec2/Elasticbookstore.php';
require_once 'Eden/Amazon/Ec2/Elasticipaddress.php';
require_once 'Eden/Amazon/Ec2/General.php';
require_once 'Eden/Amazon/Ec2/Instances.php';
require_once 'Eden/Amazon/Ec2/Internetgateway.php';
require_once 'Eden/Amazon/Ec2/Keypairs.php';
require_once 'Eden/Amazon/Ec2/Monitoring.php';
require_once 'Eden/Amazon/Ec2/Networkacl.php';
require_once 'Eden/Amazon/Ec2/Networkinterface.php';
require_once 'Eden/Amazon/Ec2/Placementgroups.php';
require_once 'Eden/Amazon/Ec2/Reservedinstances.php';
require_once 'Eden/Amazon/Ec2/Routetables.php';
require_once 'Eden/Amazon/Ec2/Securitygroups.php';
require_once 'Eden/Amazon/Ec2/Spotinstances.php';
require_once 'Eden/Amazon/Ec2/Tags.php';
require_once 'Eden/Amazon/Ec2/Virtualprivategateways.php';
require_once 'Eden/Amazon/Ec2/Vmexport.php';
require_once 'Eden/Amazon/Ec2/Vmimport.php';
require_once 'Eden/Amazon/Ec2/Vnpconnections.php';
require_once 'Eden/Amazon/Ec2/Vpc.php';
require_once 'Eden/Amazon/Ec2/Windows.php';
require_once 'Eden/Amazon/Ecs.php';
require_once 'Eden/Amazon/S3.php';
require_once 'Eden/Amazon/Ses.php';
require_once 'Eden/Amazon/Sns.php';

/**
 * Amazon API factory. This is a factory class with
 * methods that will load up different amazon classes.
 * Amazon classes are organized as described on their
 * developer site: ec2, ecs, s3 and ses
 *
 * @package    Eden
 * @category   asiapay
 * @author     Christian Symon M. Buenavista sbuenavista@openovate.com
 */
class Eden_Amazon extends Eden_Class {
	/* Constants
	-------------------------------*/
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
	 * Returns Amazon ec2(Elastic Compute Cloud)
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Amazon_Ec2
	 */
	public function ec2($accessKey, $accessSecret) {
		//argument test
		Eden_Amazon_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Amazon_Ec2::i($accessKey, $accessSecret);
	}

	/**
	 * Returns Amazon ecs
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Amazon_Ecs
	 */
	public function ecs($privateKey, $publicKey) {
		//argument test
		Eden_Amazon_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Amazon_Ecs::i($privateKey, $publicKey);
	}

	/**
	 * Returns Amazon s3
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Amazon_S3
	 */
	public function s3($accessKey, $accessSecret) {
		//argument test
		Eden_Amazon_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Amazon_S3::i($accessKey, $accessSecret);
	}

	/**
	 * Returns Amazon ses
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Amazon_Ses
	 */
	public function ses($privateKey, $publicKey) {
		//argument test
		Eden_Amazon_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Amazon_Ses::i($privateKey, $publicKey);
	}

	/**
	 * Returns Amazon sns
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Amazon_Sns
	 */
	public function sns($accessKey, $accessSecret) {
		//argument test
		Eden_Amazon_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Amazon_Sns::i($accessKey, $accessSecret);
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}