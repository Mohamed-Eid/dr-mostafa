@extends('dashboard.layouts.app')

@section('content')
    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Bread crumb -->
                <ol class="breadcrumb bg-white">
                    <li><a href="Admindashboard.php">الرئيسية</a></li>
                    <li class="active">مكتبة الصور</li>
                </ol>
            <!-- Gallery -->
            <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            ألبومات الصور
                        </h5>
                        @if(auth()->user()->hasPermission('create_images'))
                        <a href="{{ route('dashboard.images.create') }}" class="btn bg-blue pull-left">
                            <i class="material-icons">library_add</i>
                            إضافة ألبوم
                        </a>
                        @endif
                    </div>
                    <div class="body js-sweetalert">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 20px!important">#</th>
                                    <th>الصورة</th>
                                    <th style="width: 100px!important">إجراءات</th>
                                </tr>
                            </thead>
                            
                            <tbody> 
                                @foreach ($images as $index => $image)
                                <tr>
                                    <td class="text-center">{{$index + 1}}</td>

                                    <td>
                                        <img src="{{$image->image_path}}" alt="البومات الصور" style="width:100px;">
                                    </td>

                                    <td class="text-center">
                                        @if(auth()->user()->hasPermission('delete_images'))
                                        @include('partials._delete_btn',['route'=>  route('dashboard.images.destroy',$image)])
                                        @endif
                                    </td>
                                </tr>                                    
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
   </section>  
   <!-- #END# Content -->

@endsection
