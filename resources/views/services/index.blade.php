@extends('layouts.app')

@section('content')
    <section>
        <a href="{{ route('services.create') }}" class="btn btn-primary">
            Thêm dịch vụ
        </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã dịch vụ</th>
                    <th>Tên dịch vụ</th>
                    <th>Số tiền / tháng</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($services->count() <= 0)
                    <tr>
                        <td colspan="6" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach ($services as $service)
                        <tr>
                            <td>1</td>
                            <td>{{ $service->code }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ number_format($service->price, 0, ',', '.') }}</td>
                            <td>
                                <form method="POST" action="{{ route('services.destroy', ['service' => $service->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('services.edit', ['service' => $service->id]) }}"
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
