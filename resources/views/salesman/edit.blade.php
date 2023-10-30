@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "salesman")) }}
@endsection

@section("form-create")
    <form action="{{ route("salesman.update", $salesman->kode) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $salesman->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $salesman->nama }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat" value="{{ $salesman->alamat }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("telepon") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="telepon" value="{{ $salesman->telepon }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kota") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kota" value="{{ $salesman->kota }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $salesman->keterangan }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("khusus") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="khusus" value="{{ $salesman->ktp }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ strtoupper("ktp") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="ktp" value="{{ $salesman->ktp }}" />
        </div>

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection
