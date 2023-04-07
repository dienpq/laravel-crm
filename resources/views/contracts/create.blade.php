@extends('layouts.app')

@section('content')
    <section>
        <form method="POST" action="{{ route('contracts.store') }}">
            @csrf

            <div class="row mb-3">
                <label for="customer_id" class="col-md-4 col-form-label text-md-end">Khách hàng</label>

                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-select" id="customer_id" name="customer_id">
                            <option value="">---Chọn khách hàng---</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->fullname }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('customer_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="service_id" class="col-md-4 col-form-label text-md-end">Dịch vụ</label>

                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-select" id="service_id" name="service_id">
                            <option value="">---Chọn dịch vụ---</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('service_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="beginDate" class="col-md-4 col-form-label text-md-end">{{ __('Ngày ký kết') }}</label>

                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group date" data-bs-provide="datepicker">
                            <input type="text" class="form-control" id="beginDate" name="beginDate">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
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
                        <a href="{{ route('contracts.index') }}" class="btn btn-secondary">
                            Quay lại
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#beginDate').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>
@endsection
