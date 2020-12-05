@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active">صلاحيات وأدوار</li>
        </ol>
        <!-- table -->
        <div class="row clearfix js-sweetalert">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">إدارة  الصلاحيات</h5>
                        @if(auth()->user()->hasPermission('create_roles'))
                        <a href="{{route('dashboard.roles.create')}}" class="btn bg-blue pull-left">
                            <i class="material-icons">library_add</i>
                            إضافة </a>
                        @endif
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width:15px;">#</th>
                                    <th>الإسم</th>
                                    <th>الاسم المعروض</th>
                                    <th>وصف</th>
                                    <th style="width:120px;">إجراءات</th>
                                </tr>
                            </thead> 

                            <tbody>
                                @foreach ($roles as $index => $role)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        <p>{{$role->name}} </p>
                                    </td>

                                    <td>
                                        <p>{{$role->display_name}} </p>
                                    </td>

                                    <td>
                                        <p>{{$role->description}} </p>
                                    </td>

                                    <td class="text-center">

                                        @if(auth()->user()->hasPermission('update_roles'))
                                        <a href="{{ route('dashboard.roles.edit',$role) }}" class="btn btn-primary  m-5" data-toggle="tooltip"
                                            data-placement="top" data-original-title="تعديل ">
                                            <i class="material-icons">settings</i>
                                        </a>
                                        @endif

                                        @if(auth()->user()->hasPermission('delete_roles'))
                                        <form method="post"
                                        action="{{route('dashboard.roles.destroy' , $role)}}"
                                        style="display: inline-block">
                                        @csrf()
                                        @method('delete')
                                        <button class="btn btn-danger m-5 waves-effect delete_item_in_form"
                                            data-toggle="tooltip" data-placement="top" data-original-title="مسح"><i
                                                class="material-icons">delete_forever</i>
                                        </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>                                    
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #END# content -->
@endsection
