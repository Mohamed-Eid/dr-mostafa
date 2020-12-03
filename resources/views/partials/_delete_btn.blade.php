<form method="post"
action="{{$route}}"
style="display: inline-block">
@csrf()
@method('delete')
<button class="btn btn-danger m-5 waves-effect delete_item_in_form"
    data-toggle="tooltip" data-placement="top" data-original-title="مسح"><i
        class="material-icons">delete_forever</i>
</button>
</form>