<div class="card">
    <div class="header">
        <h5> إدارة سلايدر الصفحة الرئيسية</h5>
    </div>
    <div class="body">
        <div class="row clearfix">
            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                <div class="panel-group" id="slider" role="tablist" aria-multiselectable="true">
                    
                    @php
                        $colors = ['pink','cyan','teal','brown ','orange']
                    @endphp

                    @foreach (get_settings_by_class('slider') as $index => $item)
                    <div class="panel panel-col-{{ $colors[$index]}}">
                        <div class="panel-heading" role="tab" id="s1heading">
                            <h6 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#slider" href="#slider{{$item->id}}"
                                    aria-expanded="false" aria-controls="slider1" class="collapsed">
                                    السلايدر #{{$index+1}} بالصفحة الرئيسية
                                </a>
                            </h6>
                        </div>
                        <div id="slider{{$item->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="s1heading"
                            aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><b>صورة</b></p>
                                        <small>لعرض أفضل يجب أن يكون مقاس الصورة 1440*960</small>
                                        <input id="slider-{{$index}}" type="file" name="{{$item->id}}[image]">
                                        @if (isset($item->image) && $item->image != '')
                                        <div class="col-sm-12">
                                            <a href=""
                                               target="_blank">
                                                <img src="{{ $item->image_path }}"
                                                     alt=""
                                                     style="max-height:200px;width:auto;max-width:100%; margin:5px auto;">
                                            </a>
                                            <div class="clearfix"></div>
                                            <span onclick="showConfirmMessageOnDelete('{{ route('dashboard.setting.delete_image',$item) }}')"
                                                  class="btn btn-danger btn-sm btn-block"
                                                  style="margin: 10px; width: 50%">حذف الصورة</span>
                                        </div>                                        
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    
                    @push('scripts')
                        <script>
                                 $("#slider-{{$index}}").fileinput({
                                    language: 'ar',
                                    showUpload: false,
                                    showCaption: false,
                                    browseClass: "btn btn-primary btn-lg",
                                    fileType: "any",
                                    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
                                    overwriteInitial: false,
                                    initialPreviewAsData: true,
                                    initialPreviewConfig: [{
                                            caption: "transport-1.jpg",
                                            size: 329892,
                                            width: "120px",
                                            url: "{$url}",
                                            key: 1
                                        },

                                    ]
                                });
                        </script>
                    @endpush
                    @endforeach
                    




                </div>
            </div>
        </div>
    </div>
</div>
