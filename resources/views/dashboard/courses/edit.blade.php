@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="teamwork.php">فريق العمل</a></li>
            <li class="active">إضافة كورس</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            إضافة كورس
                        </h5>
                    </div>
                    <div class="body">
                        <div class="row">
                            <form method="POST" action="{{ route('dashboard.courses.update',$course) }}" enctype="multipart/form-data">
                                @csrf
                                @include('partials._errors')
                                @method('PUT')
                                <div class="col-md-3 col-sm-3">
                                    <p><i class="material-icons m-l-5">image</i><b>صورة الكورس</b></p>
                                    <input id="member" type="file" name="image">
                                    <div class="col-sm-12">
                                        <img src="{{ $course->image_path }}"
                                            alt=""
                                            style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-9">
                                    <div class="row">

                                        @foreach(config('translatable.locales') as $locale)
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">title</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" value="{{ $course->translate($locale)->name }}" name="{{$locale}}[name]"
                                                        placeholder="@lang('site.course_name_'.$locale)">
                                                </div>
                                            </div>
                                        </div>                                        
                                        @endforeach

                                        @foreach(config('translatable.locales') as $locale)
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" value="{{ $course->translate($locale)->instructor }}" class="form-control date" name="{{$locale}}[instructor]"
                                                        placeholder="@lang('site.instructor_name_'.$locale)">
                                                </div>
                                            </div>
                                        </div>                                        
                                        @endforeach



                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">attach_money</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="number" class="form-control date" value="{{ $course->cost }}" name="cost" 
                                                    placeholder="سعر الكورس">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                @foreach(config('translatable.locales') as $locale)
                                <div class="col-xs-12">
                                    <p><i class="material-icons">lightbulb_outline</i><b>@lang('site.course_desc_'.$locale)</b></p>
                                    <textarea id="tinymce" rows="3" name="{{$locale}}[about_course]">{{ $course->translate($locale)->about_course }}</textarea>
                                </div>
                                @endforeach

                                <hr>

                                @foreach(config('translatable.locales') as $locale)
                                <div class="col-xs-12">
                                    <p><i class="material-icons">lightbulb_outline</i><b>@lang('site.instructor_desc_'.$locale)</b></p>
                                    <textarea id="tinymce" rows="3" name="{{$locale}}[about_instructor]">{{ $course->translate($locale)->about_instructor }}</textarea>
                                </div>
                                @endforeach


                                <!-- #END# social media -->
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
