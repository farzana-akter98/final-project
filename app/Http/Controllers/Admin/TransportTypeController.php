<?php

namespace App\Http\Controllers\Admin;
use App\TransportType;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportTypeController extends Controller
{
    public function index(){
        $transtypes = TransportType::all();
        $locations = Location::all();
        return view('admin.transport.transportType.transportType',compact('transtypes','locations'));
    }
    public function create(){
        $locations = Location::all();
        return view('admin.transport.transportType.create-transportType',compact('locations'));
    }
    public function store(Request $request){
      $transtype=new TransportType();  
      $transtype->location_id=$request->location_id;
      $transtype->type=$request->type;
      $transtype->transport_slug=str_slug($request->type,'_');
      $transtype->save();
      return redirect()->to('admin/all-transtype');
    }
    public function update_page($id){
        $transtype=TransportType::find($id);
        $locations = Location::all();
        return view('admin.transport.transportType.update-transportType',compact('transtype','locations'));
    }
    public function update(Request $request){
        $transtype=TransportType::find($request->id);
        $transtype->location_id=$request->location_id;
        $transtype->type=$request->type;
        $transtype->transport_slug=str_slug($request->type,'_');
        $transtype->save();
        return redirect()->to('admin/all-transtype');
      }
    public function delete($id){
      $transtype=TransportType::find($id);
      $transtype->delete();
      return redirect()->back(); 
    }
}
