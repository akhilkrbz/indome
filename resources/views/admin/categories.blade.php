@extends('admin.layouts.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                @include('admin.layouts.breadcrumb')


            </div>


            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">{{ session('sub_page') }}</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="m-2">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#categoryModal"><i class="bx bx-plus"></i> New Category</button>
                        </div>
                    </div>
                    @include('admin.layouts.alerts')
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $key => $contact)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contact->category_name }}</td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#subCategoryModal_{{ $contact->id }}"><i
                                                    class="bx bx-plus"></i>Add
                                                Subcategory</button>

                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#subCategoryViewModal_{{ $contact->id }}"><i
                                                    class="bx bx-list-ol"></i>View
                                                Subcategory</button>



                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="subCategoryModal_{{ $contact->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <form class="row g-3" action="{{ route('sub-category.add') }}" method="post">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">New Sub Category - {{ $contact->category_name }}
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        @csrf

                                                        <input type="hidden" name="category_id" value="{{ $contact->id }}">

                                                        <div class="col-md-12">
                                                            <label for="bsValidation3" class="form-label">Sub Category
                                                                Name</label>
                                                            <input type="text" name="sub_category_name" class="form-control"
                                                                id="bsValidation3" placeholder="Sub Category Name" required="">
                                                            <div class="invalid-feedback">
                                                                Please choose a name.
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="subCategoryViewModal_{{ $contact->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Sub Categories - {{ $contact->category_name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    @if(!isset($contact->sub_categories) || count($contact->sub_categories) == 0)
                                                        <p>No subcategories found.</p>
                                                    @else

                                                        @foreach($contact->sub_categories as $key => $subCategory)
                                                            <span class="badge bg-dark m-2">{{ $subCategory->sub_category_name }}</span>
                                                        @endforeach

                                                    @endif

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                @endforeach
                            </tbody>

                        </table>

                    </div>

                    {{ $list->links() }}

                </div>


            </div>

        </div>
    </div>
    <!--end page wrapper -->


    <!-- Modal -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <form class="row g-3" action="{{ route('category.add') }}" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        @csrf

                        <div class="col-md-12">
                            <label for="bsValidation3" class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="bsValidation3"
                                placeholder="Category Name" required="">
                            <div class="invalid-feedback">
                                Please choose a name.
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection