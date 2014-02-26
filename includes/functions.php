<?php 
/*
	LES TEACHERS DU NET
	Created by Honoré Hounwanou
	@ www.youtube.com/hounwanou1993
	@ www.facebook.com/honore.hounwanou
	All rights reserved
	* Date: September 06, 2013
*------------------------------------------------------------------------------------------------*/


	/**
	* CakePHP's keys generator
	* Don't need any parameter
	* @return array that contains security.salt and security.cipherseed
	**/
	function cakephp_keys_generator(){

		//We build the set of values
		$values_salt = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
		$values_cipherSeed = array_merge(range(0, 9), range(0, 9), range(0, 9)); //Why 3 ranges? Just because 10*3 = 30 and we need a number of 29 numbers

		//Abracadabra :)
		shuffle($values_salt);
		shuffle($values_cipherSeed);

		//The length of both keys is fixed
		$security_salt = array_slice($values_salt, 0, 40);
		$security_cipherseed = array_slice($values_cipherSeed, 0, 29);

		//We return an array that contains our keys
	    return array(implode('', $security_salt), implode('', $security_cipherseed));
	}
?>