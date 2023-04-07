@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Chỉnh sửa') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="fullname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Họ và tên') }}</label>

                                <div class="col-md-6">
                                    <input id="fullname" type="text"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{ $user->fullname ?? old('fullname') }}" autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="address"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ $user->address ?? old('address') }}" autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Số điện thoại') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ $user->phone ?? old('phone') }}" autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $user->email ?? old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 align-items-center">
                                <label for="role" class="col-md-4 col-form-label text-md-end">Vai trò:</label>
                                <div class="col-md-6 form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" {{ $user->role == 1 ? 'checked' : '' }}
                                            type="radio" name="role" id="owner" value="1">
                                        <label class="form-check-label" for="owner">Chủ sở hữu</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" {{ $user->role == 2 ? 'checked' : '' }}
                                            type="radio" name="role" id="manage" value="2">
                                        <label class="form-check-label" for="manage">Quản lý</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" {{ $user->role == 3 ? 'checked' : '' }}
                                            type="radio" name="role" id="staff" value="3">
                                        <label class="form-check-label" for="staff">Nhân viên</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success">
                                            Cập nhật
                                        </button>
                                        <a href="{{ route('users.index') }}" class="btn btn-secondary">
                                            Quay lại
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
