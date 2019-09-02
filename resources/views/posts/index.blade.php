@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3>Posts From Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }} </h3>


                    </div>


                    <div class="table-responsive">

                        <table class="table table-bordered table-striped text-center">

                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Post Title</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>

                            </thead>

                            <tbody>

                            @php($i=1)
                            @foreach ($posts as $post)

                                <tr>

                                    <td>{{ $i++ }}</td>
                                    <td>{{  str_limit($post->title, 30) }}</td>
                                    <td>{{  str_limit($post->body, 20) }}</td>


                                    <td>
                                        <div class="row">

                                            <div class="col-sm-4">
                                                <a href="{{ route('posts.show', $post->id ) }}"
                                                   class="fa fa-eye btn btn-info"
                                                   style="margin-right: 5px"></a>
                                            </div>

                                            @can('Edit Post')
                                            <div class="col-sm-4">
                                                <a href="{{ route('posts.edit', $post->id ) }}"
                                                   class="fa fa-edit btn btn-info"
                                                   style="margin-right: 5px"></a>
                                            </div>
                                            @endcan

                                            @can('Delete Post')
                                            <div class="col-sm-4" style="margin-left: -20px">
                                                <form
                                                    action="{{route('posts.destroy',$post->id)}}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="fa fa-trash btn btn-danger">
                                                    </button>

                                                </form>
                                            </div>
                                            @endcan

                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>

                    @can('create Post')
                    <a href="{{ URL::to('posts/create') }}" class="btn btn-success">Add Post</a>
                    @endcan


                </div>


                <div style="margin-left: 430px">
                    {!! $posts->links() !!}
                </div>

                <div style="margin-left: 430px">

                </div>
            </div>
        </div>
    </div>

@endsection
