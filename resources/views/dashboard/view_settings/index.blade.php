@extends('dashboard.layouts.app')

@section('content')


<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active">سلادير الصفحة الرئيسية و مميزات الشركة</li>
        </ol>
        <!-- content -->
        <form action="{{ route('dashboard.setting.update_edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card p-20">
                <div class="body">
                    <!-- slider -->
                    @include('dashboard.view_settings.includes.slider')
                    <!--#END# slider -->
                    
                    <!-- about -->
                    @include('dashboard.view_settings.includes.about_section')

                    <!--#END# about -->
                    <div class="col-xs-12 m-t-5">
                        <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                            onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>


@endsection
