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
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">#</th>
                                    <th>الإسم</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الهاتف</th>
                                    <th>الرسالة</th>
                                    <th style="width: 200px;">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $index => $message)
                                <tr>
                                    <td>{{$index +1 }}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{$message->message}}</td>


                                    <td class="text-center">
                                    @include('partials._delete_btn',['route'=>  route('dashboard.messages.destroy' , $message)])
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
