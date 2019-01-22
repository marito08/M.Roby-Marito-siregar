<?php  

function cetak() {
	
	$biodata = 
				['nama' => 'M.Robi marito siregar',
				'alamat' => 'Jln.pangera ayin sako palembang',
				'hobbie' => ['Futsal','badminton'],
				'is_married' => false,
				'school' => ['highschool' => 'SMAN 16 Palembang','university'=> ''],
				'skills' => [
					array('skill'=>'php'),
					array('skill'=>'css'),
					array('skill'=>'bootstrap')


					]


				];


	

	return json_encode($biodata);
}

echo cetak();


?>