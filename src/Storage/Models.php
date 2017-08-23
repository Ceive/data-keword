<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 25.01.2016
 * Time: 16:37
 */
namespace Ceive\Data\Keword\Storage {

	use Ceive\Data\Keword\Keword;
	use Ceive\Data\Keword\Storage;

	/**
	 * Class Models
	 * @package Ceive\Data\Keword\Storage
	 */
	class Models extends Storage{

		/**
		 * @param Keword $key
		 */
		public function save(Keword $key){
			// TODO: Implement save() method.
		}

		/**
		 * @param $identifier
		 * @return Keword
		 */
		public function load($identifier){
			// TODO: Implement load() method.
		}

		/**
		 * @TODO $matcher CLASS MATCHER
		 * @param $matcher
		 * @return array identifiers
		 */
		public function getList($matcher = null){
			// TODO: Implement getList() method.
		}

		/**
		 * @param $identifier
		 * @return bool
		 */
		public function has($identifier){
			// TODO: Implement has() method.
		}

		/**
		 * @param $identifier
		 * @return bool
		 */
		public function remove($identifier){
			// TODO: Implement removeNode() method.
		}

		/**
		 * @TODO $matcher CLASS MATCHER
		 * @param $matcher
		 * @return mixed
		 */
		public function getCount($matcher = null){
			// TODO: Implement getCount() method.
		}
	}
}

