<?php
session_start();

require_once '../internal/login_server.php';

$login_error = handleLogin();

?>

<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Primary Meta Tags -->
        <title>Admin Login page</title>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="title" content="TrooLife - Admin Login page" />

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="../../assets/img/favicon/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="../../assets/img/favicon/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="../../assets/img/favicon/favicon-16x16.png"
        />
        <link rel="manifest" href="../../assets/img/favicon/site.webmanifest" />
        <link
            rel="mask-icon"
            href="../../assets/img/favicon/safari-pinned-tab.svg"
            color="#ffffff"
        />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Sweet Alert -->
        <link
            type="text/css"
            href="../../vendor/sweetalert2/dist/sweetalert2.min.css"
            rel="stylesheet"
        />

        <!-- Notyf -->
        <link
            type="text/css"
            href="../../vendor/notyf/notyf.min.css"
            rel="stylesheet"
        />

        <!-- Styles CSS -->
        <link type="text/css" href="../css/styles.css" rel="stylesheet" />
    </head>

    <body class="relative">
        <?php if (!empty($login_error['error_username']) || !empty($login_error['error_pass'])): ?>
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center m-2" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" />
            </svg>
            <div>
                <?php
                if (!empty($login_error['error_username'])) {
                    echo htmlspecialchars($login_error['error_username']);
                }

                if (!empty($login_error['error_pass'])) {
                    if (!empty($login_error['error_username'])) {
                        echo "<br>";
                    }
                    echo htmlspecialchars($login_error['error_pass']);
                }
                ?>
            </div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <main>
            <!-- Section -->
            <section
                class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center"
            >
                <div class="container">
                    <div
                        class="row justify-content-center form-bg-image"
                        data-background-lg="../../assets/img/illustrations/signin.svg"
                    >
                        <div
                            class="col-12 d-flex align-items-center justify-content-center"
                        >
                            <div
                                class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500"
                            >
                                <div
                                    class="text-center text-md-center mb-4 mt-md-0"
                                >
                                    <h1 class="mb-0 h3">
                                        TrooLife Admin Platform
                                    </h1>
                                </div>
                                <form action="login.php" method="POST" enctype="multipart/form-data" class="mt-4">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="username">Username</label>
                                        <div class="input-group">
                                            <span
                                                class="input-group-text"
                                                id="basic-addon1"
                                            >
                                                <svg
                                                    class="icon icon-xs"
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
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="example123"
                                                    id="username"
                                                    name="username"
                                                    autofocus
                                                    value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
                                            />
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-group">
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label for="password"
                                                >Password</label
                                            >
                                            <div class="input-group">
                                                <span
                                                    class="input-group-text"
                                                    id="basic-addon2"
                                                >
                                                    <svg
                                                        class="icon icon-xs text-gray-600"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                            clip-rule="evenodd"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                <input
                                                    type="password"
                                                    placeholder="Password"
                                                    class="form-control"
                                                    id="password"
                                                    name="password"
                                                    value="<?= htmlspecialchars($_POST['password'] ?? '') ?>"
                                                />
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <div
                                            class="d-flex justify-content-between align-items-top mb-4"
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="remember"
                                                />
                                                <label
                                                    class="form-check-label mb-0"
                                                    for="remember"
                                                >
                                                    Remember me
                                                </label>
                                            </div>
                                            <div>
                                                <a
                                                    href="./forgot-password.html"
                                                    class="small text-right"
                                                    >Lost password?</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button
                                            type="submit"
                                            class="btn btn-gray-800"
                                            name="submit"
                                        >
                                            Log in
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Core -->
        <script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
        <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Vendor JS -->
        <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

        <!-- Slider -->
        <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

        <!-- Smooth scroll -->
        <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

        <!-- Charts -->
        <script src="../../vendor/chartist/dist/chartist.min.js"></script>
        <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

        <!-- Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Sweet Alerts 2 -->
        <script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

        <!-- Moment JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

        <!-- Vanilla JS Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Notyf -->
        <script src="../../vendor/notyf/notyf.min.js"></script>

        <!-- Simplebar -->
        <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Volt JS -->
        <script src="../../assets/js/volt.js"></script>
    </body>
</html>
