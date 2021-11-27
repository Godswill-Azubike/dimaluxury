
@extends('layouts.app')

@section('row-contents')

<div class="row">
    <div class="col-12">
        <div class="card p-2">
            <h5>Customer Orders</h5>
            <div>
                <span class="active"><a href="{{ route('dashboard') }}">Dashboard</a> / orders</span>
            </div>
        </div>
    </div>
</div>

<h2 class="section-title">Total of <span class="text-success">({{ $orderData->count() }}) </span> Order placed</h2>
<div class="row">
    @if ($orderData->count() > 0)
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md v_center">
                    <tr>
                        <th>Dated</th>
                        <th>Product Name</th>
                        <th>Total Cost '(₦)'</th>
                        <th>Quantity</th>
                        <th>Payment</th>
                        <th>Order Status</th>
                        <th>Details</th>
                        <th>...</th>
                    </tr>
                    @foreach ($orderData as $order)
                    <tr>
                        <td>{{ $order->created_at->diffForHumans() }}</td>

                        <td>{{ $order->product->product_name }}</td>
                        <td><div class="badge badge-success">₦ {{ $order->product->unite_price * $order->product_quantity }}</div></td>
                        <td>{{ $order->product_quantity}}</td>

                        @if ($order->is_paid == false)
                            <td><div class="badge badge-warning">pending...</div></td>
                        @else
                            <td><div class="badge badge-success">paid</div></td>
                        @endif
                        @if ($order->is_completed == false)
                            <td>Un-completed</td>
                        @else
                            <td>completed</td>
                        @endif
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $order->id }}"><i class="fa fa-eye"></i></button></td>
                        <td>
                            <div class="media-cta">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                                    <div class="dropdown-menu">
                                        {{-- <a class="dropdown-item has-icon btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#"><i class="fa fa-eye"></i> View Order Details</a> --}}
                                        <a class="dropdown-item has-icon" href="#"><i class="fa fa-check"></i> Mark as Paid</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fa fa-check"></i> Mark as completed</a>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>
                    {{-- @section('modals') --}}
                    <!-- Modal -->
                    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal{{ $order->id }}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Order details for {{ $order->product->product_name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Customer Details</p>
                                    <small><b>Name:</b> {{ $order->customer_first_name }} {{ $order->customer_last_name }}</small>
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endsection --}}
                    @endforeach

                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                {{ $orderData->links() }}
            </div>
        </div>
    </div>
    @else
    <div class="col-12 col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="empty-state">
                    <div class="empty-state-icon"><i class="fas fa-question"></i></div>
                    <h2>You have not received any product order at the moment</h2>
                    <p class="lead">Sorry we can't find any data</p>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

@endsection
