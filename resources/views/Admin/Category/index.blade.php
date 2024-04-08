
@extends('Admin.master')
@section('content')
    <div class="layout-page">
      @include('Admin.layouts.nav')

        <div class="container">
            <div class="rowd">
                <div class="card mt-5">
                  <div>
                    <h5 class="card-header" style="float: left;">All Categories</h5>
                    <a href="{{ Route('admin.category.create') }}"><button class="btn btn-success mt-3 mx-3" style="float: right;display: inline-block;width: 210px;">New Category</button>
                    </a>
                  </div>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($cats as $cat)
                            <tr>
                                <td>
                                  #{{ $loop->index+1 }}
                                </td>
                                <td>{{ $cat->name }}</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="{{ $cat->name }}" data-bs-original-title="{{ $cat->name }}">
                                      <img src="{{ asset('admin/assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                                    </li>
                                   </ul>
                                </td>
                                <td>
                                  <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                      <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item waves-effect" href="{{ Route('admin.category.show', $cat->id) }}"><i class="mdi mdi-account-eye-outline"></i> Show Data</a>
                                         <form style="display: inline;"
                                        action="{{ route('admin.category.destroy', $cat->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class=" btn" type="submit"><i class="mdi mdi-trash-can-outline me-1"></i> Delete </button>
                                    </form>
        
                                        
                                    </div>
                                  </div>
                                </td>
                            </tr>
    
                            @endforeach
                         </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection



