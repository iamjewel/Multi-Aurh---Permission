{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Users')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-lg-offset-1">

                <h1>
                    <i class="fa fa-key"></i> User Administration
                    <a href="{{ route('roles.index') }}" class="mt-1 ml-1 btn btn-default pull-right">Roles</a>
                    <a href="{{ route('permissions.index') }}" class="mt-1  btn btn-default pull-right">Permissions</a>
                </h1>

                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date/Time Added</th>
                            <th>User Roles</th>
                            <th>Operations</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                                <td>

                                    <div class="row">

                                        <div class="col-sm-8">
                                            <a href="{{ route('users.edit', $user->id) }}"
                                               class="fa fa-edit btn btn-info"
                                               style="margin-right: 5px"></a>
                                        </div>

                                        <div class="col-sm-4" style="margin-left: -20px">
                                            <form
                                                action="{{route('users.destroy',$user->id)}}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="fa fa-trash btn btn-danger">
                                                </button>

                                            </form>
                                        </div>

                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

            </div>
        </div>
    </div>



@endsection
