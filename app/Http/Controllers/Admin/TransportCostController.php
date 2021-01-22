<?php

namespace App\Http\Controllers\Admin;
use App\TransportCost;
use App\TransportType;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportCostController extends Controller
{
    public function index(){
        $transcosts = TransportCost::all();
        $transtypes = TransportType::all();
        $locations = Location::all();
        return view('admin.transport.transportCost.transportCost',compact('transcosts','transtypes','locations'));
    }
    public function create(){
        $locations = Location::all();
        $transtypes = TransportType::all();
        return view('admin.transport.transportCost.create-transportCost',compact('locations','transtypes'));
    }
    public function store(Request $request){
        $transcost=new TransportCost();  
        $transcost->location_id=$request->location_id;
        $transcost->transport_type_id=$request->transport_type_id;
        $transcost->price=$request->price;
        $transcost->save();
        return redirect()->to('admin/all-transcost');
    }
    public function update_page($id){
        $transcost=TransportCost::find($id);
        $locations = Location::all();
        $transtypes = TransportType::all();
        return view('admin.transport.transportCost.update-transportCost',compact('transcost','locations','transtypes'));
    }
    public function update(Request $request){
        $transcost=TransportCost::find($request->id);
        $transcost->location_id=$request->location_id;
        $transcost->transport_type_id=$request->transport_type_id;
        $transcost->price=$request->price;
        $transcost->save();
        return redirect()->to('admin/all-transcost');
      }
    public function delete($id){
        $transcost=TransportCost::find($id);
        $transcost->delete();
        return redirect()->back(); 
    }
}
