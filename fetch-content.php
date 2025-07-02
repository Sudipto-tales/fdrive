<?php
$type = $_POST['type'] ?? '';

switch ($type) {
    case 'myfiles':
        echo '<div class="row mx-n1 g-0">
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
                                                                    class="text-muted fw-bold">Hyper-sketch.zip</a>
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
                                        </div>';
        break;

    case 'gdrive':
        echo '<h4>Google Drive</h4><p>Fetching files from Google Drive...</p>';
        break;

    case 'dropbox':
        echo '<h4>Dropbox</h4><p>Dropbox contents appear here.</p>';
        break;

    case 'shared':
        echo '<h4>Shared with Me</h4><p>Files others shared with you.</p>';
        break;

    case 'recent':
        echo '<div class="table-responsive">
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
                                        </div>';
        break;

    case 'starred':
        echo '<h4>Starred</h4><p>Your important/starred files.</p>';
        break;

    case 'deleted':
        echo '<h4>Deleted Files</h4><p>Trash bin content goes here.</p>';
        break;

    default:
        echo '<p>Invalid type selected.</p>';
        break;
}
?>