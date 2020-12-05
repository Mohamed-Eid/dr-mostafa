@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active">المشرفين</li>
        </ol>
        <!-- table -->
        <div class="row clearfix js-sweetalert">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">إدارة  المشرفين</h5>
                        @if(auth()->user()->hasPermission('create_users'))
                        <a href="{{route('dashboard.users.create')}}" class="btn bg-blue pull-left">
                            <i class="material-icons">library_add</i>
                            إضافة مشرف</a>
                        @endif
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width:15px;">#</th>
                                    <th>الإسم</th>
                                    <th>البريد الإلكتروني</th>
                                    <th style="width:120px;">إجراءات</th>
                                </tr>
                            </thead> 

                            <tbody>
                                @foreach ($users as $index => $user)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        <p>{{$user->first_name .' '.$user->last_name}} </p>
                                    </td>
                                    <td>
                                        <p>{{$user->email}}</p>
                                    </td>
                                    <td class="text-center">
                                        @if(auth()->user()->hasPermission('update_users'))
                                        <a href="{{ route('dashboard.users.edit',$user) }}" class="btn btn-primary  m-5" data-toggle="tooltip"
                                            data-placement="top" data-original-title="تعديل ">
                                            <i class="material-icons">settings</i>
                                        </a>
                                        @endif

                                        @if(auth()->user()->hasPermission('delete_users'))
                                        <form method="post"
                                        action="{{route('dashboard.users.destroy' , $user)}}"
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
