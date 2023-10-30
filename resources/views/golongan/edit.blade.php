@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "golongan")) }}
@endsection

@section("form-create")
    <form action="{{ route("golongan.update", $golongan->id) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $golongan->keterangan }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $golongan->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ strtoupper("ppn") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $golongan->ppn }}" step="any" required/>
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
