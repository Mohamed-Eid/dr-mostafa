@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="services-cats.php">خدماتنا</a></li>
            <li class="active">إضافة خدمة</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            إضافة خدمة
                        </h5>
                    </div>
                    <div class="body">

                        <div class="row">
                            <form method="POST" action="{{ route('dashboard.services.store') }}" enctype="multipart/form-data">
                                @csrf
                                @include('partials._errors')

                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        @foreach(config('translatable.locales') as $locale)
                                        <div class="col-md-6  col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">turned_in</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="{{$locale}}[title]"
                                                        placeholder="@lang('site.service_title_'.$locale)">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-3">
                                    <p><i class="material-icons m-l-5">image</i><b>الايكون</b></p>
                                    <input id="file-1" type="file" name="icon">
                                </div>

                                <div class="col-md-6 col-sm-3">
                                    <p><i class="material-icons m-l-5">image</i><b>الصورة</b></p>
                                    <input id="file-2" type="file" name="image">
                                </div>


                                @foreach(config('translatable.locales') as $locale)
                                <div class="col-xs-12">
                                    <p><i class="material-icons">lightbulb_outline</i><b>@lang('site.service_desc_'.$locale)</b></p>
                                    <textarea id="tinymce" name="{{$locale}}[description]" rows="3"></textarea>
                                </div>
                                @endforeach


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
