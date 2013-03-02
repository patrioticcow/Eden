<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */
require_once 'Eden/Oauth2.php';
require_once 'Eden/Template.php';
require_once 'Eden/Google/Error.php';
require_once 'Eden/Google/Base.php';
require_once 'Eden/Google/Oauth.php';
require_once 'Eden/Google/Calendar/Acl.php';
require_once 'Eden/Google/Calendar/Calendars.php';
require_once 'Eden/Google/Calendar/Event.php';
require_once 'Eden/Google/Calendar/Freebusy.php';
require_once 'Eden/Google/Calendar/List.php';
require_once 'Eden/Google/Calendar/Settings.php';
require_once 'Eden/Google/Calendar.php';
require_once 'Eden/Google/Checkout/Form.php';
require_once 'Eden/Google/Drive/Changes.php';
require_once 'Eden/Google/Drive/Children.php';
require_once 'Eden/Google/Drive/Files.php';
require_once 'Eden/Google/Drive/Parent.php';
require_once 'Eden/Google/Drive/Permissions.php';
require_once 'Eden/Google/Drive/Revisions.php';
require_once 'Eden/Google/Drive.php';
require_once 'Eden/Google/Contacts/Batch.php';
require_once 'Eden/Google/Contacts/Data.php';
require_once 'Eden/Google/Contacts/Groups.php';
require_once 'Eden/Google/Contacts/Photo.php';
require_once 'Eden/Google/Contacts.php';
require_once 'Eden/Google/Analytics/Management.php';
require_once 'Eden/Google/Analytics/Reporting.php';
require_once 'Eden/Google/Analytics/Multichannel.php';
require_once 'Eden/Google/Analytics.php';
require_once 'Eden/Google/Plus/Activity.php';
require_once 'Eden/Google/Plus/Comment.php';
require_once 'Eden/Google/Plus/People.php';
require_once 'Eden/Google/Plus.php';
require_once 'Eden/Google/Maps/Direction.php';
require_once 'Eden/Google/Maps/Distance.php';
require_once 'Eden/Google/Maps/Elevation.php';
require_once 'Eden/Google/Maps/Geocoding.php';
require_once 'Eden/Google/Maps/Image.php';
require_once 'Eden/Google/Maps.php';
require_once 'Eden/Google/Shortener.php';
require_once 'Eden/Google/Youtube/Activity.php';
require_once 'Eden/Google/Youtube/Channel.php';
require_once 'Eden/Google/Youtube/Comment.php';
require_once 'Eden/Google/Youtube/Contacts.php';
require_once 'Eden/Google/Youtube/Favorites.php';
require_once 'Eden/Google/Youtube/History.php';
require_once 'Eden/Google/Youtube/Message.php';
require_once 'Eden/Google/Youtube/Playlist.php';
require_once 'Eden/Google/Youtube/Profile.php';
require_once 'Eden/Google/Youtube/Ratings.php';
require_once 'Eden/Google/Youtube/Search.php';
require_once 'Eden/Google/Youtube/Subscription.php';
require_once 'Eden/Google/Youtube/Upload.php';
require_once 'Eden/Google/Youtube/Video.php';
require_once 'Eden/Google/Youtube.php';

/**
 * Google API factory. This is a factory class with
 * methods that will load up different google classes.
 * Google classes are organized as described on their
 * developer site: analytics, calendar ,contacts ,drive, plus and youtube.
 *
 * @package    Eden
 * @category   google
 * @author     Christian Symon M. Buenavista sbuenavista@openovate.com
 */
class Eden_Google extends Eden_Class {
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
	 * Returns google analytics methods
	 *
	 * @param *string
	 * @param *string
	 * @param *url
	 * @param *string
	 * @return Eden_Google_Oauth
	 */
	public function auth($clientId, $clientSecret, $redirect, $apiKey = NULL ) {
		//argument test
		Eden_Google_Error::i()
			->argument(1, 'string')				//Argument 1 must be a string
			->argument(2, 'string')				//Argument 2 must be a string
			->argument(3, 'url')				//Argument 3 must be a url
			->argument(4, 'string', 'null');	//Argument 4 must be a string

		return Eden_Google_Oauth::i($clientId, $clientSecret, $redirect, $apiKey);
	}

	/**
	 * Returns google analytics methods
	 *
	 * @param *string
	 * @return Eden_Google_Analytics
	 */
	public function analytics($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Analytics::i($token);
	}

	/**
	 * Returns google calendar methods
	 *
	 * @param *string
	 * @return Eden_Google_Calendar
	 */
	public function calendar($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Calendar::i($token);
	}

	/**
	 * Returns google checkout methods
	 *
	 * @param *string
	 * @return Eden_Google_Checkout_Form
	 */
	public function checkout($merchantId) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Checkout_Form::i($merchantId);
	}

	/**
	 * Returns google contacts methods
	 *
	 * @param *string
	 * @return Eden_Google_Contacts
	 */
	public function contacts($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Contacts::i($token);
	}

	/**
	 * Returns google drive methods
	 *
	 * @param *string
	 * @return Eden_Google_Drive
	 */
	public function drive($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Drive::i($token);
	}

	/**
	 * Returns google maps methods
	 *
	 * @param *string
	 * @return Eden_Google_Maps
	 */
	public function maps($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Maps::i($token);
	}

	/**
	 * Returns google plus methods
	 *
	 * @param *string
	 * @return Eden_Google_Plus
	 */
	public function plus($token) {
		//Argument 1 must be a string
		Eden_Google_Error::i()->argument(1, 'string');

		return Eden_Google_Plus::i($token);
	}

	/**
	 * Returns google shortener methods
	 *
	 * @param *string API key
	 * @param *string
	 * @return Eden_Google_Plus
	 */
	public function shortener($key, $token) {
		//Argument Testing
		Eden_Google_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Google_Shortener::i($key, $token);
	}

	/**
	 * Returns google youtube methods
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Google_Youtube
	 */
	public function youtube($token, $developerId) {
		//Argument Testing
		Eden_Google_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Google_Youtube::i($token, $developerId);
	}
	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}