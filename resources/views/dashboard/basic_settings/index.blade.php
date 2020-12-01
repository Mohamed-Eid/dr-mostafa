@extends('dashboard.layouts.app')

@section('content')

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li class="active">إعدادات الموقع</li>
        </ol>
        <!-- content -->
        <div class="card p-20">
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#tab1" data-toggle="tab">الإعدادات العامة</a></li>
                    <li role="presentation"><a href="#tab2" data-toggle="tab">إعدادات الأرشفة</a></li>
                    <li role="presentation"><a href="#tab3" data-toggle="tab">بيانات الإتصال</a></li>
                    <li role="presentation"><a href="#tab4" data-toggle="tab">وسائل التواصل الإجتماعي</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- site settings -->
                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        @push('styles')
                            <style>
                                form p {
                                        text-align: right;
                                    }
                            </style>
                        @endpush
                        <form action="{{ route('dashboard.setting.update_edit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @php
                            $lang_setting = get_setting_by_key('default_lang');
                            $logo_setting = get_setting_by_key('logo');
                            $icon_setting = get_setting_by_key('icon');
                            $share_img_setting = get_setting_by_key('share_img');
                            @endphp
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <p><b>لغة الموقع الأساسية</b></p>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">language</i>
                                        </span>
                                        <div class="form-line">
                                            <select class="form-control show-tick" data-live-search="true" name="{{$lang_setting->id}}[value]">
                                                <option value="en" {{ $lang_setting->value == 'en' ? 'selected' : '' }}>انجليزية</option>
                                                <option value="ar" {{ $lang_setting->value == 'ar' ? 'selected' : '' }}>عربية</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <p>
                                        <i class="material-icons">add_a_photo</i>
                                        <b>لوجو الموقع</b>
                                    </p>
                                    <div class="form-group">
                                    <input id="file-1" type="file" name="{{$logo_setting->id}}[image]">
                                    </div>
                                    @if (isset($logo_setting->image) && $logo_setting->image != '')
                                    <div class="col-sm-12">
                                        <a href=""
                                           target="_blank">
                                            <img src="{{ $logo_setting->image_path }}"
                                                 alt=""
                                                 style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                                        </a>
                                        <div class="clearfix"></div>
                                        <span onclick="showConfirmMessageOnDelete('{{ route('dashboard.setting.delete_image',$logo_setting) }}')"
                                              class="btn btn-danger btn-sm btn-block"
                                              style="margin: 10px; width: 50%">حذف الصورة</span>
                                    </div>                                        
                                    @endif


                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <p>
                                        <i class="material-icons">add_a_photo</i>
                                        <b>أيقونة الموقع</b>
                                    </p>
                                    <div class="form-group">
                                        <input id="file-2" type="file" name="{{$icon_setting->id}}[image]">
                                        </div>
                                        @if (isset($icon_setting->image) && $icon_setting->image != '')
                                        <div class="col-sm-12">
                                            <a href=""
                                               target="_blank">
                                                <img src="{{ $icon_setting->image_path }}"
                                                     alt=""
                                                     style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                                            </a>
                                            <div class="clearfix"></div>
                                            <span onclick="showConfirmMessageOnDelete('{{ route('dashboard.setting.delete_image',$logo_setting) }}')"
                                                  class="btn btn-danger btn-sm btn-block"
                                                  style="margin: 10px; width: 50%">حذف الصورة</span>
                                        </div>                                        
                                        @endif
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <p>
                                        <i class="material-icons">add_a_photo</i>
                                        <b>صورة المشاركة الاجتماعية</b>
                                    </p>
                                    <div class="form-group">
                                        <input id="file-3" type="file" name="{{$share_img_setting->id}}[image]">
                                        </div>
                                        @if (isset($share_img_setting->image) && $share_img_setting->image != '')
                                        <div class="col-sm-12">
                                            <a href=""
                                               target="_blank">
                                                <img src="{{ $share_img_setting->image_path }}"
                                                     alt=""
                                                     style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                                            </a>
                                            <div class="clearfix"></div>
                                            <span onclick="showConfirmMessageOnDelete('{{ route('dashboard.setting.delete_image',$logo_setting) }}')"
                                                  class="btn btn-danger btn-sm btn-block"
                                                  style="margin: 10px; width: 50%">حذف الصورة</span>
                                        </div>                                        
                                        @endif
                                </div>

                                <div class="col-xs-12">
                                    <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                                        onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--#END# site settings -->
                    <!-- SEO -->
                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                        <div class="row">
                            <!-- Arabic -->
                            <div class="col-md-4  col-xs-12">
                                <p><b>إسم الموقع باللغة العربية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">create</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control "
                                            placeholder="مثال : شركة تكنو مصر للبرمجيات ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8  col-xs-12">
                                <p><b> الكلمات الدليلية باللغة العربية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">create</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control "
                                            placeholder="كلمة , كلمة , كلمة , ....">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <p><i class="material-icons">lightbulb_outline</i><b>وصف المتجر باللغة العربية</b></p>
                                <textarea class="form-control" name="" id="" cols="30" rows="15"></textarea>
                            </div>
                            <!-- #END# Arabic -->
                            <!-- English -->
                            <div class="col-md-4  col-xs-12">
                                <p><b>إسم الموقع باللغة الإنجليزية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">create</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control "
                                            placeholder="مثال : شركة تكنو مصر للبرمجيات ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8  col-xs-12">
                                <p><b>الكلمات الدليلية باللغة الإنجليزية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">create</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control "
                                            placeholder="كلمة , كلمة , كلمة , ....">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <p><i class="material-icons">lightbulb_outline</i><b>وصف المتجر باللغة الإنجليزية</b>
                                </p>
                                <textarea class="form-control" name="" id="" cols="30" rows="15"></textarea>
                            </div>
                            <!-- #END# English -->
                            <div class="col-xs-12">
                                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                            </div>
                        </div>
                    </div>
                    <!--#END# SEO -->
                    <!-- Contacts -->
                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                        <div class="row">
                            <div class="col-md-3">
                                <p><b>رقم الهاتف</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p><b>رقم الهاتف الأرضي</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">phone</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p><b>واتس اب</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">ring_volume</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <p><b>فاكس</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">contact_mail</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p><b>البريد الالكترونى</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="email" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p><b> العنوان باللغة العربية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">pin_drop</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p><b> العنوان باللغة الإنجليزية</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">pin_drop</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p><b>كود خريطة جوجل</b></p>
                                <small>كود التضمين </small>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">add_location</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                            </div>
                        </div>
                    </div>
                    <!--#END# contacts -->
                    <!-- social media -->
                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <p><b> فيس بوك</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b> لينكد ان</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b>تويتر</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b> جوجل بلس</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b> انستجرام</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b> بينتيريست</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="https://www.example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b>RSS</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <p><b>سكايب</b></p>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">share</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
                            </div>
                        </div>

                    </div>
                    <!--#END# social media -->
                </div>
            </div>
        </div>
    </div>


    </div>
</section>
<!-- #END# Content -->

@endsection
