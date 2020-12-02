<div role="tabpanel" class="tab-pane fade in active" id="tab1">
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