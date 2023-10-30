@extends("template.admin.edit")

@section("title")
    {{ ucfirst(str_replace("_", " ", "Kas/Bank")) }}
@endsection

@section("form-create")
    <form action="{{ route("kas_bank.update", $kas_bank->id) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $kas_bank->keterangan }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $kas_bank->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("rekening") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="rekening" value="{{ $kas_bank->rekening }}" required/>
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
