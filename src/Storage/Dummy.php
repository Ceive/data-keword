<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 12.09.2015
 * Time: 18:28
 */
namespace Ceive\Data\Keword\Storage {

	use Ceive\Data\Keword\Keword;
	use Ceive\Data\Keword\Storage;

	/**
	 * Class Dummy
	 * @package Ceive\Data\Keword\Storage
	 */
	class Dummy extends Storage{

		/**
		 *
		 */
		public function __construct(){
			parent::__construct();
		}

		/**
		 * @param Keword $key
		 */
		public function save(Keword $key){}

		/**
		 * @param $identifier
		 * @return Keword
		 */
		public function load($identifier){
			return null;
		}

		/**
		 * @param $identifier
		 * @return bool
		 */
		public function has($identifier){
			return false;
		}

		/**
		 * @param $identifier
		 * @return bool
		 */
		public function remove($identifier){
			return true;
		}

		/**
		 * @param null $matcher
		 * @return array
		 */
		public function getList($matcher = null){
			return [];
		}

		/**
		 * @TODO $matcher CLASS MATCHER
		 * @param $matcher
		 * @return mixed
		 */
		public function getCount($matcher = null){
			return 0;
		}
	}
}

