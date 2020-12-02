<div role="tabpanel" class="tab-pane fade" id="tab3">
    <form action="{{ route('dashboard.setting.update_edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @php
        $phone = get_setting_by_key('phone');
        $home_line = get_setting_by_key('home_line');
        $whatsapp = get_setting_by_key('whatsapp');
        $fax = get_setting_by_key('fax');
        $email = get_setting_by_key('email');
        $address = get_setting_by_key('address');
        $map = get_setting_by_key('map');
        @endphp
        <div class="row">
            <div class="col-md-3">
                <p><b>رقم الهاتف</b></p>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">phone</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control " name="{{$phone->id}}[value]" value="{{ $phone->value }}">
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
                        <input type="text" class="form-control " name="{{$home_line->id}}[value]" value="{{ $home_line->value }}">
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
                        <input type="text" class="form-control " name="{{$whatsapp->id}}[value]" value="{{ $whatsapp->value }}">
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
                        <input type="text" class="form-control " name="{{$fax->id}}[value]" value="{{ $fax->value }}">
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
                        <input type="email" class="form-control " name="{{$email->id}}[value]" value="{{ $email->value }}">
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
                        <input type="text" class="form-control " name="{{$address->id}}[ar][translated_value]" value="{{ $address->translate('ar')->translated_value ?? '' }}">
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
                        <input type="text" class="form-control " name="{{$address->id}}[en][translated_value]" value="{{ $address->translate('en')->translated_value ?? '' }}">
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
                        <input type="text" class="form-control " name="{{$map->id}}[value]" value="{{ $map->value }}">
                    </div>
                </div>
            </div>
           
            <div class="col-xs-12">
                <input type="submit" value="حفظ البيانات" class="btn bg-blue  btn-lg waves-effect"
                    onclick="this.disabled=true; this.value='برجاء الإنتظار .. ';this.form.submit();">
            </div>
        </div>
    </form>
</div>