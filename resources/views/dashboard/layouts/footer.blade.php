 <!-- Jquery Core Js -->
    <script src="{{ asset('Assets/plugins/jquery/jquery.min.js') }}"></script>

 <!-- Bootstrap Core Js -->
 <script src="{{ asset('Assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

 <!-- Select Plugin Js -->
 <script src="{{ asset('Assets/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

 <!-- Slimscroll Plugin Js -->
 <script src="{{ asset('Assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

 <!-- Waves Effect Plugin Js -->
 <script src="{{ asset('Assets/plugins/node-waves/waves.js') }}"></script>


 <!-- TinyMCE -->
 <script src="{{ asset('Assets/plugins/tinymce/tinymce.js') }}"></script>

 <!-- SweetAlert Plugin Js -->
 <script src="{{ asset('Assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
 @include('partials._session')
 <!-- Datatable-->
 <script src="{{ asset('Assets/plugins/jquery-datatable/jquery.dataTables.ar.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('Assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>



 <!-- Custom Js -->
 <script src="{{ asset('Assets/js/admin.js') }}"></script>
 {{-- <script src="{{ asset('Assets/js/pages/ui/dialogs.js') }}"></script> --}}
 <script src="{{ asset('Assets/js/pages/ui/dialogs-ar.js') }}"></script>

 <script src="{{ asset('Assets/js/pages/tables/jquery-datatable.js') }}"></script>


 <!-- tool tip -->
 <script src="{{ asset('Assets/js/pages/ui/tooltips-popovers.js') }}"></script>



 <!-- file input js -->
 <script src="{{ asset('Assets/plugins/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
 <script src="{{ asset('Assets/plugins/bootstrap-fileinput/js/locales/ar.js') }}" type="text/javascript"></script>



 <script>
     $("#file-1").fileinput({
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
     $("#file-2").fileinput({
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
     $("#file-3").fileinput({
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
     $("#member").fileinput({
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
     $("#forslider").fileinput({
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

     $("#sliderimg1").fileinput({
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

     $("#sliderimg2").fileinput({
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
     $("#sliderimg3").fileinput({
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

     $("#featureicon1").fileinput({
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
     $("#featureicon2").fileinput({
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
     $("#featureicon3").fileinput({
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
     $("#featureicon4").fileinput({
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

 <script type="text/javascript">
     $(function () {
         //TinyMCE
         tinymce.init({
             selector: "textarea#tinymce",
             theme: "modern",
             height: 150,
             plugins: [
                 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                 'searchreplace wordcount visualblocks visualchars code fullscreen',
                 'insertdatetime media nonbreaking save table contextmenu directionality',
                 'emoticons template paste textcolor colorpicker textpattern imagetools'
             ],
             toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
             toolbar2: 'print preview media | forecolor backcolor emoticons',
             image_advtab: true
         });
         tinymce.suffix = ".min";
         tinyMCE.baseURL = 'Assets/plugins/tinymce';
     });

 </script>
 <script>
     jQuery(function (jQuery) {
         jQuery('.repeatable-field-add').click(function () {
             var theField = jQuery(this).closest('div.repeatable-wrap').find(
                 '.repeatable-fields-list li:last').clone(true);
             var theLocation = jQuery(this).closest('div.repeatable-wrap').find(
                 '.repeatable-fields-list li:last');
             jQuery('input', theField).val('').attr('name', function (index, name) {
                 return name.replace(/(\d+)/, function (fullMatch, n) {
                     return Number(n) + 1;
                 });
             });
             theField.insertAfter(theLocation, jQuery(this).closest('div.repeatable-wrap'));
             var fieldsCount = jQuery('.repeatable-field-remove').length;
             if (fieldsCount > 1) {
                 jQuery('.repeatable-field-remove').css('display', 'inline');
             }
             return false;
         });

         jQuery('.repeatable-field-remove').click(function () {
             jQuery(this).parent().remove();
             var fieldsCount = jQuery('.repeatable-field-remove').length;
             if (fieldsCount == 1) {
                 jQuery('.repeatable-field-remove').css('display', 'none');
             }
             return false;
         });
     });

 </script>

 <script type="text/javascript">
     $("#selectorList").change(function () {
         var choosen = $(this).find(':selected')[0].value;
         console.log(choosen);
         if (choosen === 'close') {
             $('#ifYes').show();
         } else $('#ifYes').hide();
     });
     $("#selectorList2").change(function () {
         var choosen = $(this).find(':selected')[0].value;
         console.log(choosen);
         if (choosen === 'close') {
             $('#ifYes2').show();
         } else $('#ifYes2').hide();
     });
     $("#selectorList3").change(function () {
         var choosen = $(this).find(':selected')[0].value;
         console.log(choosen);
         if (choosen === 'close') {
             $('#ifYes3').show();
         } else $('#ifYes3').hide();
     });
     $("#selectorList4").change(function () {
         var choosen = $(this).find(':selected')[0].value;
         console.log(choosen);
         if (choosen === 'close') {
             $('#ifYes4').show();
         } else $('#ifYes4').hide();
     });
     $("#selectorList5").change(function () {
         var choosen = $(this).find(':selected')[0].value;
         console.log(choosen);
         if (choosen === 'close') {
             $('#ifYes5').show();
             $('#ifYes6').hide();
         } else {
             $('#ifYes6').show();
             $('#ifYes5').hide();
         }
     });

 </script>

<script>
    $('.delete_item_in_form').click(function (e) {

        var that = $(this)

        e.preventDefault();


        swal({
        title: "هل أنت متأكد؟",
        text: "لن تستطيع إستعادة تلك البيانات أو أى بيانات مرتبطة بها مرة أخرى!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم, احذف البيانات!",
        cancelButtonText: "لا, الغِ الأمر!",
        closeOnConfirm: false,
        closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                that.closest('form').submit();
            } else {
                swal("تم الإلغاء", "لا تقلق كافة بياناتك فى أمان ولم يتم حذفها بعد :)", "error");
            }
        });

    });//end of delete


    function showConfirmMessageOnDelete(url) {
    swal({
        title: "هل أنت متأكد؟",
        text: "لن تستطيع إستعادة تلك البيانات أو أى بيانات مرتبطة بها مرة أخرى!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "نعم, احذف البيانات!",
        cancelButtonText: "لا, الغِ الأمر!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            window.location = url
        } else {
            swal("تم الإلغاء", "لا تقلق كافة بياناتك فى أمان ولم يتم حذفها بعد :)", "error");
        }
    });
}

</script>

@stack('scripts')

 </body>

 </html>
