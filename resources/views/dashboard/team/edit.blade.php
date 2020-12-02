@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="teamwork.php">فريق العمل</a></li>
            <li class="active">تعديل عضو</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            تعديل عضو
                        </h5>
                    </div>
                    <div class="body">
                        <div class="row">
                            <form method="POST" action="{{ route('dashboard.members.update',$member) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('partials._errors')
                                
                                <div class="col-md-3 col-sm-3">
                                    <p><i class="material-icons m-l-5">image</i><b>صورة العضو</b></p>
                                    <input id="member" type="file" name="image">
                                    <div class="col-sm-12">
                                        <img src="{{ $member->image_path }}"
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
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="{{$locale}}[name]"
                                                        placeholder="@lang('site.name_'.$locale)" value="{{$member->translate($locale)->name}}">
                                                </div>
                                            </div>
                                        </div>                                        
                                        @endforeach

                                    
                                        @foreach(config('translatable.locales') as $locale)
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">business</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="{{$locale}}[job]"
                                                    placeholder="@lang('site.job_name_'.$locale)" value="{{$member->translate($locale)->job}}">
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach



                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">phone</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="phone" 
                                                    placeholder="رقم الهاتف" value="{{$member->phone}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="email" class="form-control date" name="email"
                                                        placeholder="البريد الإلكتروني" value="{{$member->email}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @foreach(config('translatable.locales') as $locale)
                                <div class="col-xs-12">
                                    <p><i class="material-icons">lightbulb_outline</i><b>@lang('site.desc_'.$locale)</b></p>
                                    <textarea id="tinymce" rows="3" name="{{$locale}}[description]">{{$member->translate($locale)->description}}</textarea>
                                </div>
                                @endforeach


                                <!-- social media -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-group">
                                        <p><b>رابط فيس بوك</b></p>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                placeholder="ُhttp://www.facebook.com" name="facebook" value="{{$member->facebook}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-group">
                                        <p><b>رابط تويتر</b></p>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                placeholder="ُhttp://www.twitter.com" name="twitter" value="{{$member->twitter}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="input-group">
                                        <p><b>رابط لينكد إن</b></p>
                                        <div class="form-line">
                                            <input type="text" class="form-control date"
                                                placeholder="ُhttp://www.linkedin.com" name="linked_in" value="{{$member->linked_in}}">
                                        </div>
                                    </div>
                                </div>

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
