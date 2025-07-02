<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>File Manager | F-Drive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="Sudipta Ghosh" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/website-favicon.png">

    <!-- Theme Config Js -->
    <script src="assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">




        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="container-fluid">
            <div class="content" style="padding: 60px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-aside-left">

                                    <div class="btn-group d-block mb-2">
                                        <button type="button" class="btn btn-success dropdown-toggle w-100"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="mdi mdi-plus"></i> Create New
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="uploadFile('folder')">
                                                <i class="mdi mdi-folder-plus-outline me-1"></i> Folder
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="uploadFile('file')">
                                                <i class="mdi mdi-file-plus-outline me-1"></i> File
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="uploadFile('document')">
                                                <i class="mdi mdi-file-document me-1"></i> Document
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="uploadFile('choose')">
                                                <i class="mdi mdi-upload me-1"></i> Choose File
                                            </a>

                                            <input type="file" id="fileInput_file" style="display:none;"
                                                onchange="handleFile(this.files)">
                                            <input type="file" id="fileInput_document" accept=".pdf,.doc,.docx"
                                                style="display:none;" onchange="handleFile(this.files)">
                                            <input type="file" id="fileInput_choose" style="display:none;"
                                                onchange="handleFile(this.files)">
                                        </div>
                                    </div>

                                    <div class="email-menu-list mt-3">
                                        <a href="#" class="list-group-item border-0 menu-link" onclick="location.reload();">
                                            <i class="mdi mdi-home-outline font-20 align-middle me-2"></i>Home
                                        </a>
                                        <a href="#" class="list-group-item border-0 menu-link" data-type="myfiles">
                                            <i class="mdi mdi-folder-outline font-18 align-middle me-2"></i>My Files
                                        </a>
                                        <a href="#" class="list-group-item border-0 menu-link" data-type="gdrive">
                                            <i class="mdi mdi-google-drive font-18 align-middle me-2"></i>Google Drive
                                        </a>
                                        <a href="#" class="list-group-item border-0 menu-link" data-type="starred">
                                            <i class="mdi mdi-star-outline font-18 align-middle me-2"></i>Starred
                                        </a>
                                        <a href="#" class="list-group-item border-0 menu-link" data-type="deleted">
                                            <i class="mdi mdi-delete font-18 align-middle me-2"></i>Deleted Files
                                        </a>
                                    </div>


                                    <div class="mt-5">
                                        <h4><span
                                                class="badge rounded-pill p-1 px-2 badge-secondary-lighten">FREE</span>
                                        </h4>
                                        <h6 class="text-uppercase mt-3">Storage</h6>
                                        <div class="progress my-2 progress-sm">
                                            <div class="progress-bar progress-lg bg-success" role="progressbar"
                                                style="width: 46%" aria-valuenow="46" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="text-muted font-12 mb-0">7.02 GB (46%) of 15 GB used</p>
                                    </div>

                                </div>

                                <div class="page-aside-right" id="right-content">

                                    <div class="d-lg-flex justify-content-between align-items-center">
                                        <div class="app-search">
                                            <form>
                                                <div class="mb-2 position-relative">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search files...">
                                                    <span class="mdi mdi-magnify search-icon"></span>
                                                </div>
                                            </form>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-sm btn-light"><i
                                                    class="mdi mdi-format-list-bulleted"></i></button>
                                            <button type="submit" class="btn btn-sm"><i
                                                    class="mdi mdi-view-grid"></i></button>
                                            <button type="submit" class="btn btn-sm"><i
                                                    class="mdi mdi-information-outline"></i></button>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <h5 class="mb-2">Quick Access</h5>

                                        <div class="row mx-n1 g-0">
                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-folder-zip font-16"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold" data-type="">Hyper-sketch.zip</a>
                                                                <p class="mb-0 font-13">2.3 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-folder font-16"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">Compile Version</a>
                                                                <p class="mb-0 font-13">87.2 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-primary-lighten text-primary rounded">
                                                                        <i
                                                                            class="mdi mdi-folder-zip-outline font-16"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">admin.zip</a>
                                                                <p class="mb-0 font-13">45.1 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-file-pdf-box font-16"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">Docs.pdf</a>
                                                                <p class="mb-0 font-13">7.5 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-file-pdf-box font-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">License-details.pdf</a>
                                                                <p class="mb-0 font-13">784 KB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-folder-account font-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">Purchase Verification</a>
                                                                <p class="mb-0 font-13">2.2 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-lg-6">
                                                <div class="card m-1 shadow-none border">
                                                    <div class="p-2">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-light text-secondary rounded">
                                                                        <i class="mdi mdi-folder-account font-18"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-0">
                                                                <a href="javascript:void(0);"
                                                                    class="text-muted fw-bold">Hyper Integrations</a>
                                                                <p class="mb-0 font-13">874 MB</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <h5 class="mb-3">Recent</h5>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Last Modified</th>
                                                        <th class="border-0">Size</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="ms-2 fw-semibold"><a
                                                                    href="javascript: void(0);" class="text-reset">App
                                                                    Design & Development</a></span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Jan 03, 2020</p>
                                                            <span class="font-12">by Andrew</span>
                                                        </td>
                                                        <td>128 MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="ms-2 fw-semibold"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-reset">Hyper-sketch-design.zip</a></span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Feb 13, 2020</p>
                                                            <span class="font-12">by Coderthemes</span>
                                                        </td>
                                                        <td>521 MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="ms-2 fw-semibold"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-reset">Annualreport.pdf</a></span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Dec 18, 2019</p>
                                                            <span class="font-12">by Alejandro</span>
                                                        </td>
                                                        <td>7.2 MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="ms-2 fw-semibold"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-reset">Wireframes</a></span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Nov 25, 2019</p>
                                                            <span class="font-12">by Dunkle</span>
                                                        </td>
                                                        <td>54.2 MB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="ms-2 fw-semibold"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-reset">Documentation.docs</a></span>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Feb 9, 2020</p>
                                                            <span class="font-12">by Justin</span>
                                                        </td>
                                                        <td>8.3 MB</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © iGnis - Sudipta Ghosh
                </div>
                <!-- <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div> -->
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script>
        function uploadFile(type) {
            switch (type) {
                case 'file':
                    document.getElementById('fileInput_file').click();
                    break;
                case 'document':
                    document.getElementById('fileInput_document').click();
                    break;
                case 'choose':
                    document.getElementById('fileInput_choose').click();
                    break;
                case 'folder':
                    document.getElementById('folderInput').click();
                    break;
            }
        }

        function handleFile(files) {
            // Do something with the selected files
            console.log("Files selected:", files);
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.menu-link').click(function (e) {
                e.preventDefault();
                let type = $(this).data('type');

                // Optional: Show loading state
                $('#right-content').html('<p class="text-center text-muted">Loading...</p>');

                // AJAX call to fetch content
                $.ajax({
                    url: 'fetch-content.php', // This is your backend route
                    method: 'POST',
                    data: { type: type },
                    beforeSend: function () {
                        // Show loading before request is sent
                        $('#right-content').html(`
            <div class="text-center my-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Loading content, please wait...</p>
            </div>
        `);
                    },
                    success: function (response) {
                        $('#right-content').html(response);
                    },
                    error: function () {
                        $('#right-content').html('<p class="text-danger text-center">Failed to load content.</p>');
                    }
                });
            });
        });
    </script>



</body>

</html>