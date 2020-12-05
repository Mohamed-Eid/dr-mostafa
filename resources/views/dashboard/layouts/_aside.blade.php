<section>
    <aside id="leftsidebar" class="sidebar p-t-20">
        <!-- User info -->
            <div class="user-info text-center">
                <div class="image">
                    <img src="{{ get_setting_by_key('logo')->image_path }}" width="48" height="48" alt="User">
                </div>
                <div class="info-container">
                    <div class="email col-blue-grey font-20">{{ auth()->user()->email }} </div>
                </div>
            </div>
        <!-- #END# user info --> 
        <!-- Menu -->
            <div class="menu">
                <ul class="list" style="height: 470px!important">
                    <li class="active">
                        <a href="Admindashboard.php">
                            <i class="material-icons">home</i>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.index') }}">
                            <i class="material-icons">visibility</i>
                            <span>معاينة الموقع</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('dashboard.edit_profile') }}">
                            <i class="material-icons">person</i>
                            <span>بيانات الأمان</span>
                        </a>
                    </li> 

                    @if(auth()->user()->hasPermission('read_roles'))
                    <li>
                        <a href="{{ route('dashboard.roles.index') }}">
                            <i class="material-icons">lock</i>
                            <span>الصلاحيات والادوار</span>
                        </a>
                    </li> 
                    @endif

                    @if(auth()->user()->hasPermission('read_users'))
                    <li>
                        <a href="{{ route('dashboard.users.index') }}">
                            <i class="material-icons">people</i>
                            <span>إدارة المشرفين</span>
                        </a>
                    </li> 
                    @endif

                    @if(auth()->user()->hasPermission('update_settings'))
                    <li class="{{ is_current_route('dashboard.basic_settings') ? 'active' : ''  }}">
                        <a href="{{  route('dashboard.basic_settings') }}">
                            <i class="material-icons">settings</i>
                            <span>إعدادات الموقع</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_members'))
                    <li class="{{ is_current_route('dashboard.members.index') ? 'active' : ''  }}">
                        <a href="{{  route('dashboard.members.index') }}">
                            <i class="material-icons">account_box</i>
                            <span>إدارة فريق العمل</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_services'))
                    <li>
                        <li class="{{ is_current_route('dashboard.services.index') ? 'active' : ''  }}">
                            <a href="{{  route('dashboard.services.index') }}">
                                <i class="material-icons">account_box</i>
                            <span>خدماتنا</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_videos'))
                    <li>
                        <li class="{{ is_current_route('dashboard.videos.index') ? 'active' : ''  }}">
                            <a href="{{  route('dashboard.videos.index') }}">
                                <i class="material-icons">account_box</i>
                                <span>مكتبة الفيديو</span>
                            </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_images'))
                    <li>
                        <li class="{{ is_current_route('dashboard.images.index') ? 'active' : ''  }}">
                            <a href="{{  route('dashboard.images.index') }}">
                                <i class="material-icons">account_box</i>
                                <span>مكتبة الصور</span>
                            </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('update_view_settings'))
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">picture_in_picture</i>
                            <span>إعدادات الظهور</span>
                        </a>
                        <ul class="ml-menu m-r-30" style="display: none;">
                            <li>
                                <a href="{{ route('dashboard.view_settings') }}" class=" waves-effect waves-block">
                                    <span>سلايدر و إعدادات الصفحة الرئيسية</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{ route('dashboard.view_settings.about') }}" class=" waves-effect waves-block">
                                    <span>صفحة من نحن</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_courses'))
                    <li class="{{ is_current_route('dashboard.courses.index') ? 'active' : ''  }}">
                        <a href="{{  route('dashboard.courses.index') }}">
                            <i class="material-icons">email</i>
                            <span>إدارة الكورسات</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_contact'))
                    <li class="{{ is_current_route('dashboard.messages.index') ? 'active' : ''  }}">
                        <a href="{{  route('dashboard.messages.index') }}">
                            <i class="material-icons">email</i>
                            <span>القائمة البريدية</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->hasPermission('read_appointments'))
                    <li class="{{ is_current_route('dashboard.appointments.index') ? 'active' : ''  }}">
                        <a href="{{  route('dashboard.appointments.index') }}">
                            <i class="material-icons">library_books</i>
                            <span>إدارة الحجوزات</span>
                        </a>
                    </li>
                    @endif
                   
                </ul>
            </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                تصميم و برمجة <a href="http://www.technomasr.com">تكنو مصر</a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
</section>