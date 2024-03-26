@extends('backend.master')

@section('backend_content')

<h1>User List</h1>
<table class="table table-striped table-dark"  >
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>


        </tr>
    </thead>
    <tbody>
    @foreach($users as $data)
            <tr>
                <td scope="col">{{$data->id}}</td>
                <td scope="col">{{$data->name}}</td>
                <td scope="col">{{$data->email}}</td>
            </tr>
            @endforeach
    </tbody>
</table>
</div>


@endsection
