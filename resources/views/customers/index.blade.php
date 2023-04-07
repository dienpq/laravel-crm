@extends('layouts.app')

@section('content')
    <section>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">
            Thêm khách hàng
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
                @if ($customers->count() <= 0)
                    <tr>
                        <td colspan="6" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach ($customers as $customer)
                        <tr>
                            <td>1</td>
                            <td>{{ $customer->fullname }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>
                                <form method="POST" action="{{ route('customers.destroy', ['customer' => $customer->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('customers.show', ['customer' => $customer->id]) }}"
                                        class="btn btn-secondary">Show</a>
                                    <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}"
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
