{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Roles')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <h1>
                    <i class="fa fa-key"></i> Roles
                    <a href="{{ route('users.index') }}" class="mt-1 ml-1 btn btn-default pull-right">Users</a>
                    <a href="{{ route('permissions.index') }}" class="mt-1  btn btn-default pull-right">Permissions</a>
                </h1>

                <hr>

                <div class="table-responsive">

                    <table class="table table-bordered table-striped text-center">
                        <thead>
                        <tr>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Operation</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($roles as $role)
                            <tr>

                                <td>{{ $role->name }}</td>

                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}

                                <td>

                                    <div class="row">

                                        <div class="col-sm-8">
                                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}"
                                               class="fa fa-edit btn btn-info"
                                               style="margin-right: 5px"></a>
                                        </div>

                                        <div class="col-sm-4" style="margin-left: -20px">
                                            <form
                                                action="{{route('roles.destroy',$role->id)}}"
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

                <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>

            </div>
        </div>
    </div>




@endsection
