<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producer;
use App\Product;
class MyController extends Controller
{
    public function index()
     {
     
      //    $products = DB::table('Products')->select('*');
      //    $products = $products->get();
    	 // return view ('Index',compact('products'));
        $proc = Product::all();
        $producer = Producer::all();
        return view ('index',compact('proc','producer'));
    }


    public function shop()
    {
        
         $product = Product::paginate(8);
         return view ('shop',compact('product'));

    }


    public function detail($id)
    {
    	 $news = Product::findOrFail($id);
         return view('detail', compact('news'));
    }

    public function pay()
    {
    	return view ('pay');
    }

    public function cart()
    {
      // $product = Product::findOrFail($id);
    	// return view ('cart',compact('product'));
      return view('cart');
    }


    public function probyManu($ma)
    {

        $pro = Producer::findOrFail($ma)->Product;
      //  $pro = Producer::where('Product_id','=',$ma)->select('*');

        return view ('productByManufacturer',compact('pro'));
    } 

    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('products')
            ->where('name', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="/detail/'. $row->id .'">'.$row->name.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
    }
}
