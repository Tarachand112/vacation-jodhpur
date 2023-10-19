<div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('dashboard') }}">
                             <img alt="image"  src="{{ asset('admin/assets/img/logo.png') }}" class="header-logo" />
                          </a>                          
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ auth()->user()->name }}</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                          <li class="dropdown">
                              <li class="active">
                                <a class="nav-link" href="{{ route('dashboard') }}">
                                    <i data-feather="grid"></i>
                                    <span>Dashboard</span>
                                </a>
                             </li>
                          </li>
                           <li class="dropdown">
                              <li class="active">
                                <a class="nav-link" href="{{ url('customer') }}">
                                    <i data-feather="grid"></i>
                                    <span>Customer</span>
                                </a>
                             </li>
                          </li>                     
                    </ul>
                </aside>
            </div>