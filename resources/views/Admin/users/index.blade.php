
@extends('Admin.master')
@section('content')
    <div class="layout-page">
      @include('Admin.layouts.nav')

        <div class="container">
            <div class="rowd">
                <div class="card mt-5">
                    <h5 class="card-header">All Users</h5>
                    <div class="table-responsive text-nowrap">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($employees as $employee)
                            <tr>
                                <td>
                                  #1
                                </td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>
                                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="{{ $employee->name }}" data-bs-original-title="{{ $employee->name }}">
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
                                      <a class="dropdown-item waves-effect" href="{{ Route('admin.user.show', $employee->id) }}"><i class="mdi mdi-account-eye-outline"></i> Show Data</a>
                                      <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
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



