@extends("template.admin.index")

@section("title")
    @if($status == "Y")
        @php $state = ucwords(str_replace("_", " ", "aktif")) @endphp
    @elseif($status == "T")
        @php $state = ucwords(str_replace("_", " ", "tidak_aktif")) @endphp
    @else
        @php $state = ucwords(str_replace("_", " ", "null")) @endphp
    @endif
    {{ ucwords(str_replace("_", " ", "customer_{$state}")) }}
@endsection

@section("form-create")
    <form action="{{ route("customer.store") }}" method="POST">
        @csrf @method("POST")

        <h4>Data Supplier</h4>
        <hr>

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
                        <span class="">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="" />
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat kantor") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat" value="" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat pabrik") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat2" value="" />
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="telp" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="fax" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kota") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kota" value="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kode pos") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kodepos" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="golongan">{{ ucwords("area") }}</span>
                    </label>
                    <select name="golongan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($wilayahs as $wilayah)
                            <option value="{{ $wilayah->kode }}">{{ $wilayah->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="golongan">{{ ucwords("usaha") }}</span>
                    </label>
                    <select name="keterangan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($usahas as $usaha)
                            <option value="{{ $usaha->kode }}">{{ $usaha->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("status") }}</span>
                    </label>
                    <select name="status" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Y">Ya</option>
                        <option value="T">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <h4>Contact Person</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="person" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="ptelp" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="pfax" value="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ strtoupper("hp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="hp" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("email") }}</span>
                    </label>
                    <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="" />
                </div>
            </div>
            <div class="col"></div>
        </div>

        <h4>Data Fiskal</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ strtoupper("npwp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="npwp" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="namawp" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("alamat wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="alamatwp" value="" />
                </div>
            </div>
        </div>

        <h4>Pembayaran</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("termin") }}</span>
                    </label>
                    <select name="termin" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($termins as $termin)
                            <option value="{{ $termin->kode }}">{{ $termin->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("diskon (%)") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("credit limit") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="plafon" value="" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("no ac") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="noac" value="" />
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
                <th>{{ ucwords(str_replace("_", " ", "kantor")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "pabrik")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "telp")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kota")) }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
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
                <td>{{ $customer->kode }}</td>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->alamat2 }}</td>
                <td>{{ $customer->telp }}</td>
                <td>{{ $customer->kota }}</td>
            </tr>
            {{-- <div class="modal fade" id="show{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
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
                                        {{ ucwords(str_replace("_", " ", "kode")) }} : {{ $customer->kode }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "nama")) }} : {{ $customer->nama }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "alamat_kantor")) }} : {{ $customer->alamat }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "alamat_pabrik")) }} : {{ $customer->alamat2 }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "no_telp")) }} : {{ $customer->telp }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "no_fax")) }} : {{ $customer->fax }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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

                                <form action="{{ route("customer.update", $customer->kode) }}" method="POST">
                                    @csrf @method("PUT")

                                    <h4>Data Supplier</h4>
                                    <hr>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords("kode") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $customer->kode }}" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("nama") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $customer->nama }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("alamat kantor") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="alamat" value="{{ $customer->alamat }}" />
                                    </div>

                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="">{{ ucwords("alamat pabrik") }}</span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="alamat2" value="{{ $customer->alamat2 }}" />
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("telp") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="telp" value="{{ $customer->telp }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("fax") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="fax" value="{{ $customer->fax }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("kota") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="kota" value="{{ $customer->kota }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("kode pos") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="kodepos" value="{{ $customer->kodepos }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="golongan">{{ ucwords("area") }}</span>
                                                </label>
                                                <select name="golongan" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    @foreach ($wilayahs as $wilayah)
                                                        <option value="{{ $wilayah->kode }}"
                                                            @if($customer->golongan == $wilayah->kode)
                                                                {{ "selected" }}
                                                            @endif
                                                            >{{ $wilayah->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="golongan">{{ ucwords("usaha") }}</span>
                                                </label>
                                                <select name="keterangan" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    @foreach ($usahas as $usaha)
                                                        <option value="{{ $usaha->kode }}"
                                                            @if($customer->keterangan == $usaha->kode)
                                                                {{ "selected" }}
                                                            @endif
                                                            >{{ $usaha->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("status") }}</span>
                                                </label>
                                                <select name="status" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <option value="Y" @if($customer->status == "Y") {{ "selected" }} @endif>Ya</option>
                                                    <option value="T" @if($customer->status == "T") {{ "selected" }} @endif>Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col"></div>
                                    </div>

                                    <h4>Contact Person</h4>
                                    <hr>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("nama") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="person" value="{{ $customer->person }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("telp") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="ptelp" value="{{ $customer->ptelp }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("fax") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="pfax" value="{{ $customer->pfax }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ strtoupper("hp") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="hp" value="{{ $customer->hp }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("email") }}</span>
                                                </label>
                                                <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="{{ $customer->email }}" />
                                            </div>
                                        </div>
                                        <div class="col"></div>
                                    </div>

                                    <h4>Data Fiskal</h4>
                                    <hr>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ strtoupper("npwp") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="npwp" value="{{ $customer->npwp }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("nama wajib pajak") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="namawp" value="{{ $customer->namawp }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("alamat wajib pajak") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="alamatwp" value="{{ $customer->noac }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <h4>Pembayaran</h4>
                                    <hr>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("termin") }}</span>
                                                </label>
                                                <select name="termin" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    @foreach ($termins as $termin)
                                                        <option value="{{ $termin->kode }}"
                                                            @if($customer->termin == $termin->kode)
                                                                {{ "selected" }}
                                                            @endif
                                                            >{{ $termin->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("diskon (%)") }}</span>
                                                </label>
                                                <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $customer->disc1 }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("credit limit") }}</span>
                                                </label>
                                                <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="plafon" value="{{ $customer->plafon }}" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="">{{ ucwords("no ac") }}</span>
                                                </label>
                                                <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="noac" value="{{ $customer->noac }}" />
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
                                <form action="{{ route("customer.destroy", $customer->kode) }}" method="POST">
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
