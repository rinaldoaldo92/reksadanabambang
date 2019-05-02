<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Nasabah;
use App\Backoffice;

class NasabahController extends Controller
{

    public function reksadanaonline() {
    	return view('reksadanaonline.index');
    }

    public function reksadanaonlineLogin(Request $request) {

        $username = $request->username;
        $password = $request->password;

        $data = Nasabah::where('username', $username)->first();

        if ($data) {

            if(Hash::check($password, $data->password)) {
                Session::put('nama', $data->nama);
                Session::put('email', $data->email);
                Session::put('username', $data->username);
                Session::put('custid', $data->custid);
                Session::put('login', TRUE);

                return redirect('reksadanaonline/dashboard/index');

            } else {

                return redirect('reksadanaonline/login')->with('warning', 'Data yang dimasukkan salah, silahkan cek kembali atau gunakan fitur lupa password atau username.');

            }

        } else {

                return redirect('reksadanaonline/login')->with('error', 'Data tidak dapat diproses, silahkan hubungi kami untuk informasi.');

        }

    }

    public function reksadanaonlineResetPass() {

    }

    protected function reksadanaonlineDaftar(request $request) {

    	$validasi = $request->validate([
    		'nama' => 'required|string|max:255|unique:nasabah',
    		'email' => 'required|string|unique:nasabah',
            'password' => 'required|string|min:6',
    		're_password' => 'required|string|same:password',
    	]);
 
        	if($validasi) {

                Nasabah::create([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'status' => 'YES',
                    'custid' => 'PERS'
                ]); 

    	    	return redirect('/reksadanaonline/sukses');

        	} else {

        		return redirect('/reksadanaonline/daftar')->with('warning');

        	}

    }

    public function reksadanaonlineDaftarOnline(request $request) {

    	$validasi = $request->validate([
            'nama' => 'required|string|max:255|unique:nasabah',
            'email' => 'required|string|unique:nasabah',
            'custid' => 'unique:nasabah',
            'username' => 'required|string|max:20|unique:nasabah',
            'password' => 'required|string|min:6',
            're_password' => 'required|string|same:password',
    	]);

    	if($validasi) {

                Nasabah::create([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'status' => 'YES',
                    'custid' => $request->custid
                ]);

                return redirect('/reksadanaonline/sukses');

            } else {

                return redirect('/reksadanaonline/daftaronline')->with('warning');

            }

    	}    	

    public function reksadanaonline_page($page = '$page.blade.php') {
        return view('reksadanaonline.'.$page);
    }

    public function reksadanaonline_dashboardindex() {
        return view('reksadanaonline.dashboard.index');
    }

    public function reksadanaonline_dashboard($page = '$page.blade.php') {
        return view('reksadanaonline.dashboard/'.$page);
    }

    public function reksadanaonline_dashboardoperation_index() {
        return view('reksadanaonline.dashboard-operation.index');
    }

    public function reksadanaonline_dashboardoperation($page = '$page.blade.php') {
        return view('reksadanaonline.dashboard-operation/'.$page);
    }

    public function reksadanaonline_logout() {
    	
    	session::flush();
    	return redirect('login');

    }

}
