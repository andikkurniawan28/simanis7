@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "gudang")) }}
@endsection

@section("root")
    {{ route("gudang.index") }}
@endsection

@section("form-create")
    <form action="{{ route("gudang.update", $gudang->kode) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $gudang->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $gudang->keterangan }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("omzet") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="omzet" value="{{ $gudang->omzet }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("jual") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="jual" value="{{ $gudang->jual }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kodesc") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kodesc" value="{{ $gudang->kodesc }}" />
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
