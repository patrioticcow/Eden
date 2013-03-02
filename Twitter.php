<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

require_once 'Eden/Oauth.php';
require_once 'Eden/Twitter/Error.php';
require_once 'Eden/Twitter/Base.php';
require_once 'Eden/Twitter/Oauth.php';
require_once 'Eden/Twitter/Directmessage.php';
require_once 'Eden/Twitter/Favorites.php';
require_once 'Eden/Twitter/Friends.php';
require_once 'Eden/Twitter/Geo.php';
require_once 'Eden/Twitter/Help.php';
require_once 'Eden/Twitter/List.php';
require_once 'Eden/Twitter/Saved.php';
require_once 'Eden/Twitter/Search.php';
require_once 'Eden/Twitter/Spam.php';
require_once 'Eden/Twitter/Streaming.php';
require_once 'Eden/Twitter/Suggestions.php';
require_once 'Eden/Twitter/Timeline.php';
require_once 'Eden/Twitter/Trends.php';
require_once 'Eden/Twitter/Tweets.php';
require_once 'Eden/Twitter/Users.php';

/**
 * Twitter API factory. This is a factory class with
 * methods that will load up different twitter classes.
 * Twitter classes are organized as described on their
 * developer site: account, block, direct message, favorites, friends, geo,
 * help, legal, list, local trends, notification, saved searches, search, spam,
 * suggestions, timelines, trends, tweets and users.
 *
 * @package    Eden
 * @category   twitter
 * @author     Christian Symon M. Buenavista sbuenavista@openovate.com
 */
class Eden_Twitter extends Eden_Class {
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
	 * Returns twitter oauth method
	 *
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Oauth
	 */
	public function auth($key, $secret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string');	//Argument 2 must be a string

		return Eden_Twitter_Oauth::i($key, $secret);
	}

	/**
	 * Returns twitter direct message method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Directmessage
	 */
	public function directMessage($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Directmessage::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter favorites method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Favorites
	 */
	public function favorites($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Favorites::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter friends method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Friends
	 */
	public function friends($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Friends::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter geo method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Geo
	 */
	public function geo($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Geo::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter help method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Help
	 */
	public function help($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Help::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter list method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_List
	 */
	public function lists($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_List::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter saved method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Saved
	 */
	public function saved($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Saved::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter search method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Search
	 */
	public function search($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Search::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter spam method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Spam
	 */
	public function spam($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Spam::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter spam method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Spam
	 */
	public function streaming($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Streaming::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter suggestions method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Suggestions
	 */
	public function suggestions($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Suggestions::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter timelines method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Timeline
	 */
	public function timeline($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Timeline::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter trends method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Trends
	 */
	public function trends($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Trends::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter tweets method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Tweets
	 */
	public function tweets($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Tweets::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/**
	 * Returns twitter users method
	 *
	 * @param *string
	 * @param *string
	 * @param *string
	 * @param *string
	 * @return Eden_Twitter_Users
	 */
	public function users($consumerKey, $consumerSecret, $accessToken, $accessSecret) {
		//Argument test
		Eden_Twitter_Error::i()
			->argument(1, 'string')		//Argument 1 must be a string
			->argument(2, 'string')		//Argument 2 must be a string
			->argument(3, 'string')		//Argument 3 must be a string
			->argument(4, 'string');	//Argument 4 must be a string

		return Eden_Twitter_Users::i($consumerKey, $consumerSecret, $accessToken, $accessSecret);
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}