<?php
	class Index 
	{
		public function indexaction(){
			echo "Hi im index From index Controller!";
		}
		public function sayhelloaction($name){
			echo "Hi". $name;
		}
	}
