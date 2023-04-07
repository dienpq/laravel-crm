@extends('layouts.app')

@section('content')
    <section>
        <a href="{{ route('users.create') }}" class="btn btn-primary">
            Đăng ký mới
        </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($users->count() <= 0)
                    <tr>
                        <td colspan="6" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach ($users as $user)
                        <tr>
                            <td>1</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    </section>
@endsection
