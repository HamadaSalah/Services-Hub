@extends('Admin.master')
@section('content')
<div class="layout-page">
    @include('Admin.layouts.nav')

    <div class="container">
        <div class="rowd">
            <div class="card mt-5">
                <h5 class="card-header">User Data</h5>
                <div class="container-xxl flex-grow-1 container-p-y" bis_skin_checked="1">

                    <div class="row" bis_skin_checked="1">
                        <!-- User Sidebar -->
                        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0" bis_skin_checked="1">
                            <!-- User Card -->
                            <div class="card mb-4" bis_skin_checked="1">
                                <div class="card-body" bis_skin_checked="1">
                                    <div class="user-avatar-section" bis_skin_checked="1">
                                        <div class=" d-flex align-items-center flex-column" bis_skin_checked="1">
                                            <img class="img-fluid rounded mb-3 mt-4"
                                                src="{{ asset('admin/assets/img/avatars/1.png') }}"
                                                height="120" width="120" alt="User avatar">
                                            <div class="user-info text-center" bis_skin_checked="1">
                                                <h4>Violet Mendoza</h4>
                                                <span class="badge bg-label-danger rounded-pill">Author</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between flex-wrap my-2 py-3"
                                        bis_skin_checked="1">
                                        <div class="d-flex align-items-center me-4 mt-3 gap-3" bis_skin_checked="1">
                                            <div class="avatar" bis_skin_checked="1">
                                                <div class="avatar-initial bg-label-primary rounded"
                                                    bis_skin_checked="1">
                                                    <i class="mdi mdi-check mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div bis_skin_checked="1">
                                                <h4 class="mb-0">1.23k</h4>
                                                <span>Tasks Done</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 gap-3" bis_skin_checked="1">
                                            <div class="avatar" bis_skin_checked="1">
                                                <div class="avatar-initial bg-label-primary rounded"
                                                    bis_skin_checked="1">
                                                    <i class="mdi mdi-star-outline mdi-24px"></i>
                                                </div>
                                            </div>
                                            <div bis_skin_checked="1">
                                                <h4 class="mb-0">568</h4>
                                                <span>Feedbacks</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="pb-3 border-bottom mb-3">Details</h5>
                                    <div class="info-container" bis_skin_checked="1">
                                        <ul class="list-unstyled mb-4">
                                            <li class="mb-3">
                                                <span class="h6">Username:</span>
                                                <span>@violet.dev</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Email:</span>
                                                <span>vafgot@vultukir.org</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Status:</span>
                                                <span class="badge bg-label-success rounded-pill">Active</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">Category:</span>
                                                <span>Author</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">country</span>
                                                <span>country - city</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">description:</span>
                                                <span>description</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">card_id:</span>
                                                <span>card_id</span>
                                            </li>
                                            <li class="mb-3">
                                                <span class="h6">licence:</span>
                                                <span>licence</span>
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-center" bis_skin_checked="1">
                                            <a href="javascript:;"
                                                class="btn btn-outline-danger suspend-user waves-effect">Suspend</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /User Card -->
                        </div>
                        <!--/ User Sidebar -->


                        <!-- User Content -->
                        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1" bis_skin_checked="1">
                            <!-- User Tabs -->
                            <ul class="nav nav-pills flex-column flex-md-row flex-wrap mb-4">
                                <li class="nav-item"><a class="nav-link active waves-effect waves-light"
                                        href=""><i
                                            class="mdi mdi-account-outline mdi-20px me-1"></i>Appointments (Projects)</a></li>
                                
                            
                                <li class="nav-item"><a class="nav-link waves-effect waves-light"
                                        href="?page=menu"><i
                                            class="mdi mdi-bell-outline mdi-20px me-1"></i>menu</a></li>
                                
                            </ul>
                            <!--/ User Tabs -->

                            <!-- Project table -->
                            <div class="card mb-4" bis_skin_checked="1">
                                <h5 class="card-header">GALLERY</h5>
                                <div class="row" style="padding: 20px">
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <div class="card h-100">
                                          <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap">
                                          <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Project table -->

                        </div>
                        <!--/ User Content -->
                    </div>

                    <!-- Modal -->
                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user" bis_skin_checked="1">
                            <div class="modal-content p-3 p-md-5" bis_skin_checked="1">
                                <div class="modal-body py-3 py-md-0" bis_skin_checked="1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-4" bis_skin_checked="1">
                                        <h3 class="mb-2">Edit User Information</h3>
                                        <p class="pt-1">Updating user details will receive a privacy audit.</p>
                                    </div>
                                    <form id="editUserForm" class="row g-4 fv-plugins-bootstrap5 fv-plugins-framework"
                                        onsubmit="return false" novalidate="novalidate">
                                        <div class="col-12 col-md-6 fv-plugins-icon-container" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <input type="text" id="modalEditUserFirstName"
                                                    name="modalEditUserFirstName" class="form-control"
                                                    placeholder="John">
                                                <label for="modalEditUserFirstName">First Name</label>
                                            </div>
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                                                bis_skin_checked="1"></div>
                                        </div>
                                        <div class="col-12 col-md-6 fv-plugins-icon-container" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" placeholder="Doe">
                                                <label for="modalEditUserLastName">Last Name</label>
                                            </div>
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                                                bis_skin_checked="1"></div>
                                        </div>
                                        <div class="col-12 fv-plugins-icon-container" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <input type="text" id="modalEditUserName" name="modalEditUserName"
                                                    class="form-control" placeholder="john.doe.007">
                                                <label for="modalEditUserName">Username</label>
                                            </div>
                                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                                                bis_skin_checked="1"></div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                                    class="form-control" placeholder="example@domain.com">
                                                <label for="modalEditUserEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <select id="modalEditUserStatus" name="modalEditUserStatus"
                                                    class="form-select" aria-label="Default select example">
                                                    <option selected="">Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Suspended</option>
                                                </select>
                                                <label for="modalEditUserStatus">Status</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                                                <label for="modalEditTaxID">Tax ID</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="input-group input-group-merge" bis_skin_checked="1">
                                                <span class="input-group-text">US (+1)</span>
                                                <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                    <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                                        class="form-control phone-number-mask"
                                                        placeholder="202 555 0111">
                                                    <label for="modalEditUserPhone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline form-floating-select2"
                                                bis_skin_checked="1">
                                                <div class="position-relative" bis_skin_checked="1"><select
                                                        id="modalEditUserLanguage" name="modalEditUserLanguage"
                                                        class="select2 form-select select2-hidden-accessible"
                                                        multiple="" data-select2-id="modalEditUserLanguage"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="">Select</option>
                                                        <option value="english" selected="" data-select2-id="2">English
                                                        </option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="french">French</option>
                                                        <option value="german">German</option>
                                                        <option value="dutch">Dutch</option>
                                                        <option value="hebrew">Hebrew</option>
                                                        <option value="sanskrit">Sanskrit</option>
                                                        <option value="hindi">Hindi</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="1" style="width: auto;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1"
                                                                aria-disabled="false">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-selection__choice"
                                                                        title="English" data-select2-id="3"><span
                                                                            class="select2-selection__choice__remove"
                                                                            role="presentation">×</span>English</li>
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="searchbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span></div>
                                                <label for="modalEditUserLanguage">Language</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline form-floating-select2"
                                                bis_skin_checked="1">
                                                <div class="position-relative" bis_skin_checked="1"><select
                                                        id="modalEditUserCountry" name="modalEditUserCountry"
                                                        class="select2 form-select select2-hidden-accessible"
                                                        data-allow-clear="true" data-select2-id="modalEditUserCountry"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="5">Select</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="China">China</option>
                                                        <option value="France">France</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Korea">Korea, Republic of</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Russia">Russian Federation</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="4" style="width: auto;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0" aria-disabled="false"
                                                                aria-labelledby="select2-modalEditUserCountry-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-modalEditUserCountry-container"
                                                                    role="textbox" aria-readonly="true"><span
                                                                        class="select2-selection__placeholder">Select
                                                                        value</span></span><span
                                                                    class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <label for="modalEditUserCountry">Country</label>
                                            </div>
                                        </div>
                                        <div class="col-12" bis_skin_checked="1">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input">
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Use as a billing address?</span>
                                            </label>
                                        </div>
                                        <div class="col-12 text-center" bis_skin_checked="1">
                                            <button type="submit"
                                                class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary waves-effect"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                        <input type="hidden">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->

                    <!-- Add New Credit Card Modal -->
                    <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true" bis_skin_checked="1">
                        <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan"
                            bis_skin_checked="1">
                            <div class="modal-content p-3 p-md-5" bis_skin_checked="1">
                                <div class="modal-body pt-md-0 px-0" bis_skin_checked="1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-4" bis_skin_checked="1">
                                        <h3 class="mb-2 pb-1">Upgrade Plan</h3>
                                        <p>Choose the best plan for user.</p>
                                    </div>
                                    <form id="upgradePlanForm" class="row g-3 d-flex align-items-center"
                                        onsubmit="return false">
                                        <div class="col-sm-9" bis_skin_checked="1">
                                            <div class="form-floating form-floating-outline" bis_skin_checked="1">
                                                <select id="choosePlan" name="choosePlan" class="form-select"
                                                    aria-label="Choose Plan">
                                                    <option selected="">Choose Plan</option>
                                                    <option value="standard">Standard - $99/month</option>
                                                    <option value="exclusive">Exclusive - $249/month</option>
                                                    <option value="Enterprise">Enterprise - $499/month</option>
                                                </select>
                                                <label for="choosePlan">Choose Plan</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 d-flex align-items-end" bis_skin_checked="1">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Upgrade</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="mx-md-n5 mx-n3">
                                <div class="modal-body pb-md-0 px-0" bis_skin_checked="1">
                                    <p class="mb-0">User current plan is standard plan</p>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap"
                                        bis_skin_checked="1">
                                        <div class="d-flex justify-content-center me-2 mt-3" bis_skin_checked="1">
                                            <sup class="h5 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
                                            <h1 class="display-3 mb-0 text-primary">99</h1>
                                            <sub class="h6 pricing-duration mt-auto mb-2 pb-1 text-body">/month</sub>
                                        </div>
                                        <button
                                            class="btn btn-outline-danger cancel-subscription mt-3 waves-effect">Cancel
                                            Subscription</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Add New Credit Card Modal -->

                    <!-- /Modal -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
