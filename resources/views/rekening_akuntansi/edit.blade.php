@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_akuntansi")) }}
@endsection

@section("root")
    {{ route("rekening_akuntansi.index") }}
@endsection

@section("form-create")
    <form action="{{ route("rekening_akuntansi.update", $rekening_akuntansi->kode) }}" method="POST">
        @csrf @method("PUT")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $rekening_akuntansi->kode }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $rekening_akuntansi->nama }}"/ required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("rekening balance income") }}</span>
                    </label>
                    <select name="rekbi" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_balance_incomes as $rekening_balance_income)
                            <option value="{{ $rekening_balance_income->kode }}"
                                @if($rekening_akuntansi->rekbi == $rekening_balance_income->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $rekening_balance_income->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("rekening induk") }}</span>
                    </label>
                    <select name="mainkode" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_induks as $rekening_induk)
                            <option value="{{ $rekening_induk->kode }}"
                                @if($rekening_akuntansi->mainkode == $rekening_induk->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $rekening_induk->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("rekening induk") }}</span>
                    </label>
                    <select name="subkode" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_subs as $rekening_sub)
                            <option value="{{ $rekening_sub->kode }}"
                                @if($rekening_akuntansi->subkode == $rekening_sub->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $rekening_sub->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
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
