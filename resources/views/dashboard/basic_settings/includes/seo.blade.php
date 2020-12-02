<div role="tabpanel" class="tab-pane fade" id="tab2">
    <form action="{{ route('dashboard.setting.update_edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @php
        $site_name = get_setting_by_key('site_name');
        $key_words = get_setting_by_key('key_words');
        $description = get_setting_by_key('description');
        @endphp
        <div class="row">


            @foreach(config('translatable.locales') as $locale)
            <div class="col-md-4  col-xs-12">
                <p><b>@lang('site.site_name_'.$locale)</b></p>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">create</i>
                    </span>
                    <div class="form-line">
                    <input type="text" class="form-control " name="{{ $site_name->id }}[{{$locale}}][translated_value]"
                            placeholder="مثال : شركة تكنو مصر للبرمجيات " value="{{$site_name->translate($locale)->translated_value}}">
                    </div>
                </div>
            </div>
            <div class="col-md-8  col-xs-12">
                <p><b> @lang('site.key_words_'.$locale)</b></p>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">create</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control " name="{{ $key_words->id }}[{{$locale}}][translated_value]"
                            placeholder="كلمة , كلمة , كلمة , ...." value="{{$key_words->translate($locale)->translated_value}}">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <p><i class="material-icons">lightbulb_outline</i><b>@lang('site.description_'.$locale)</b></p>
                <textarea class="form-control" name="{{ $description->id }}[{{$locale}}][translated_value]" id="" cols="30" rows="15">{{$description->translate($locale)->translated_value}}</textarea>
            </div>
            @endforeach
            <div class="col-xs-12">
                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
            </div>
        </div>
    </form>
</div>