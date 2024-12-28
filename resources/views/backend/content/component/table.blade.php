<table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category ID</th>
                    <th>User Post</th>
                    <th class='text-center'>Operation</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($posts)&&is_object($posts))
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                <div class="info-user name">{{$post->id}}</div>
                                
                            </td>
                            <td>
                                <div class="info-user name">{{$post->title}}</div>
                            </td>
                            <td>
                                <div class="info-user email">{{$post->category_id}}</div>
                            </td>

                            <td>
                                <div class="info-user phone"> {{$post->user_id}}</div>
                            </td>
                            <td class='text-center pv'>
                                <a href="{{ route('admin.content.editPost', ['id' => $post->id]) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a data-toggle="modal" class="btn btn-danger modal-form-03" href="#modal-form-03" data-id="{{ $post->id }}"
                  data-title="{{ $post->title }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>

        {{$posts->links('pagination::bootstrap-4')}}
