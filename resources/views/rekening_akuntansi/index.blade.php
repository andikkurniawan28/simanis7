@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_akuntansi")) }}
@endsection

@section("form-create")
    <form action="{{ route("rekening_akuntansi.store") }}" method="POST">
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
                        <span class="required">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value=""/ required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "rek_bi")) }}</span>
                    </label>
                    <select name="rekbi" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_balance_incomes as $rekening_balance_income)
                            <option value="{{ $rekening_balance_income->kode }}">{{ $rekening_balance_income->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "rek_induk")) }}</span>
                    </label>
                    <select name="mainkode" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_induks as $rekening_induk)
                            <option value="{{ $rekening_induk->kode }}">{{ $rekening_induk->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("rekening sub") }}</span>
                    </label>
                    <select name="subkode" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($rekening_subs as $rekening_sub)
                            <option value="{{ $rekening_sub->kode }}">{{ $rekening_sub->nama }}</option>
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

@section("table")
    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="example">
        <thead>
            <tr class="fw-bolder text-muted">
                <th>{{ ucwords("no") }}</th>
                <th>{{ ucwords("tindakan") }}</th>
                <th>{{ ucwords("kode") }}</th>
                <th>{{ ucwords("nama") }}</th>
                <th>{{ ucwords(str_replace("_", " ", "rek_induk")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "rek_sub")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "rek_bi")) }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rekening_akuntansis as $rekening_akuntansi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="d-flex center-content-end flex-shrink-0">
                        <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#show{{ $loop->iteration }}">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-info"></i>
                            </span>
                        </button>
                        <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#edit{{ $loop->iteration }}">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-edit"></i>
                            </span>
                        </button>
                        <button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#delete{{ $loop->iteration }}">
                            <span class="svg-icon svg-icon-3">
                                <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </div>
                </td>
                <td>{{ $rekening_akuntansi->kode }}</td>
                <td>{{ $rekening_akuntansi->nama }}</td>
                <td>{{ $rekening_akuntansi->nama_rekening_induk }}</td>
                <td>{{ $rekening_akuntansi->nama_rekening_sub }}</td>
                <td>{{ $rekening_akuntansi->nama_rekening_balance_income }}</td>
            </tr>
            <div class="modal fade" id="show{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mw-650px">
                    <div class="modal-content">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Detail @yield("title")</h1>
                            </div>
                            <div class="mb-10">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "kode")) }} : {{ $rekening_akuntansi->kode }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "nama")) }} : {{ $rekening_akuntansi->nama }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "rek_bi")) }} : {{ $rekening_akuntansi->nama_rekening_balance_income }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "rek_induk")) }} : {{ $rekening_akuntansi->nama_rekening_induk }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "rek_sub")) }} : {{ $rekening_akuntansi->nama_rekening_sub }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mw-650px">
                    <div class="modal-content">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Edit @yield("title")</h1>
                            </div>
                            <div class="mb-10">
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
                                                    <span class="">{{ ucwords(str_replace("_", " ", "rek_bi")) }}</span>
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
                                                    <span class="">{{ ucwords(str_replace("_", " ", "rek_induk")) }}</span>
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
                                                    <span class="">{{ ucwords(str_replace("_", " ", "rek_sub")) }}</span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="delete{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mw-650px">
                    <div class="modal-content">
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                            <div class="text-center mb-13">
                                <h1 class="mb-3">Hapus @yield("title")</h1>
                            </div>
                            <div class="mb-10">
                                <p class="text-center lead">Apa Anda yakin akan menghapus record ini ?</p>
                                <form action="{{ route("rekening_akuntansi.destroy", $rekening_akuntansi->kode) }}" method="POST">
                                    @csrf @method("DELETE")
                                    <div class="text-center pt-0">
                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-danger">Ya</button>
                                    </form>
                                        <button class="btn btn-dark" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>

@endsection

@section("master")
    {{ "active show" }}
@endsection
