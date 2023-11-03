@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "termin")) }}
@endsection

@section("root")
    {{ route("termin.index") }}
@endsection

@section("form-create")
    <form action="{{ route("termin.store") }}" method="POST">
        @csrf @method("POST")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ strtoupper("lama") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="lama" value="" step="any" />
        </div>

        {{-- <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ strtoupper("disc") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="disc" value="" step="any" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ strtoupper("hdisc") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hdisc" value="" step="any" />
        </div> --}}

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection

@section("master")
    {{ "active show" }}
@endsection
