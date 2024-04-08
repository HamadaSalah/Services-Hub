
@extends('Admin.master')
@section('content')
    <div class="layout-page">
      @include('Admin.layouts.nav')

        <div class="container">
            <div class="rowd">
                <div class="card mt-5">
                  <div>
                    <h5 class="card-header" style="float: left;">Create New Category</h5>
                   </div>
                  <div class="col-xl">
                    <div class="cardd mb-4 px-3">
                      <div class="card-headedr d-flex justify-content-between align-items-center">
                       </div>
                      <div class="card-body">
                        <form method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-fullname"  name="name" >
                                <label for="basic-default-fullname">Category Name</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="text" class="form-control" id="basic-default-fullname"  name="job_name">
                                <label for="basic-default-fullname">Job Name</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" class="form-control" id="basic-default-fullname" name="img" >
                                <label for="basic-default-fullname">IMG</label>
                            </div>
                           </div>
                          <button type="submit" class="btn btn-success mx-3 waves-effect waves-light">Send</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
        </div>
    </div>
@endsection



