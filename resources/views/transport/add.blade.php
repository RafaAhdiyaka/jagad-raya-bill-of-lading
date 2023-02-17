
{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Transport</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/transport/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="2">Pre-carriage by</label>
                    <select class="form-control" id="1" name="precarriage">
                                <option value="1">Air</option>
                                <option value="2">Sea</option>
                                <option value="3">Road</option>
                                <option value="3">Rail</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="1">Place Of Receipt</label>
                    <input type="text" class="form-control" id="2" placeholder="Place Of Receipt" name="placeofreceipt">
                </div>
                <div class="form-group">
                    <label for="1">Vessel</label>
                    <input type="text" class="form-control" id="3" placeholder="Vessel" name="vessel">
                </div>
                <div class="form-group">
                    <label for="1">Voyage Number</label>
                    <input type="text" class="form-control" id="4" placeholder="Voyage Number" name="voyagenumber">
                </div>
                <div class="form-group">
                    <label for="1">Port Of Loading</label>
                    <input type="text" class="form-control" id="5" placeholder="Port Of Loading" name="portofloading">
                </div>
                <div class="form-group">
                    <label for="1">Port OF Discharge</label>
                    <input type="text" class="form-control" id="6" placeholder="Port Of Discharge" name="portofdischarge">
                </div>
                <div class="form-group">
                    <label for="1">Place Of Delivery</label>
                    <input type="text" class="form-control" id="7" placeholder="Place Of Delivery" name="placeofdelivery">
                </div>
                <div class="form-group">
                    <label for="1">Final Destination</label>
                    <input type="text" class="form-control" id="8" placeholder="Final Destination" name="finaldestination">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/transport" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection