@extends("template.admin.edit")

@section("title")
    {{ ucfirst(str_replace("_", " ", "termin")) }}
@endsection

@section("form-create")
    <form action="{{ route("termin.update", $termin->id) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $termin->keterangan }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $termin->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ strtoupper("lama") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="lama" value="{{ $termin->lama }}" step="any" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ strtoupper("disc") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="disc" value="{{ $termin->disc }}" step="any" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ strtoupper("hdisc") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hdisc" value="{{ $termin->hdisc }}" step="any" required/>
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