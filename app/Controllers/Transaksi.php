<?php
namespace App\Controllers;

use PhpParser\Node\Expr\FuncCall;

class Transaksi extends BaseController
{
    private $url ="https://api.rajaongkir.com/starter";
    private $apiKey = "6a21672046a140b6a57d22c863da3517";

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel    ->join('barang','barang.id=transaksi.id_barang')
                                        ->join('user','user.id=transaksi.id_pembeli')
                                        ->where('transaksi.id',$id)
                                        ->first();

        return view('transaksi/view',[
            'transaksi' => $transaksi,
        ]);
    }
   
    public function index(){
        $transaksiModel = new \App\Models\TransaksiModel();
        $model = $transaksiModel->findAll();
        return view('transaksi/index',[
            'model' =>$model,
        ]);
    }
    public function invoice()
    {
        $id= $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);

        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);

        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);


        return view('transaksi/invoice',[
            'transaksi'=>$transaksi,
            'pembeli' => $pembeli,
            'barang' => $barang,
        ]);
    }
}






?>