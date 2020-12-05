@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active"> الكورسات</li>
        </ol>
        <!-- table -->
        <div class="row clearfix js-sweetalert">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">إدارة الكورسات</h5>
                        @if(auth()->user()->hasPermission('create_courses'))
                        <a href="{{route('dashboard.courses.create')}}" class="btn bg-blue pull-left">
                            <i class="material-icons">library_add</i>
                            إضافة كورس</a>
                        @endif
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width:15px;">#</th>
                                    <th>اسم الكورس</th>
                                    <th>سعر الكورس</th>
                                    <th>صورة</th>
                                    <th>اسم المدرس</th>
                                    <th style="width:120px;">إجراءات</th>
                                </tr>
                            </thead> 

                            <tbody>
                                @foreach ($courses as $index => $course)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        <li>{{$course->translate('ar')->name}}</li>
                                        <li class="m-t-10">{{$course->translate('en')->name}}</li>
                                    </td>
                                    <td>
                                        <p>{{$course->cost}}</p>
                                    </td>
                                    <td>
                                        <img src="{{$course->image_path}}" alt="البومات الصور" style="width:100px;">
                                    </td>
                                    <td>
                                        <li>{{$course->translate('ar')->instructor}}</li>
                                        <li class="m-t-10">{{$course->translate('en')->instructor}}</li>
                                    </td>
                                    <td class="text-center">
                                        
                                        @if(auth()->user()->hasPermission('edit_courses'))
                                        <a href="{{ route('dashboard.courses.edit',$course) }}" class="btn btn-primary  m-5" data-toggle="tooltip"
                                            data-placement="top" data-original-title="تعديل ">
                                            <i class="material-icons">settings</i>
                                        </a>
                                        @endif

                                        @if(auth()->user()->hasPermission('delete_courses'))
                                        @include('partials._delete_btn',['route'=>  route('dashboard.courses.destroy' , $course)])
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
