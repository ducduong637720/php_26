<?php 
	require_once('core/Model.php');
	/**
	 * 
	 */
	class User extends Model
	{
		
		public $table = 'users';
		public function check($username, $password)
		{
			$data = $this->where($this->table,[
				'name' => $username,
				'password' => $password
			]);
			
		}
	}
?>