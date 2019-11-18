<?php

namespace App\Http\Controllers;

use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @var ProductServiceInterface
     */
    private $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function search(Request $request){
        $search= $request->get('search');
        $products= DB::table('products')->where('name','like','%'.$search.'%')
                                              ->orWhere('price',$search)
                                              ->get();
//        dd($products);
        return view('search.list',compact('products'));
    }

    public function show(){
        $products=$this->productService->getAll();
        return view('layouts.products',compact('products'));
    }
    public function show_id($id){
        $products=$this->productService->show($id);
        return view('layouts.show_products.show_id_product',compact('products'));
    }
}
