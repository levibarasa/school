@extends('scafold.admin')

@section('content')

    <div class="d-sm-flex align-items-center mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">App</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div class="dropdown">

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#usersModal"  data-target="#usersModal" data-toggle="modal" >New Users</a>
                <a class="dropdown-item" href="#">View Roles</a>
            </div>
        </div>
    </div>
    <div class="container">



        <div data-label="owners" class="df-example demo-table w-100 ">
            <table id="owners" class="table">
                <thead>
                <tr>
                    <th class="wd-20p">Transaction ID</th>
                    <th class="wd-20p">Payer Name</th>
                    <th class="wd-15p">Payment Type</th>
                    <th class="wd-15p">Amount</th>
                    <th class="wd-15p">Date</th>
                </tr>
                </thead>
            </table>
        </div>

        <div class="modal fade" id="usersModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content tx-14">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">New Owner</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form data-parsley-validate="" novalidate="" method="POST" action="{{ route('users.store') }}">
                            @csrf
                            {{--  <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                            </div> --}}

                            <div class="form-group ">
                                <label for="inputEmail4">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                            </div>





                            <div class="form-group">
                                <label for="inputAddress">Phone Number</label>
                                <input type="text" class="form-control" id="inputAddress" name="phone" required >
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Email</label>
                                <input type="email" class="form-control" name="email" id="inputAddress" >
                            </div>

                            <div class="form-group">
                                <label for="inputAddress">Password</label>
                                <input type="password" class="form-control" name="password" id="inputAddress" >
                            </div>








                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary tx-13">Save changes</button>
                    </div>

                    </form>


                </div>
            </div>
        </div>
        @stop
        @push("scripts")

            <script src="../lib/prismjs/prism.js"></script>
            <script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
            <script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
            <script src="../lib/select2/js/select2.min.js"></script>
            <script src="../lib/parsleyjs/parsley.min.js"></script>

            <script>
                $(function () {



                    'use strict'


                    var url = "{!! url('payments')!!}";
                    $('#owners').DataTable({
                        responsive: true,
                        processing: true,
                        serverSide: true,
                        ajax: url,
                        language: {
                            searchPlaceholder: 'Search...',
                            sSearch: '',
                            lengthMenu: '_MENU_ items/page',
                        },
                        /*"columnDefs": [
                            {"width": "40%", "targets": 3},
                            {"width": "10%", "targets": 1}
                        ],
                        "pageLength": 50,
                        'order': [[4, 'desc']],*/
                        columns: [

                            /*{data: 'project_id', name: 'project_id'},*/
                            {data: 'mpesaref', name: 'mpesaref'},
                            {data: 'payer', name: 'payer'},

                            {data: 'payment_type', name: 'payment_type'},
                            {data: 'amount', name: 'amount'},
                            {data: 'created_at', name: 'created_at'},

                        ],
                        "drawCallback": function () {

                        },
                        "initComplete": function () {

                        }
                    });









                });
            </script>

            <script>

                $("#select2").select2({
                    dropdownParent: $("#usersModal"),
                    placeholder: 'Choose one',
                    allowClear: true,
                    maximumSelectionLength: 2
                });


            </script>

    @endpush
