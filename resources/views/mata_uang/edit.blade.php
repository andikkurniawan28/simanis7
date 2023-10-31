@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "mata_uang")) }}
@endsection

@section("root")
    {{ route("mata_uang.index") }}
@endsection

@section("form-create")
    <form action="{{ route("mata_uang.update", $mata_uang->kode) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("tanggal") }}</span>
            </label>
            <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $mata_uang->tgl }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $mata_uang->kode }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kurs") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $mata_uang->kurs }}" step="any"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $mata_uang->keterangan }}"/>
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
