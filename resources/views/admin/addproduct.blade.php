@extends('layouts.app')

@section('row-contents')

<div class="row">
    <div class="col-12">
        <div class="card p-2">
            <h5>Add Product</h5>
            <div>
                <span class="active"><a href="{{ route('dashboard') }}">Dashboard</a> / add product</span>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card p-4">
            <form action="{{ route('addProduct') }}" method="post">
                @csrf
                 <div class="row">
                    <div class="col-12 form-group">
                        <label for="">Product Name*</label>
                        <input type="text" class="form-control" name="product_name"  placeholder="e.g. OCEAN BODYWAVE" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Unit Price*</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">₦</span>
                        </div>
                        <input type="number" class="form-control" name="unite_price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Potential Profit Per Unit*</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">₦</span>
                        </div>
                        <input type="number" class="form-control" name="potential_profit" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Currently in Stock*</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="current_stock" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Product brife Discription <small><i>(optional_)</i></small></label>
                    <div class="input-group mb-3">
                        <textarea name="product_details" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save Product</button>
            </form>
        </div>
    </div>
</div>

@endsection
