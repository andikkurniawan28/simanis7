@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_balance_income")) }}
@endsection

@section("root")
    {{ route("rekening_balance_income.index") }}
@endsection

@section("form-create")
    <form action="{{ route("rekening_balance_income.store") }}" method="POST">
        @csrf @method("POST")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value=""/ required>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("debit / kredit") }}</span>
                    </label>
                    <select name="dk" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="D">Debit</option>
                        <option value="K">Kredit</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("balance / income") }}</span>
                    </label>
                    <select name="balinc" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="B">Balance</option>
                        <option value="I">Income</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("urutan FBI") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="urutfbi" value=""/ >
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("urutan KBI") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="urutkbi" value=""/ >
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kelompok balance income") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="klpbi" value=""/ required>
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

@section("master")
    {{ "active show" }}
@endsection
