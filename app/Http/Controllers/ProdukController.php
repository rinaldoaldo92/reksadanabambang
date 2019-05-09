<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Backoffice;
use App\Produk;
use App\Ulasan;

class ProdukController extends Controller
{

    public function index() {

        $informasi = Ulasan::get(); 
        $ulasan = Ulasan::get(); 
        $produk = Produk::get(); 

    	return view('index', ['informasi' => $informasi, 'ulasan' => $ulasan, 'produk' => $produk]);
    }

    public function page($page = '$page.blade.php') {
        
        return view('/'.$page);
    }

    public function informasi($id) {

        $informasi = Ulasan::get();        

        return view('informasi/'.$id, ['informasi' => $informasi]);
    }

    public function ulasan($id) {

        $ulasan = Ulasan::select()->where('kategori', 'Ulasan Investasi')->first(); 

        return view('ulasan-investasi/'.$id, ['ulasan' => $ulasan]);

    }

    public function promo() {

        $promo = Ulasan::get(); 

        return view('/reksadanaonline#promo', ['promo' => $promo]);

    }

    public function listproduk() {
    	return view('listproduk');
    }

    public function adminweb() {
    	return view('adminweb.index');
    }

    public function adminwebLogin(Request $request) {

        $username = $request->username;
        $password = $request->password;
        $status = 'YES';

        $data = Backoffice::where('username', $username, $status)->first();

        if ($data) {

            if(Hash::check($password, $data->password)) {
                Session::put('nama', $data->nama);
                Session::put('status', $data->status);
                Session::put('username', $data->username);
                Session::put('jabatan', $data->jabatan);
                Session::put('login', TRUE);

                return redirect('adminweb/dashboard');

            } else {

                return redirect('adminweb')->with('warning', 'Username dan password yang diinput salah. Mohon dicek kembali.');            
            }

        } else {

            return redirect('adminweb')->with('error', 'Error yang tak diketahui.');  

        }

    }

    public function dashboard_index() {
        return view('adminweb.dashboard.index');
    }

    public function dashboard_page($page = '$page.blade.php') {
    	return view('adminweb.dashboard/'.$page);
    }

    public function konten() {

        $konten = Ulasan::get();

        return view('adminweb.dashboard.konten', ['konten' => $konten]);

    }


    public function buatkonten() {

        return view('adminweb.dashboard.buat-konten');

    }

    public function proseskonten(Request $request) {

        date_default_timezone_set("Asia/Jakarta");

        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string',
        ]);

        if($validasi) {

            Ulasan::create([
                'judul' => $request->judul,
                'konten' => $request->konten,
                'kategori' => $request->kategori,
                'dibuat_oleh' => Session::get('nama')
            ]);

            return view('adminweb.dashboard.buat-konten')->with('info');


        } else {

            return view('adminweb.dashboard.buat-konten')->with('warning');

        }
    
    }

    public function editkonten() {

        $editkonten = Ulasan::get();

        return view('adminweb.dashboard.edit-konten', ['editkonten' => $editkonten]);

    }

    public function deletekonten() {

        $editkonten = Ulasan::get();

        return view('adminweb.dashboard.edit-konten', ['editkonten' => $editkonten]);

    }

    public function manajemen_user() {

        $manajemen_user = Backoffice::get();

        return view('adminweb.dashboard.manajemen-user', ['manajemen_user' => $manajemen_user]);

    }

    public function buatuser() {

        return view('adminweb.dashboard.buat-user');

    }

    public function produk() {

        $produk = Produk::get();

        return view('adminweb.dashboard.produk', ['produk' => $produk]);

    }

    public function profil() {

        $id = Session::get('id');

        $profil = Backoffice::whereIn('id', session('id'))->get();

        return view('adminweb.dashboard.profil', ['profil' => $profil]);

    }

    public function dashboard_logout(Request $request) {
        
        $request->session()->flush();

        return redirect('adminweb');

    }

}
