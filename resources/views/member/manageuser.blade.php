@extends('member.layout.layout')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-1" role="alert" id="alert_upload">  
    <strong>{{ $message }}</strong>
    <button type="button" class="btn btn-close sm" data-dismiss="alert" aria-label="Close">
        <strong>X</strong>
    </button>  
</div>
@endif

    <div class="row">
        <div class="col-lg">
            <div class="content-wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                <button class="btn btn-primary"><i class="mdi mdi-account-plus"></i>Add User</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="manage_table" name="manage_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Nama</th>
                            <th valign="middle">Email</th>
                            <th valign="middle">Password</th>
                            <th valign="middle">Role</th>
                        </tr>
                    </thead>
                        <tbody>
                            
                        </tbody>
                    </table>                  
            </div><!--table-->

        </div>
        </div>
        </div>
    </div>
    <!-- row -->

        

    
@endsection