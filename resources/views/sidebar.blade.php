<!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu" class="pt-0">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="{{ url('/admin') }}" class="waves-effect">
                                <i class="ti-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/customers') }}" class="waves-effect">
                                <i class="ti-panel"></i>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/invoices') }}" class="waves-effect">
                                <i class="ti-panel"></i>
                                <span>Invoices</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/services') }}" class="waves-effect">
                                <i class="ti-panel"></i>
                                <span>Services</span>
                            </a>
                        </li>

                        <a href="javascript:void();"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class=" waves-effect">
                            <i class="mdi mdi-logout"></i>
                            <span>Logout</span>
                        </a>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->