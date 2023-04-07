@extends('layouts.app')

@section('content')
    <section>
        <a href="{{ route('contracts.create') }}" class="btn btn-primary">
            Thêm hợp đồng
        </a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã hợp đồng</th>
                    <th>Tên khách hàng</th>
                    <th>Tên dịch vụ</th>
                    <th>Thời gian ký kết</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($contracts->count() <= 0)
                    <tr>
                        <td colspan="6" class="text-center">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach ($contracts as $contract)
                        <tr>
                            <td>1</td>
                            <td>{{ $contract->code }}</td>
                            <td>{{ $contract->customer->fullname }}</td>
                            <td>{{ $contract->service->name }}</td>
                            <td>{{ date('d-m-Y', strtotime($contract->beginDate)) }}</td>
                            <td>
                                <form method="POST" action="{{ route('contracts.destroy', ['contract' => $contract->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('contracts.edit', ['contract' => $contract->id]) }}"
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
