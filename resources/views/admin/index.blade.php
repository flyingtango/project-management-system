@extends('templates/ins/master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <h1>Admin</h1>
            <p>管理员数量: <span class="badge">{{ $n_users  }}</span></p>
            <p>负责人数量: <span class="badge">{{ $n_clients  }}</span></p>
            <p>项目数量: <span class="badge">{{ $n_projects  }}</span></p>
            <p>任务数量: <span class="badge">{{ $n_tasks  }}</span></p>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>名称</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop()