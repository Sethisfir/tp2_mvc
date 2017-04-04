<?php 

namespace App\Table;
use Core\Table\Table;

/**
* Classe Client
*/
class CreditTable extends Table
{
	public function findCredit($id)
	{
		$credit = $this->query("SELECT clients.name,
									clients.firstName,
									clients.birthDate,
									clients.adress,
									clients.zipCode,
									clients.phoneNumber,
									clients.adress,
									credits.organisme,
									credits.montant
							FROM clients
					  		LEFT JOIN credits
					  		ON clients.id = credits.clients_id");
		if ($credit) {
			return $credit;
		}else{
			return $this->query("SELECT clients.name,
									clients.firstName,
									clients.birthDate,
									clients.adress,
									clients.zipCode,
									clients.phoneNumber,
									clients.adress,
									credits.organisme,
									credits.montant
							FROM clients");
		}
	}
}