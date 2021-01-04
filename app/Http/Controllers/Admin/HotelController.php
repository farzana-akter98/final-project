<?php

namespace App\Http\Controllers\Admin;
use App\Hotels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function index(){
        $hotels=Hotels::all();
        return view('admin.hotels.hotel',compact('hotels'));
    }
    public function create(){
        return view('admin.hotels.create-hotel');
    }
    public function store(Request $request){
        $hotel=new Hotel();
        $hotel->name=$request->name;
        $hotel->address=$request->address;
        $hotel->website=$request->website;
        $hotel->contact=$request->contact;
        $hotel->save();
        return redirect()->to('admin/all-Hotel');
    }
    public function update_page($id){
        $hotel= Hotels::find($id);
        return view('admin.hotels.update-hotel',compact('hotels'));
    }
    public function update(Request $request){
        $hotel=Hotels::find($request->id);
        $hotel->name=$request->name;
        $hotel->address=$request->address;
        $hotel->website=$request->website;
        $hotel->contact=$request->contact;
        $hotel->save();
        return redirect()->to('admin/all-Hotel');
    }
    public function delete($id){
        $hotel= Hotels::find($id);
        $hotel->delete();
        return redirect()->back();
    }
}
