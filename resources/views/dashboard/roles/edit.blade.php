@extends('dashboard.layouts.app')

@section('content')

<!-- content -->
<section class="content">
    <div class="container-fluid">
        <!-- Bread crumb -->
        <ol class="breadcrumb bg-white">
            <li><a href="Admindashboard.php">الرئيسية</a></li>
            <li><a href="teamwork.php">المشرفين</a></li>
            <li class="active">إضافة مشرف</li>
        </ol>
        <!-- Edit Form -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h5 class="d-inline-block">
                            إضافة مشرف
                        </h5>
                    </div>
                    <div class="body">
                        <div class="row">
                            <form method="POST" action="{{ route('dashboard.roles.update',$role) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                @include('partials._errors')
                                
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p><b>أسم الدور</b></p>
                                            <small>م يجب ان يكون بالغة الانجليزية , لا يتحوي علي مسافات </small>                                            
                                            <small>(ex : admin or writer)</small>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" name="name" value="{{ $role->name }}"
                                                        placeholder="اسم الدور">
                                                </div>
                                            </div>
                                        </div>   
                                        
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p><b>أسم الدور المعروض</b></p>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" value="{{ $role->display_name }}" name="display_name"
                                                        placeholder="اسم الدور المعروض">
                                                </div>
                                            </div>
                                        </div>   

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p><b>وصف</b></p>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" value="{{ $role->description }}" name="description"
                                                        placeholder="وصف">
                                                </div>
                                            </div>
                                        </div>  

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p><b>الصلاحيات</b></p>
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_open</i>
                                                </span>
                                                <div class="form-line">
                                                    <select class="form-control show-tick" data-live-search="true" multiple name="permissions[]">
                                                        @foreach ($permissions as $permission)
                                                            <option value="{{$permission->id}}" {{ in_array($permission->id ,$role->permissions->pluck('id')->all()) ? 'selected' : '' }}>{{$permission->display_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
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
