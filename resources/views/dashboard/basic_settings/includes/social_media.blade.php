<div role="tabpanel" class="tab-pane fade" id="tab4">
    <form action="{{ route('dashboard.setting.update_edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            @foreach (get_settings_by_class('social_media') as $setting)
            <div class="col-sm-6 col-xs-12">
                <p><b> {{$setting->field_name}}</b></p>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">share</i>
                    </span>
                    <div class="form-line">
                        <input type="text" name="{{$setting->id}}[value]" value="{{$setting->value ?? ''}}" class="form-control " placeholder="https://www.example.com">
                    </div>
                </div>
            </div>                
            @endforeach


            <div class="col-xs-12">
                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
            </div>
        </div>
    </form>
</div>