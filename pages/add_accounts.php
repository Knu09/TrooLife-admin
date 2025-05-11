<?php session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: ../pages/login.php');
    exit;
}

$fullname = $_SESSION['first_name'] . ' ' . $_SESSION['last_name']

?>
<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User Management</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="title" content="Dashboard - User Management" />

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="../assets/img/favicon/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="../assets/img/favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../assets/img/favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="../assets/img/favicon/site.webmanifest" />
        <link
            rel="mask-icon"
            href="../assets/img/favicon/safari-pinned-tab.svg"
            color="#ffffff"
        />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Sweet Alert -->
        <link
            type="text/css"
            href="../vendor/sweetalert2/dist/sweetalert2.min.css"
            rel="stylesheet"
        />

        <!-- Notyf -->
        <link
            type="text/css"
            href="../vendor/notyf/notyf.min.css"
            rel="stylesheet"
        />

        <!-- Styles CSS -->
        <link type="text/css" href="../css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Side Navigation Bar -->
        <?php require '../components/side_navbar.php'; ?>

        <main class="content">
            <nav
                class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0"
            >
                <div class="container-fluid px-0">
                    <div
                        class="d-flex justify-content-between w-100"
                        id="navbarSupportedContent"
                    >
                        <div class="d-flex align-items-center">
                            <h2 class="h4">User Management</h2>
                        </div>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown ms-lg-3">
                                <a
                                    class="nav-link dropdown-toggle pt-1 px-0"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <div
                                        class="media d-flex align-items-center"
                                    >
                                        <svg
                                            class="icon icon-xs me-2"
                                            fill="#1F2937"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"
                                        >
                                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M96 128a128 128 0 1 0 256 0A128 128 0 1 0 96 128zm94.5 200.2l18.6 31L175.8 483.1l-36-146.9c-2-8.1-9.8-13.4-17.9-11.3C51.9 342.4 0 405.8 0 481.3c0 17 13.8 30.7 30.7 30.7l131.7 0c0 0 0 0 .1 0l5.5 0 112 0 5.5 0c0 0 0 0 .1 0l131.7 0c17 0 30.7-13.8 30.7-30.7c0-75.5-51.9-138.9-121.9-156.4c-8.1-2-15.9 3.3-17.9 11.3l-36 146.9L238.9 359.2l18.6-31c6.4-10.7-1.3-24.2-13.7-24.2L224 304l-19.7 0c-12.4 0-20.1 13.6-13.7 24.2z"
                                            />
                                        </svg>
                                        <div
                                            class="media-body ms-2 text-dark align-items-center d-none d-lg-block"
                                        >
                                            <span
                                                class="mb-0 font-small fw-bold text-gray-900"
                                                ><?= htmlspecialchars($fullname ?? '') ?></span
                                            >
                                        </div>
                                    </div>
                                </a>
                                <div
                                    class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1"
                                >
                                    <a
                                        class="dropdown-item d-flex align-items-center"
                                        href="#"
                                    >
                                        <svg
                                            class="dropdown-icon text-gray-400 me-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        My Profile
                                    </a>
                                    <a
                                        class="dropdown-item d-flex align-items-center"
                                        href="#"
                                    >
                                        <svg
                                            class="dropdown-icon text-gray-400 me-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                        Settings
                                    </a>
                                    <div
                                        role="separator"
                                        class="dropdown-divider my-1"
                                    ></div>
                                    <form action="internal/logout.php" method="POST">
                                        <button
                                            class="dropdown-item d-flex align-items-center"
                                            type="submit"
                                        >
                                            <svg
                                                class="dropdown-icon text-danger me-2"
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
                                            Logout
                                        </button>
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card card-body border-0 shadow my-4">
                <h2 class="h5 mb-4">Create new administrator</h2>
                <form action="add_accounts.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter a first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter a last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z"/></svg>
                                </span>
                                <input class="form-control" id="password" name="password" type="password" placeholder="Enter a secure password" autocomplete="new-password" required>
                                </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="birthday">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z"/></svg>
                                </span>
                                <input class="form-control" id="confirm_password" name="confirm_password" type="confirm_password" placeholder="Confirm the password" required>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="name@company.com" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Username</label>
                                <input class="form-control" id="username" type="text" name="username" placeholder="example123" autocomplete="chrome-off" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Create</button>
                    </div>
                </form>
            </div>
            <!-- Footer Start -->
            <?php
                require '../components/footer.php';
            ?>

            <!-- Footer End -->
        </main>

        <!-- Core -->
        <script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Vendor JS -->
        <script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

        <!-- Slider -->
        <script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

        <!-- Smooth scroll -->
        <script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

        <!-- Charts -->
        <script src="../vendor/chartist/dist/chartist.min.js"></script>
        <script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

        <!-- Datepicker -->
        <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Sweet Alerts 2 -->
        <script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

        <!-- Moment JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

        <!-- Vanilla JS Datepicker -->
        <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Notyf -->
        <script src="../vendor/notyf/notyf.min.js"></script>

        <!-- Simplebar -->
        <script src="../vendor/simplebar/dist/simplebar.min.js"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Volt JS -->
        <script src="../assets/js/volt.js"></script>
    </body>
</html>
