@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_induk")) }}
@endsection

@section("root")
    {{ route("rekening_induk.index") }}
@endsection

@section("form-create")
    <form action="{{ route("rekening_induk.store") }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("rekening balance income") }}</span>
                    </label>
                    <select name="rekbi" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_balance_incomes as $rekening_balance_income)
                            <option value="{{ $rekening_balance_income->kode }}">{{ $rekening_balance_income->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value=""/ required>
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
