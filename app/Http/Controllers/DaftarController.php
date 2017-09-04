<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DaftarController extends Controller
{
    public function getsimpeg(Request $request)
    {
        $user = User::whereNip( $request->get('nip') )->first();
        
        if ($user == null) {
        	$url = "http://api.lokalan.id/simpeg";
        	$token = "?_token=Pm2Nlpt50vYHomUOih2DgJaHJvGfMbjCgkNSonMV0hY";
            try {
                $json = file_get_contents($url.$token."&nip=".$request->get('nip'));
                $data = json_decode($json);
                if ($data->status != 200 ) {
                    return "Server Sedang dalam perbaikan";
                }
                if ( $data->data != null ) {
                    $pegawai = $data->data;
                    return view('pendaftaran', compact('pegawai'));    
                }else{
                    return redirect('daftar');
                }
            } catch (Exception $e) {
                return redirect('daftar');
            }
            
        }
    }
}
