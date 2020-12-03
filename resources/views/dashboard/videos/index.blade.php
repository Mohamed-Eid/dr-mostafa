@extends('dashboard.layouts.app')

@section('content')

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active">مكتبة الفيديو</li>
        </ol>
        <!-- Gallery -->
        <div class="card">
            <div class="header">
                <h5 class="d-inline-block">
                    مكتبة الفيديو
                </h5>
                <a href="{{ route('dashboard.videos.create') }}" class="btn bg-blue pull-left">
                    <i class="material-icons">library_add</i>
                    إضافة فيديو
                </a>
            </div>
            <div class="body js-sweetalert">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th style="width: 20px!important">#</th>
                            <th>عنوان الفيديو</th>
                            <th style="width: 100px!important">إجراءات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($videos as $index => $video)
                        <tr>
                            <td class="text-center">{{ $index+1 }}</td>
                            
                            <td>
                                <iframe width="250" height="100" src="{{$video->embeded_link()}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </td>

                            <td class="text-center">
                                <a href="{{route('dashboard.videos.edit',$video)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                    data-original-title="تعديل ">
                                    <i class="material-icons">settings</i>
                                </a>
                                @include('partials._delete_btn',['route'=>  route('dashboard.videos.destroy',$video)])

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
