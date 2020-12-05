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
                                    <th>طريقة التواصل</th>
                                    <th>الوقت المفضل للزيارة</th>
                                    <th>الايام المفضلة للزيارة</th>
                                    <th>الإسم</th>
                                    <th>البريد الإلكتروني</th>
                                    <th>الهاتف</th>
                                    <th>الرسالة</th>
                                    <th style="width: 200px;">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $index => $appintment)
                                <tr>
                                    <td>{{$index +1 }}</td>
                                    <td>{{$appintment->contact_method}}</td>
                                    <td>{{$appintment->visit_time}}</td>
                                    <td>
                                        @foreach ($appintment->days as $day)
                                            {{get_day_name($day)}}
                                        @endforeach                                    
                                    </td>
                                    <td>{{$appintment->name}}</td>
                                    <td>{{$appintment->email}}</td>
                                    <td>{{$appintment->phone}}</td>
                                    <td>{{$appintment->message}}</td>


                                    <td class="text-center">
                                        @if(auth()->user()->hasPermission('delete_contact'))
                                        @include('partials._delete_btn',['route'=>  route('dashboard.appointments.destroy' , $appintment)])
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
