@extends('Admin.master')
@section('content')
    <div class="layout-page">
        <!-- Navbar -->

        <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="mdi mdi-menu mdi-24px"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        <i class="mdi mdi-magnify mdi-24px lh-0"></i>
                        <input
                            type="text"
                            class="form-control border-0 shadow-none bg-body"
                            placeholder="Search..."
                            aria-label="Search..." />
                    </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a
                            class="nav-link dropdown-toggle hide-arrow p-0"
                            href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                            <li>
                                <a class="dropdown-item pb-2 mb-1" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2 pe-1">
                                            <div class="avatar avatar-online">
                                                <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-0">John Doe</h6>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider my-1"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                             <li>
                                <div class="dropdown-divider my-1"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <i class="mdi mdi-power me-1 mdi-20px"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row gy-4">
                    <!-- Congratulations card -->
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-1">Congratulations John! 🎉</h4>
                                <p class="pb-0">Best seller of the month</p>
                                <h4 class="text-primary mb-1">$42.8k</h4>
                                <p class="mb-2 pb-1">78% of target 🚀</p>
                                <a href="javascript:;" class="btn btn-sm btn-primary">View Sales</a>
                            </div>
                            <img
                                src="{{asset('admin/assets/img/icons/misc/triangle-light.png')}}"
                                class="scaleX-n1-rtl position-absolute bottom-0 end-0"
                                width="166"
                                alt="triangle background"
                                data-app-light-img="icons/misc/triangle-light.png"
                                data-app-dark-img="icons/misc/triangle-dark.png" />
                            <img
                                src="{{asset('admin/assets/img/illustrations/trophy.png')}}"
                                class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2"
                                width="83"
                                alt="view sales" />
                        </div>
                    </div>
                    <!--/ Congratulations card -->

                    <!-- Transactions -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title m-0 me-2">Transactions</h5>
                                    <div class="dropdown">
                                        <button
                                            class="btn p-0"
                                            type="button"
                                            id="transactionID"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-primary rounded shadow">
                                                    <i class="mdi mdi-trending-up mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Sales</div>
                                                <h5 class="mb-0">245k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-success rounded shadow">
                                                    <i class="mdi mdi-account-outline mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Customers</div>
                                                <h5 class="mb-0">12.5k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-warning rounded shadow">
                                                    <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Product</div>
                                                <h5 class="mb-0">1.54k</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar">
                                                <div class="avatar-initial bg-info rounded shadow">
                                                    <i class="mdi mdi-currency-usd mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <div class="small mb-1">Revenue</div>
                                                <h5 class="mb-0">$88k</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transactions -->


                </div>
            </div>
            <!-- / Content -->


            <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    </div>
@endsection


