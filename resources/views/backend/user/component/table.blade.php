<table class="table table-bordered">
            <thead>
                <tr>
                    <th><input type="checkbox" value="" id="checkboxAll" class='input-checkbox'></input></th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th class='text-center'>Status</th>
                    <th class='text-center'>Operation</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($users)&&is_object($users))
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <input type="checkbox" value="" class='input-checkbox checkBoxItem'></input>
                            </td>
                            <td>
                                <div class="info-user name">{{$user->fullname}}</div>
                            </td>
                            <td>
                                <div class="info-user email">{{$user->email}}</div>
                            </td>

                            <td>
                                <div class="info-user phone"> {{$user->phone_number}}</div>
                            </td>
                            <td>{{$user->address}}</td>
                            <td class='text-center pv'><input type="checkbox" class="js-switch_2" checked /></td>
                            <td class='text-center pv'>
                                <a href="{{route('admin.user.edit', $user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('admin.user.delete', $user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
        {{$users->links('pagination::bootstrap-4')}}
        