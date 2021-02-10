<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Product::where('user_id',Auth::id())->get();
        $setting = Setting::first();
        return view('home.user_product',['datalist'=> $datalist,'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        $setting = Setting::first();
        return view('home.user_product_add',['datalist' => $datalist,'setting'=>$setting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status= $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->user_id= Auth::id();
        $data->detail= $request->input('detail');
        $data->image = Storage::putFile('images',$request->file('image'));

        $userRoles = Auth::user()->roles->pluck('name');
        if($userRoles->contains('admin')) {
            $data->status = 'True';
        }else{
            $data->status = 'False';
        }
        $data->save();
        return redirect()->route('user_products');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $setting = Setting::first();
        $datalist = Category::with('children')->get();
        return view('home.user_product_edit',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Product $product, $id)
    {
        $data = Product::find($id);
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images',$request->file('image'));
        }
        $data->save();

        return redirect()->route('user_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data -> delete();
        return redirect()->route('user_products');
    }
}
