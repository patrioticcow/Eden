<?php //-->
/*
 * This file is part of the Eden package.
 * (c) 2011-2012 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

require_once 'Eden/Oauth.php';
require_once 'Eden/Zappos/Base.php';
require_once 'Eden/Zappos/Error.php';
require_once 'Eden/Zappos/Autocomplete.php';
require_once 'Eden/Zappos/Brand.php';
require_once 'Eden/Zappos/Image.php';
require_once 'Eden/Zappos/Product.php';
require_once 'Eden/Zappos/Review.php';
require_once 'Eden/Zappos/Search.php';
require_once 'Eden/Zappos/Similarity.php';
require_once 'Eden/Zappos/Statistics.php';
require_once 'Eden/Zappos/Values.php';

/**
 * Zappos API factory. This is a factory class with
 * methods that will load up different Zappos classes.
 * Xend classes are organized as described on their
 * developer site: search, image, product, statistics
 * brand, review, core values, autocomplete and similarity.
 *
 * @package    Eden
 * @category   Zappos
 * @author     Christian Symon M. Buenavista sbuenavista@openovate.com
 */
class Eden_Zappos extends Eden_Class {
	/* Constants
	-------------------------------*/
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
	 * Returns Zappos Auto complete
	 *
	 * @param *string api key
	 * @return Eden_Zappos_AutoComplete
	 */
	public function autocomplete($apiKey) {
		return Eden_Zappos_AutoComplete::i($apiKey);
	}

	/**
	 * Returns Zappos brand
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Brand
	 */
	public function brand($apiKey) {
		return Eden_Zappos_Brand::i($apiKey);
	}

	/**
	 * Returns Zappos core values
	 *
	 * @param *string api key
	 * @return Eden_Zappos_AutoComplete
	 */
	public function values($apiKey) {
		return Eden_Zappos_Values::i($apiKey);
	}

	/**
	 * Returns Zappos images
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Search
	 */
	public function image($apiKey) {
		return Eden_Zappos_Image::i($apiKey);
	}

	/**
	 * Returns Zappos products
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Product
	 */
	public function product($apiKey) {
		return Eden_Zappos_Product::i($apiKey);
	}

	/**
	 * Returns Zappos review
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Review
	 */
	public function review($apiKey) {
		return Eden_Zappos_Review::i($apiKey);
	}

	/**
	 * Returns Zappos search results
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Search
	 */
	public function search($apiKey) {
		return Eden_Zappos_Search::i($apiKey);
	}

	/**
	 * Returns Zappos similarity
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Similarity
	 */
	public function similarity($apiKey) {
		return Eden_Zappos_Similarity::i($apiKey);
	}

	/**
	 * Returns Zappos statistics
	 *
	 * @param *string api key
	 * @return Eden_Zappos_Statistics
	 */
	public function statistics($apiKey) {
		return Eden_Zappos_Statistics::i($apiKey);
	}

	/* Protected Methods
	-------------------------------*/
	/* Private Methods
	-------------------------------*/
}
