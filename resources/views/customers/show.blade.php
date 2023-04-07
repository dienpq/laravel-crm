@extends('layouts.app')

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thôn tin khách hàng</div>

                    <div class="card-body">
                        <div class="info">
                            <div class="row mb-3">
                                <label for="fullname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Họ và tên') }}</label>

                                <div class="col-md-6">
                                    <input disabled id="fullname" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{ $customer->fullname }}" autocomplete="fullname" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ') }}</label>

                                <div class="col-md-6">
                                    <input disabled id="address" type="address"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ $customer->address }}" autocomplete="address">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                                <div class="col-md-6">
                                    <input disabled id="phone" type="phone"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ $customer->phone }}" autocomplete="phone">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input disabled id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $customer->email }}" autocomplete="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mô tả') }}</label>

                                <div class="col-md-6">
                                    <textarea disabled role="5" id="description" type="text"
                                        class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description">{{ $customer->description }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('customers.index') }}" class="btn btn-secondary">
                                            Quay lại
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4">
        <h4>Danh sách các hợp đồng</h4>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã hợp đồng</th>
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
                            <td>{{ $contract->service->name }}</td>
                            <td>{{ date('d-m-Y', strtotime($contract->beginDate)) }}</td>
                            <td>
                                <form method="POST"
                                    action="{{ route('contracts.destroy', ['contract' => $contract->id]) }}">
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
