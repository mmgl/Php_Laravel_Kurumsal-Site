@extends('layouts.admin')

@section('title','Ürün Panel')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i>User Rolleri</h4>
                            @include('home.message')
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <th>{{$data->name}}</th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>{{$data->email}}</th>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        <table>
                                            @foreach($data->roles as $row)
                                                <tr>
                                                    <td> {{ $row->name }} </td>
                                                    <td>
                                                        <a class="btn btn-round btn-danger" href="{{route('admin_user_role_delete',['userid'=> $data->id,'roleid'=>$row->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Add Role</th>
                                    <td>
                                        <form role="form" action="{{ route('admin_user_role_add', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <select name="roleid">
                                                @foreach($datalist as $rs)
                                                    <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn-success">Add Role</button>
                                        </form>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

