<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function add($product_id)
    {
        $data = Product::find($product_id);
        $images = DB::table('images')->where('product_id','=', $product_id)->get();
        return view('admin.image_add',['data' => $data, 'images' => $images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id)
    {
        $image = new Image();
        $image->title = $request->input('title');
        $image->product_id = $product_id;
        if($request->file('image')!=null) {
            $image->image = Storage::putFile('images', $request->file('image'));
        }
        $image->save();

        return redirect()->route('admin_image_add', ['product_id' => $product_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$product_id)
    {
        $image = Image::find($id);
        $image->delete();
        $max = DB::table('images')->max('id') + 1;
        DB::statement("ALTER TABLE images AUTO_INCREMENT =  $max");

        return redirect()->route('admin_image_add', ['product_id' => $product_id]);
    }
}
