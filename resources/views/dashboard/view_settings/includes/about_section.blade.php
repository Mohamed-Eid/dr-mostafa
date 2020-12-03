<!-- about -->
<div class="card">
    <div class="header">
        <h5 class="blue-text text-darken-2">إدارة سكشن من نحن في الصفحة الرئيسية</h5>
    </div>

    @php
    $title = get_setting_by_key('about_us_section_title');
    $desc  = get_setting_by_key('about_us_section_desc');
    $image = get_setting_by_key('about_us_section_image');
    @endphp

    <div class="body">
        <div class="row clearfix">
            @foreach(config('translatable.locales') as $locale)
            <div class="col-md-6">
                <p><b>@lang('site.section_title_'.$locale)</b></p>
                <div class="input-group">
                    <div class="form-line">
                        <textarea name="{{$title->id}}[{{$locale}}][translated_value]"  class="form-control ">{{$title->translate($locale)->translated_value ?? ''}}</textarea>
                    </div>
                </div>
            </div>           
            @endforeach

            @foreach(config('translatable.locales') as $locale)
            <div class="col-md-6">
                <p><b>@lang('site.section_desc_'.$locale)</b></p>
                <div class="input-group">
                    <div class="form-line">
                        <input type="text">
                        <textarea name="{{$desc->id}}[{{$locale}}][translated_value]"  class="form-control ">{{$desc->translate($locale)->translated_value ?? ''}}</textarea>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>
                    <b>صورة السكشن</b>
                </p>
                <div class="form-group">
                    <input id="file-3" name="{{$image->id}}[image]" type="file">
                    @if (isset($image->image) && $image->image != '')
                    <div class="col-sm-12">
                        <a href=""
                           target="_blank">
                            <img src="{{ $image->image_path }}"
                                 alt=""
                                 style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                        </a>
                        <div class="clearfix"></div>
                        <span onclick="showConfirmMessageOnDelete('{{ route('dashboard.setting.delete_image',$image) }}')"
                              class="btn btn-danger btn-sm btn-block"
                              style="margin: 10px; width: 50%">حذف الصورة</span>
                    </div>                                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--#END# about -->
