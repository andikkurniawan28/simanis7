@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "customer")) }}
@endsection

@section("root")
    {{ route("customer.index") }}
@endsection

@section("form-create")
    <form action="{{ route("customer.update", $customer->id) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $customer->keterangan }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $customer->kode }}" required/>
        </div>

        @php
            $var = array(
                "nama",
                "alamat1",
                "alamat2",
                "telp",
                "fax",
                "kota",
                "nmkota",
                "kodepos",
                "golongan_id",
                "disc1",
                "disc2",
                "plafon",
                "khusus",
                "ekspedisi",
                "status",
                "termin_id",
                "mata_uang_id",
                "person",
                "hp",
                "ptelp",
                "pfax",
                "email",
                "sk",
                "tipe",
                "noac",
                "npwp",
                "namawp",
                "alamatwp",
            );

            $type = array(
                "text",
                "text",
                "text",
                "text",
                "text",
                "text",
                "text",
                "text",
                "number",
                "number",
                "number",
                "number",
                "text",
                "text",
                "text",
                "number",
                "number",
                "text",
                "text",
                "text",
                "text",
                "email",
                "text",
                "text",
                "text",
                "text",
                "text",
                "text",
            );
        @endphp

        @for($i=0; $i<count($var); $i++)
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords($var[$i]) }}</span>
            </label>
            <input type="{{ $type[$i] }}" class="form-control form-control-solid" placeholder="" name="{{ $var[$i] }}" value="{{ $customer->{$var[$i]} }}" required/>
        </div>
        @endfor

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection
