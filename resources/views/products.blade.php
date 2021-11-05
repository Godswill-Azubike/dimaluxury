
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
                        <th>Location</th>
                        <th>Unit Price</th>
                        <th>Current Stock</th>
                        <th>...</th>
                    </tr>
                    @foreach ($productData as $package)
                    <tr>
                        <td>{{ $package->Product }}</td>
                        <td><div class="badge badge-success">{{ $package->Location }}</div></td>
                        <td><div class="badge badge-warning">₦ {{ $package->Unit_Price }}</div></td>

                        <td>{{ $package->Current_stock }}</td>

                        <td>
                            <div class="media-cta">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More Options</button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item has-icon" href="#"><i class="fa fa-check"></i> Confirm delivery</a> --}}
                                        <a class="dropdown-item has-icon" href="#"><i class="fa fa-eye"></i> View/edit Product</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fa fa-trash"></i> Delete Product</a>
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
                    <h2>You have not made any package delivery at the moment</h2>
                    <p class="lead">Sorry we can't find any data</p>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

@endsection
