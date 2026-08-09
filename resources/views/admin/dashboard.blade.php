@extends('admin.layouts.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Products</p>
                                    <a href="{{ route('products.list') }}"><h4 class="my-1 text-info">{{ $total_products }}</h4></a>
                                    <p class="mb-0 font-13">Total products added till now</p>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i
                                        class='bx bxs-cart'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Product Enquiries</p>
                                    <a href="{{ route('product-enquiries') }}"><h4 class="my-1 text-danger">{{ $product_enqs }}</h4></a>
                                    <p class="mb-0 font-13">All the product enquiries</p>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i
                                        class='bx bxs-wallet'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-none">
                    <div class="card radius-10 border-start border-0 border-4 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Bounce Rate</p>
                                    <h4 class="my-1 text-success">34.6%</h4>
                                    <p class="mb-0 font-13">-4.5% from last week</p>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i
                                        class='bx bxs-bar-chart-alt-2'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-4 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Other Enquiries</p>
                                    <a href="{{ route('contacts.list') }}">
                                        <h4 class="my-1 text-warning">{{ $other_enqs }}</h4>
                                    </a>
                                    <p class="mb-0 font-13">Other enquiries list</p>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i
                                        class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->


        </div>
    </div>
    <!--end page wrapper -->

@endsection