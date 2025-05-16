<nav
    class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none"
>
    <a class="navbar-brand me-lg-5" href="/">
        <img
            class="navbar-brand-dark"
            src="../assets/logo/troolife-logo.png"
            alt="TrooLife logo"
        />
        <img
            class="navbar-brand-light"
            src="../assets/logo/troolife-logo.png"
            alt="TrooLife logo"
        />
    </a>
    <div class="d-flex align-items-center">
        <button
            class="navbar-toggler d-lg-none collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav
    id="sidebarMenu"
    class="relative sidebar d-lg-block bg-gray-800 text-white collapse"
    data-simplebar
>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4"
        >
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img
                        src="../assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white"
                        alt="Bonnie Green"
                    />
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a
                        href="../pages/examples/sign-in.html"
                        class="btn btn-secondary btn-sm d-inline-flex align-items-center"
                    >
                        <svg
                            class="icon icon-xxs me-1"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                            ></path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a
                    href="#sidebarMenu"
                    data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu"
                    aria-expanded="true"
                    aria-label="Toggle navigation"
                >
                    <svg
                        class="icon icon-xs"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-md-0">
            <li class="nav-item">
                <a
                    href="/"
                    class="nav-link d-flex align-items-center"
                >
                    <span class="sidebar-icon">
                        <img
                            src="/assets/logo/troolife-logo.png"
                            height="40"
                            alt="TrooLife Logo"
                        />
                    </span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="/" class="nav-link">
                    <span class="sidebar-icon">
                        <svg
                            class="icon icon-xs me-1"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512"
                        >
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M528 160l0 256c0 8.8-7.2 16-16 16l-192 0c0-44.2-35.8-80-80-80l-64 0c-44.2 0-80 35.8-80 80l-32 0c-8.8 0-16-7.2-16-16l0-256 480 0zM64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32zM272 256a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm104-48c-13.3 0-24 10.7-24 24s10.7 24 24 24l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0z"
                            />
                        </svg>
                    </span>
                    <span class="sidebar-text">User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <span
                    class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse"
                    data-bs-target="#submenu-app"
                >
                    <span>
                        <span class="sidebar-icon">
                            <svg
                                class="icon icon-xs me-2"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                            >
                                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path
                                    d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"
                                />
                            </svg>
                        </span>
                        <span class="sidebar-text">Admin</span>
                    </span>
                    <span class="link-arrow">
                        <svg
                            class="icon icon-sm"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </span>
                </span>
                <div
                    class="multi-level collapse"
                    role="list"
                    id="submenu-app"
                    aria-expanded="false"
                >
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/admin_accounts.php">
                                <span class="sidebar-text"
                                    >Accounts</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/add_accounts.php">
                                <span class="sidebar-text"
                                    >Add Accounts</span
                                >
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li
                role="separator"
                class="dropdown-divider mt-4 mb-3 border-gray-700"
            ></li>
            <li class="nav-item">
                <a
                    href="#"
                    class="admin-status d-flex flex-column btn-secondary"
                >
                    <span class="title">Logged in as:</span>
                    <span><?= htmlspecialchars($_SESSION['username'] ?? '') ?></span>
                </a>
                <!-- <a href="pages/admin_profile.html" -->
                <!--     class="btn btn-secondary d-flex btn-upgrade-pro"> -->
                <!--     <span>Logged In as:</span> -->
                <!-- </a> -->
            </li>
        </ul>
    </div>
</nav>
