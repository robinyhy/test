<?php
	header('Content-type:text.html;charset=utf8');

	class User{
		private static $_instance;
		private function __construct(){

		}
		private function __clone(){

		}
		public static function getInstance(){
			if(!(self::$_instance instanceof self)){
				self::$_instance = new self();
			}
			return self::$_instance;
		}
	}