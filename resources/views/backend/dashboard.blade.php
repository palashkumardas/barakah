@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
           <div class="card-body table-responsive">
                <table class="mb-0 table table-bordered table-striped" id="data_table">
                    <!-- <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Contact Preferences</th>
                            <th>Register</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Number</td>
                            <td>Address</td>
                            <td>Contact Preferences</td>
                            <td>Register</td>
                        </tr>
                    </tbody> -->
                </table>
            </div>

           
        </div>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#data_table').DataTable();
    });
 </script>

@endpush
