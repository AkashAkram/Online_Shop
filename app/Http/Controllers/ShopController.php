<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use App\Category;
use Illuminate\Support\Facades\Input;

class ShopController extends Controller
{
    protected $request;

    public function __construct(\Illuminate\Http\Request $request)
    {
        //$this->middleware('auth');

        $this->cat = Category::where('parent_id', 0)->get();
        $this->request = $request;

    }


    public function index()
    {
        $categories = $this->cat;
        return view('shop.home', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addproduct()
    {
        $categories = $this->cat;
        $subcat = Category::where('has_child', 0)->get();
        return view('shop.addproduct', compact('categories', 'subcat'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postproduct(Request $request)
    {
        $this->validate($request, [

            'default_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $image = $request->file('default_image');
        $cat_id = $request->input('cat_id');
        $cat = Category::find($cat_id);
        $products = Product::where('cat_id', $cat_id)->get();
        $cat_name = substr($cat->category, 0, 3);
        $pro_num = count($products) + 1;
        $destinationPath = public_path('/surfhouse/product_images');

        $input['imagename'] = $cat_name . '-' . $pro_num . '.' . $image->getClientOriginalExtension();

//var_dump(count($products));
        $image->move($destinationPath, $input['imagename']);

        $pro = new Product(
            [
                'code' => $request->input('code'),
                'product_name' => $request->input('product_name'),
                'price' => $request->input('product_price'),
                'default_image' => $input['imagename'],
                'cat_id' => $request->input('cat_id')
            ]
        );
        $pro->save();

        //print($request->input('default_image'));

        // $categories = $this->cat;
        return Redirect('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showcategory($id)
    {
        $categories = Category::where('parent_id', $id)->get();
        $products = Product::where('cat_id', $id)->get();
        //var_dump(count($sub_categories));
        $cat_id = $id;
        $i = 0;
        do {
            $base_cat = Category::find($id);
            $cat_tree[$i] = $base_cat;
            $id = $base_cat->parent_id;
            $i++;
        } while ($id != '0');

        $category_tree = array_reverse($cat_tree);
        $len = count($category_tree) - 1;
        //print(count($sub_categories));
        if (count($categories) == 0) {
            $categories = $this->cat;
            return view('shop.allproducts', compact('categories', 'products', 'len', 'category_tree'));
        } else {
            return view('shop.category', compact('categories', 'cat_id', 'len', 'category_tree'));;
        }
    }


    public function singleproduct($id)
    {
        $categories = $this->cat;
        $product = Product::where('id', $id)->get();
        return view('shop.singleproduct1', compact('categories', 'product'));
    }

    public function cart()
    {
        Session::flush();
        $data = $this->request->all();
        //var_dump($data);

        //  if (Session::has('items')) {
        /*            Session::push('items', $data);
                    Session::save();
                } else {*/
        Session::put('items', $data);

        Session::save();
        // }
        $zzz = Session::get('items');
        //var_dump(count($zzz));
        /*foreach ($zzz as $z)
        {
            echo $z."<br>";
        }*/

        $categories = $this->cat;
        return view('shop.cart', compact('zzz', 'categories'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
