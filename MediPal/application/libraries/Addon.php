<?php 
	class Addon 
	{
		public function passwdHash($pass_gen1)
		{
		    return sha1($pass_gen1);
		}
		
        }