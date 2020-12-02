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
                    @include('dashboard.basic_settings.includes.site')
                    <!--#END# site settings -->
                    <!-- SEO -->
                    @include('dashboard.basic_settings.includes.seo')
                    <!--#END# SEO -->
                    <!-- Contacts -->
                    @include('dashboard.basic_settings.includes.contacts')

                    <!--#END# contacts -->
                    <!-- social media -->
                    @include('dashboard.basic_settings.includes.social_media')

                    <!--#END# social media -->
                </div>
            </div>
        </div>
    </div>


    </div>
</section>
<!-- #END# Content -->

@endsection
