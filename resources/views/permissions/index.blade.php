{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 ">

                <h1>
                    <i class="fa fa-key"></i> Available Permissions
                    <a href="{{ route('users.index') }}" class="mt-1 ml-1 btn btn-default pull-right">Users</a>
                    <a href="{{ route('roles.index') }}" class="mt-1  btn btn-default pull-right">Roles</a>
                </h1>

                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">

                        <thead>
                        <tr>
                            <th>Permissions</th>
                            <th>Operation</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach ($permissions as $permission)

                            <tr>
                                <td>{{ $permission->name }}</td>

                                <td>

                                    <div class="row">

                                        <div class="col-sm-8">
                                            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}"
                                               class="fa fa-edit btn btn-info" style="margin-right: 5px"></a>
                                        </div>

                                        <div class="col-sm-4" style="margin-left: -20px" >
                                            <form
                                                action="{{route('permissions.destroy',$permission->id)}}"
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

                <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

            </div>
        </div>
    </div>


@endsection
