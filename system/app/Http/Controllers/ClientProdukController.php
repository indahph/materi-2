<?php 


namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\ClientProduk;

/**
 * 
 */
class ClientProdukController extends Controller
{
	
	function ShowHome()
	{
		$data['list_produk'] = Produk::all();
		return view('home', $data);
	}

	function ShowProduk()
	{
		$data['list_produk'] = Produk::all();
		return view('produk', $data);
	}

	function ShowDetail()
	{
		$data['list_produk'] = Produk::all();
		return view('detail', $data);
	}

		function ShowKategori()
	{
		$data['list_kategori'] = Kategori::all();
		return view('kategori', $data);
	}



}