@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_balance_income")) }}
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
                        <span class="">{{ ucwords(str_replace("_", " ", "debit/kredit")) }}</span>
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
                        <span class="">{{ ucwords(str_replace("_", " ", "balance/income")) }}</span>
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
                        <span class="">{{ ucwords(str_replace("_", " ", "urutan_FBI")) }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="urutfbi" value=""/ >
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "urutan_KBI")) }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="urutkbi" value=""/ >
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords(str_replace("_", " ", "kelompok_BI")) }}</span>
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

@section("table")
    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="example">
        <thead>
            <tr class="fw-bolder text-muted">
				<th>{{ ucwords("no") }}</th>
                <th>{{ ucwords("tindakan") }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kode")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "nama")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "debit/kredit")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "balance/income")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kelompok_BI")) }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rekening_balance_incomes as $rekening_balance_income)
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
                <td>{{ $rekening_balance_income->kode }}</td>
                <td>{{ $rekening_balance_income->nama }}</td>
                <td>{{ $rekening_balance_income->dk }}</td>
                <td>{{ $rekening_balance_income->balinc }}</td>
                <td>{{ $rekening_balance_income->klpbi }}</td>
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
                                        {{ ucwords(str_replace("_", " ", "kode")) }} : {{ $rekening_balance_income->kode }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "nama")) }} : {{ $rekening_balance_income->nama }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "debit/kredit")) }} : {{ $rekening_balance_income->dk }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "balance/income")) }} : {{ $rekening_balance_income->balinc }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "urut_FBI")) }} : {{ $rekening_balance_income->urutfbi }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "urut_KBI")) }} : {{ $rekening_balance_income->urutkbi }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "kelompok_BI")) }} : {{ $rekening_balance_income->klpbi }}
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
                                <form action="{{ route("rekening_balance_income.update", $rekening_balance_income->kode) }}" method="POST">
                                    @csrf @method("PUT")

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ ucwords("kode") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $rekening_balance_income->kode }}" required/>
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ ucwords("nama") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $rekening_balance_income->nama }}"/ required>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("debit / kredit") }}</span>
                                                </label>
                                                <select name="dk" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <option value="D" @if($rekening_balance_income->dk == "D") {{ "selected" }} @endif>Debit</option>
                                                    <option value="K" @if($rekening_balance_income->dk == "K") {{ "selected" }} @endif>Kredit</option>
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
                                                    <option value="B" @if($rekening_balance_income->balinc == "B") {{ "selected" }} @endif>Balance</option>
                                                    <option value="I" @if($rekening_balance_income->balinc == "I") {{ "selected" }} @endif>Income</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("urutan FBI") }}</span>
                                                </label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" name="urutfbi" value="{{ $rekening_balance_income->urutfbi }}"/ >
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("urutan KBI") }}</span>
                                                </label>
                                                <input type="number" class="form-control form-control-solid" placeholder="" name="urutkbi" value="{{ $rekening_balance_income->urutkbi }}"/ >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("kelompok balance income") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="klpbi" value="{{ $rekening_balance_income->klpbi }}"/ required>
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
                                <form action="{{ route("rekening_balance_income.destroy", $rekening_balance_income->kode) }}" method="POST">
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
