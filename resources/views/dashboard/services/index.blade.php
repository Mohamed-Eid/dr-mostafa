@extends('dashboard.layouts.app')

@section('content')

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="services-cats.php">أقسام خدماتنا</a></li>
            <li class="active">خدماتنا</li>
        </ol>
        <!-- table -->
        <div class="row clearfix js-sweetalert">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            خدماتنا
                        </h5>
                        <div class="pull-left m-r-20 m-l-20">
                            <a href="{{ route('dashboard.services.create') }}" class="btn bg-blue">
                                <i class="material-icons">library_add</i>
                                إضافة خدمة
                            </a>
                        </div>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">#</th>
                                    <th>الإسم</th>
                                    <th>نبذة</th>
                                    <th>تاريخ النشر</th>
                                    <th style="width: 200px;">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $index => $service)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        <li>{{$service->translate('ar')->title}}</li>
                                        <li>{{$service->translate('en')->title}}</li>
                                    </td>
                                    <td>
                                        <li>{!! get_snippts($service->translate('ar')->description , 5) !!}</li>
                                        <li>{!! get_snippts($service->translate('en')->description , 5) !!}</li>
                                    </td>
                                    <td>
                                        <p>{{$service->created_at->diffForHumans()}}</p>
                                    </td>

                                    <td class="text-center">

                                        <a href="{{ route('dashboard.services.edit',$service) }}" class="btn btn-primary  m-5" data-toggle="tooltip"
                                            data-placement="top" data-original-title="تعديل ">
                                            <i class="material-icons">settings</i>
                                        </a>
                                        <form method="post"
                                        action="{{route('dashboard.services.destroy' , $service)}}"
                                        style="display: inline-block">
                                        @csrf()
                                        @method('delete')
                                        <button class="btn btn-danger m-5 waves-effect delete_item_in_form"
                                            data-toggle="tooltip" data-placement="top" data-original-title="مسح"><i
                                                class="material-icons">delete_forever</i>
                                        </button>
                                        </form>
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
