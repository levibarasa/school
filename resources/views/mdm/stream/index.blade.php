@extends('scafold.admin')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                    <li class="breadcrumb-item"><a href="dashboard-one.html#">School Management System</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Stream</li>
                </ol>
            </nav>
        </div> 
            <a class="btn btn-primary float-right btn-icon btn-sm"  type="button" href="#usersModal"  data-target="#usersModal" data-toggle="modal" >
            <i class="icon ion-ios-create mr-2"></i> Add New Stream
            </a> 
    </div>
    <div class="container pd-x-0"> 
    <div data-label="owners" class="df-example demo-table">
            <table id="owners" class="table">
                <thead> 
                <tr> 
                    <th class="wd-20p"> Name</th>  
                    <th class="wd-20p">Action</th>
                </tr>
                </thead>
            </table>
        </div>

        <div class="modal fade" id="usersModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content tx-14">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">New Stream</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form data-parsley-validate="" novalidate="" method="POST" action="{{ route('streams.store') }}">
                            @csrf
                            <div class="form-group ">
                                <label for="inputEmail4"> Stream Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
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


                    var url = "{!! url('streams')!!}";
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

                            /* 
                            name,motto,address,phone,email*/
                            {data: 'name', name: 'name'},  
                            {data: 'action', name: 'action', orderable: false, searchable: false}
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
