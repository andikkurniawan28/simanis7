@extends("template.admin.edit")

@section("title")
    {{ ucfirst(str_replace("_", " ", "rekening_balance_income")) }}
@endsection

@section("form-create")
    <form action="{{ route("rekening_balance_income.update", $rekening_balance_income->id) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $rekening_balance_income->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $rekening_balance_income->nama }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("dk") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="dk" value="{{ $rekening_balance_income->dk }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kelas") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kelas" value="{{ $rekening_balance_income->kelas }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("balinc") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="balinc" value="{{ $rekening_balance_income->balinc }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("urutfbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="urutfbi" value="{{ $rekening_balance_income->urutfbi }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("urutkbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="urutkbi" value="{{ $rekening_balance_income->urutkbi }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("klpbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="klpbi" value="{{ $rekening_balance_income->klpbi }}" required/>
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
