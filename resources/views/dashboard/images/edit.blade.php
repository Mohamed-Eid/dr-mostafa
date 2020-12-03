@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="gallery.php">مكتبة الصور</a></li>
            <li class="active">تعديل فيديو</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            تعديل فيديو
                        </h5>
                    </div>
                    <div class="body">
                        <div class="row">
                            <form method="POST" action="{{ route('dashboard.videos.update',$video) }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <p><i class="material-icons">movie</i><b>رابط الفيديو</b></p>
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{ $video->link }}" name="link" placeholder="رابط الفيديو">
                                        </div>
                                    </div>
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
