<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>

    <!-- Right navbar links -->
    <ul class="navbar-nav ms-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-comments"></i>
                <span class="badge bg-danger">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="messagesDropdown">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <!-- <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="rounded-circle me-2" width="40"> -->
                            <div>
                                <strong>Brad Diesel</strong>
                                <p class="mb-0">Call me whenever you can...</p>
                                <small class="text-muted"><i class="far fa-clock"></i> 4 Hours Ago</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">See All Messages</a>
                </li>
            </ul>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-bell"></i>
                <span class="badge bg-warning">15</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                <li><span class="dropdown-header">15 Notifications</span></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-envelope me-2"></i> 4 new messages
                        <span class="float-end text-muted text-sm">3 mins</span>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item text-center" href="#">See All Notifications</a>
                </li>
            </ul>
        </li>

        <!-- User Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="{{ route('settings') }}">Settings</a></li>
                <li><a class="dropdown-item" href="#">Activity Log</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
