<?php

namespace App\Entity;
use Core\Entity\Entity;

/**
* 
*/
class ClientEntity extends Entity
{
	public function getAdressComplete()
	{
		return $this->adress.'  ['.$this->zipCode.' ]';
	}
}