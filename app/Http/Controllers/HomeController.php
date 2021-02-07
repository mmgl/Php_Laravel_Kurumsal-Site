<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Messsage;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get(); //parent_id =0 olanları cocuklarıyla getir
    }

    public static function getSetting(){
        return $setting = Setting::first();
    }

    public function index(){
        $setting = Setting::first();
        $slider = Product::select('id','title','description','image','slug')->limit(3)->get();

        $data = [
            'setting'=>$setting,
            'slider'=>$slider,
        ];
        return view('home.index', $data);
    }

    public function product($id, $slug){
        $data = Product::find($id);
        $imagelist = Image::where('product_id',$id)->get();
        $setting = Setting::first();
        return view('home.product_detail', ['data' => $data,'setting'=>$setting,'imagelist' => $imagelist]);
    }

    public function getproduct(Request $request){
            $data = Product::where('title', $request->input('search'))->first();
            return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
    }


    public function menu($id, $slug){
        $data = Product::where('category_id', $id)->where('status','=','True')->get();
        $menu = Category::where('status','=','True')->find($id);
        $setting = Setting::first();

        return view('home.category_detail', ['data' => $data,'menu'=>$menu,'setting'=>$setting]);
    }

    public function aboutus(){
        $setting = Setting::first();
        return view('home.aboutus',['setting'=>$setting]);
    }
    public function contact(){
        $setting = Setting::first();
        return view('home.contact', ['setting'=>$setting]);
    }
    public function references(){
        $setting = Setting::first();
        return view('home.references', ['setting'=>$setting]);
    }
    public function faq(){
        $setting = Setting::first();
        return view('home.faq', ['setting'=>$setting]);
    }

    public function sendmessage(Request $request){

        $message = new Messsage();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();

        return redirect()->route('contact')->with('success', 'Mesajınız başarıyla gönderilmiştir.Teşekkürler');
    }

    public function login(){
        return view('admin.login');
    }

    public function logincheck(Request $request){

        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors(['email'=>'The provided credentials do not match our records.',]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
