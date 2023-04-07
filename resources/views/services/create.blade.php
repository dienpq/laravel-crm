@extends('layouts.app')

@section('content')
    <section>
        <form method="POST" action="{{ route('services.store') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Tên dịch vụ') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Số tiền / tháng') }}</label>

                <div class="col-md-6">
                    <input id="price" type="price" class="form-control @error('price') is-invalid @enderror"
                        name="price" value="{{ old('price') }}" autocomplete="price">

                    @error('price')
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
                        name="description" autocomplete="description">{{ old('description') }}</textarea>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            Thêm
                        </button>
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
