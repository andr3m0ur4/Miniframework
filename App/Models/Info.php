<?php 

	namespace App\Models;

	use MF\Model\Model;

	class Info extends Model
	{
		public function getInfo()
		{
			$query = 'SELECT id, titulo, descricao FROM tb_info';
			$stmt = $this->db->query($query);
			return $stmt->fetchAll();
		}
	}
	