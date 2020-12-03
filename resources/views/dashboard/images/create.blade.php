@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="gallery.php">مكتبة الصور</a></li>
            <li class="active">إضافة ألبوم</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            إضافة ألبوم
                        </h5>
                    </div>
                    <div class="body">
                        <div class="row">
                            @include('partials._errors')
                            <form method="POST" action="{{ route('dashboard.images.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-9 col-sm-3">
                                    <p><i class="material-icons m-l-5">image</i><b>صور </b></p>
                                    <input id="forslider" name="images[]" type="file" multiple>
                                </div>
                                <div class="col-xs-12">
                                    <input type="submit" value="حفظ" class="btn bg-blue btn-lg waves-effect"
                                        onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
