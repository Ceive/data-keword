<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 04.03.2016
 * Time: 12:10
 */
namespace Ceive\Data\Keword\Storage {

	use Ceive\Data\Keword\Keword;
	use Ceive\Data\Keword\Storage;

	/**
	 * Class ArrayFile
	 * @package Ceive\Data\Keword\Storage
	 */
	class ArrayFile extends Files{

		/**
		 * @return string
		 */
		public function getExtension(){
			return '.key.php';
		}
		/**
		 * @param Keword $key
		 * @return string
		 */
		protected function prepareSave(Keword $key){
			return 'return '.var_export($key->toArray(),true).';';
		}

		/**
		 * @param $keyData
		 * @return Keword
		 */
		protected function prepareLoaded($keyData){
			return $keyData;
		}

		/**
		 * @param $path
		 * @return Keword
		 */
		protected function loadFile($path){
			$data = require $path;
			return Keword::instanceFromData($data);
		}

	}
}

