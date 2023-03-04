<?php

namespace App\Http\Controllers;

use App\Models\good;
use App\Models\shipment;
use App\Models\transport;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function index(Request $request){
        $data = shipment::all();
        $transport = transport::all();
        $good = good::all();

        if($request->has('search')){
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);
            $data = shipment::where('name','LIKE','%' .$request->search.'%')->paginate(5);
        } else{
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);

        }
        $data = shipment::paginate(5);
        
        return view('dashboardemployee.shipment.table',[
            'data' => $data,
            'transport' => $transport,
            'good' => $good
            // $data = shipment::paginate(5);
        ],compact('data'));
            // return view('shipment.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.shipment.add',[
            'data' => shipment::all(),
            'transport' => transport::all(),
            'good' => good::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'status' => ['required'],
            'transport_id' => ['required'],
            'shipping_date' => ['required'],
            'shipping_address_id' => ['required'],
            'finaldestination_id' => ['required'],
            'good_id' => ['required'],
        ]);

        shipment::create($validasi);

        return redirect()->route('shipment')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.shipment.edit',[
            'data' => shipment::find($id),
            'transport' => transport::all(),
            'good' => good::all()
        ]);
    }

    public function update(Request $request, $id){

        $data = shipment::find($id);
        $data->update($request->all());


        return redirect()->route('shipment')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = shipment::find($id);
        $data->delete();

        return redirect()->route('shipment')->with('delete','Data berhasil di Hapus!');
    }
}
