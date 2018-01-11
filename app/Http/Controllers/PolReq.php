<?php
	
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	
	
	class PolReq extends Controller
	{
		

		public function __construct()
		{
			$this->db = DB::connection('mysql');
			$this->dbpolis = DB::connection('mysql_polis');
		}
		/**
			* Показать список всех пользователей приложения.
			*
			* @return Response
		*/
		public function reqPol(Request $request)
		{
		$number = $request->input('polis');
			$res = [];
			$email = $this->db->table('users')->where('name', 'lie')->value('email');
			if ($email) {
				$res['email'] = $email;
				
				
				$res['unicod'] = $this->dbpolis->table('profil')->where('cod', 20)->select('name');
			}
			return response()->json($res);
			//return $res;
			
			// $namer = $namer." -".$number;
			// return view('zapis.pol_req', ['namer' => $namer]);
		}
	}	