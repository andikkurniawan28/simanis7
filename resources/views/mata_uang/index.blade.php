@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "mata_uang")) }}
@endsection

@section("form-create")
    <form action="{{ route("mata_uang.store") }}" method="POST">
        @csrf @method("POST")
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("tanggal") }}</span>
            </label>
            <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ date("Y-m-d") }}" required/>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value=""/>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("kurs") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="kurs" value="" step="any"/>
        </div>
        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("keterangan") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value=""/>
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
                <th>{{ ucwords("tanggal") }}</th>
                <th>{{ ucwords("kode") }}</th>
                <th>{{ ucwords("kurs") }}</th>
                <th>{{ ucwords("keterangan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($mata_uangs as $mata_uang)
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
                <td>{{ date("d-m-Y", strtotime($mata_uang->tgl)) }}</td>
                <td>{{ $mata_uang->kode }}</td>
                <td>{{ $mata_uang->kurs }}</td>
                <td>{{ $mata_uang->keterangan }}</td>
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
                                    <li class="list-group-item ">
                                        {{ ucwords(str_replace("_", " ", "tanggal")) }} : {{ $mata_uang->tgl }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "kode")) }} : {{ $mata_uang->kode }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "kurs")) }} : {{ $mata_uang->kurs }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "keterangan")) }} : {{ $mata_uang->keterangan }}
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
                                <form action="{{ route("mata_uang_update") }}" method="POST">
                                    @csrf @method("POST")
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">{{ ucwords("tanggal") }}</span>
                                        </label>
                                        <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $mata_uang->tgl }}" required/>
                                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="real_tgl" value="{{ $mata_uang->tgl }}" required/>
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("kode") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $mata_uang->kode }}"/>
                                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="real_kode" value="{{ $mata_uang->kode }}"/>
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("kurs") }}</span>
                                        </label>
                                        <input type="number" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $mata_uang->kurs }}" step="any"/>
                                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="real_kurs" value="{{ $mata_uang->kurs }}" step="any"/>
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("keterangan") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $mata_uang->keterangan }}"/>
                                        <input type="hidden" class="form-control form-control-solid" placeholder="" name="real_keterangan" value="{{ $mata_uang->keterangan }}"/>
                                    </div>
                                    <div class="text-center pt-0">
                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">Simpan</i></button>
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
                                <form action="{{ route("mata_uang_delete") }}" method="POST">
                                    @csrf @method("POST")
                                    <input type="hidden" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $mata_uang->tgl }}" readonly/>
                                    <input type="hidden" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $mata_uang->kode }}" readonly/>
                                    <input type="hidden" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $mata_uang->kurs }}" step="any" readonly/>
                                    <input type="hidden" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $mata_uang->keterangan }}" readonly/>
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
