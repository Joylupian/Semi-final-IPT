<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.seller_list');
    }


    public function create()
    {
        //
        return view('pages.create_seller');
    }


    public function store(Request $request)
    {
        Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'product_type' => $request->product_type,
            'total_sales' => $request->total_sales,
        ]);

        return redirect('create-seller')->with(['success' => 'New Seller created successfully']);
    }


    public function show()
    {
        $sellers = Seller::all();

        return view('pages.seller_list',['sellers'=>$sellers]);

    }
}
