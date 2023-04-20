<nav>
    {{-- Nav title --}}
    <div class="brand">
        GalihTube
    </div>

{{-- Search input --}}
    <div class="inputSearch">
        <form action="">
        
            <input  class="search" type="text"  placeholder="Explore now">
            <button class="btnSearch" type="submit">
                <i class="fa-solid fa-magnifying-glass" ></i>
            </button>
        
        
        </form>

    </div>
        {{-- Nav menu --}}
        <ul  class="kontent">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/videos">Videos</a>
            </li>
            <li>
                <a href="/reports">Reports</a>
            </li>

        </ul>

        {{-- Notification  --}}
        <ul  class="akunNav"> 
            <li>
                <div class="ContainerNotifIcon">
                    <i class="fa-solid fa-bell"></i>
                </div>

                {{-- dropdown notif --}}
                @include('ModalJs.Notification.notification')
            </li>
           {{-- User menu --}}
            <li>
                {{-- user icon--}}
                    <a  href="javascript:void(0);" id="DropdownUserIcon">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        {{-- user title --}}
                        <div class="titleUserNav">
                            Dadang
                           {{-- arrow down icon --}}
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </a>
 
                        {{-- Dropdown User accout --}}
                        <ul class="dropDownMenu">
                            <li >
                                
                                <a href="/UserPage">
                                    <div>
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        Profile
                                    </div>
                                    
                                </a>
                                
                            </li>
                            <li class="">
                                <a href="/SettingsPage">
                                    <div>
                                        <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div>
                                        Settings
                                    </div>
                                
                                </a>
                            </li>
                            <li  class="ContainerLogout">
                                <a href="/SignIn">
                                    <div>
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </div>
                                    <div>
                                        Logout
                                    </div>
                                
                                </a>
                            </li>
                        </ul>
            </li>

        </ul>

  </nav>

