@extends('admin.layouts.app')

@section('content')

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->


            @include('admin.layouts.breadcrumb')

            <!--end breadcrumb-->
            <h6 class="mb-0 text-uppercase">{{ session('sub_page') }}</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $key => $contact)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email_id }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                data-bs-target="#message_view_{{ $contact->id }}">View Message</button>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="message_view_{{ $contact->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">View Message</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>{!! $contact->message !!}</p>
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

@endsection