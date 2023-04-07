@extends('layouts.app')

@section('content')
    <section>
        <form method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Họ và tên') }}</label>

                <div class="col-md-6">
                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror"
                        name="fullname" value="{{ $customer->fullname ?? old('fullname') }}" autocomplete="fullname"
                        autofocus>

                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ') }}</label>

                <div class="col-md-6">
                    <input id="address" type="address" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ $customer->address ?? old('address') }}" autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                        name="phone" value="{{ $customer->phone ?? old('phone') }}" autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $customer->email ?? old('email') }}" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Mô tả') }}</label>

                <div class="col-md-6">
                    <textarea role="5" id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                        name="description" autocomplete="description">{{ $customer->description ?? old('description') }}</textarea>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            Cập nhật
                        </button>
                        <a href="{{ route('customers.index') }}" class="btn btn-secondary">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
