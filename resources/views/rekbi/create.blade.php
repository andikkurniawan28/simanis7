@extends("template.admin.create")

@section("title")
    {{ ucfirst(str_replace("_", " ", "Rek BI")) }}
@endsection

@section("form-create")
    <form action="{{ route("rekbi.store") }}" method="POST">
        @csrf @method("POST")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("dk") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="dk" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("kelas") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kelas" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("balinc") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="balinc" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("urutfbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="urutfbi" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("urutkbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="urutkbi" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucfirst("klpbi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="klpbi" value="" required/>
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