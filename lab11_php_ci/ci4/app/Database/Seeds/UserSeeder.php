<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'rangga',
			'useremail' => 'ranggasaputra.rr@gmail.com',
			'userpassword' => password_hash('rangga11', PASSWORD_DEFAULT),
		]); 
	}
}