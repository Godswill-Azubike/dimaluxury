
@extends('layouts.app')

@section('row-contents')

<div class="row">
    <div class="col-12">
        <div class="card p-2">
            <h5>All Products</h5>
            <div>
                <span class="active"><a href="{{ route('dashboard') }}">Dashboard</a> / all products</span>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<h2 class="section-title">Total of <span class="text-success">({{ $productData->count() }}) </span> Products in Stock</h2>
<div class="row">
    @if ($productData->count() > 0)
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md v_center">
                    <tr>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Total Unit Sold</th>
                        <th>Current Stock</th>
                        <th>Sales Status</th>
                        <th>...</th>
                    </tr>
                    @foreach ($productData as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>

                        <td><div class="badge badge-success">₦ {{ $product->unite_price }}</div></td>
                        <td><div class="badge badge-info">{{ $product->total_unit_sold }}</div></td>
                        <td>{{ $product->current_stock }}</td>
                        @if ($product->sales_status == true)
                            <td><div class="badge badge-secondary">Sales is Enabled</div></td>
                        @else
                            <td><div class="badge badge-danger">Sales is Disabled</div></td>
                        @endif
                        <td>
                            <div class="media-cta">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Options</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item has-icon" href="#"><i class="fa fa-eye"></i> View/edit Product</a>
                                        @if ($product->sales_status == true)
                                            <a class="dropdown-item has-icon" href="{{ route('disableSale', $product->id) }}"><i class="fa fa-trash"></i> Disable Sales</a>
                                        @else
                                            <a class="dropdown-item has-icon" href="{{ route('enableSale', $product->id) }}"><i class="fa fa-check"></i> Enable Sales</a>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach

                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                {{ $productData->links() }}
            </div>
        </div>
    </div>
    @else
    <div class="col-12 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="empty-state">
                    <div class="empty-state-icon"><i class="fas fa-question"></i></div>
                    <h2>You have not added any product at the moment</h2>
                    <p class="lead">Sorry we can't find any data</p>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

@endsection
