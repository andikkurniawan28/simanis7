@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "order_pembelian")) }}
@endsection

@section("form-create")
    <h4>{{ ucwords(str_replace("_", " ", "data_order")) }}</h4>
    <form action="{{ route("order_pembelian.store") }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $faktur }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ date("Y-m-d") }}" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("supplier") }}</span>
                    </label>
                    <select name="kodesc" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->kode }}">{{ $supplier->kode }} | {{ $supplier->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("termin") }}</span>
                    </label>
                    <select name="termin" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($termins as $termin)
                            <option value="{{ $termin->kode }}">{{ $termin->kode }} | {{ $termin->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="jthtmp" value="{{ date("Y-m-d") }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "mata_uang")) }}</span>
                    </label>
                    <select name="uang" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option>IDR</option>
                        <option>USD</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "kurs")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="1" required/>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{ ucwords(str_replace("_", " ", "disc_fkt_(%)")) }}</span>
                            </label>
                            <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="0" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{ ucwords(str_replace("_", " ", "ppn_(%)")) }}</span>
                            </label>
                            <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="0" required/>
                        </div>
                    </div>
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
				<th>{{ ucwords(str_replace("_", " ", "no")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "tindakan")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "faktur")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "tanggal")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "supplier")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "termin")) }}</th>
				<th>{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($order_pembelians as $order_pembelian)
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
                <td>{{ $order_pembelian->faktur }}</td>
                <td>{{ date("d-m-Y", strtotime($order_pembelian->tgl)) }}</td>
                <td>{{ $order_pembelian->nama_supplier->nama }}</td>
                <td>{{ $order_pembelian->nama_termin->keterangan }}</td>
                <td>{{ date("d-m-Y", strtotime($order_pembelian->jthtmp)) }}</td>
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
                                <h1 class="mb-3">Detail @yield("title") : {{ $order_pembelian->faktur }}</h1>
                            </div>
                            <div class="mb-10">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "faktur")) }} : {{ $order_pembelian->faktur }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "tanggal")) }} : {{ date("d-m-y", strtotime($order_pembelian->tgl)) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "jatuh_tempo")) }} : {{ date("d-m-y", strtotime($order_pembelian->jthtmp)) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "supplier")) }} : {{ $order_pembelian->nama_supplier->nama }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "termin")) }} : {{ $order_pembelian->nama_termin->keterangan }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "mata_uang")) }} : {{ $order_pembelian->uang }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "kurs")) }} : {{ number_format($order_pembelian->kurs, 2) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "disc_fkt(%)")) }} : {{ number_format($order_pembelian->disc1, 2) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "ppn(%)")) }} : {{ number_format($order_pembelian->ppn, 2) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "subtotal")) }} : Rp. {{ number_format($order_pembelian->subtotal) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "discount")) }} : Rp. {{ number_format($order_pembelian->discount) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "pajak")) }} : Rp. {{ number_format($order_pembelian->pajak) }}
                                    </li>
                                    <li class="list-group-item">
                                        {{ ucwords(str_replace("_", " ", "total")) }} : Rp. {{ number_format($order_pembelian->total) }}
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
                                <h4>{{ ucwords(str_replace("_", " ", "data_order")) }}</h4>
                                <form action="{{ route("order_pembelian.update", $order_pembelian->faktur) }}" method="POST">
                                    @csrf @method("PUT")

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords("faktur") }}</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $order_pembelian->faktur }}" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords("tanggal") }}</span>
                                                </label>
                                                <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $order_pembelian->tgl }}" required/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords("supplier") }}</span>
                                                </label>
                                                <select name="kodesc" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    @foreach ($suppliers as $supplier)
                                                        <option value="{{ $supplier->kode }}"
                                                            @if($order_pembelian->kodesc == $supplier->kode)
                                                                {{ "selected" }}
                                                            @endif
                                                            >{{ $supplier->kode }} | {{ $supplier->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords("termin") }}</span>
                                                </label>
                                                <select name="termin" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    @foreach ($termins as $termin)
                                                        <option value="{{ $termin->kode }}"
                                                            @if($order_pembelian->termin == $termin->kode)
                                                                {{ "selected" }}
                                                            @endif
                                                            >{{ $termin->kode }} | {{ $termin->keterangan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</span>
                                                </label>
                                                <input type="date" class="form-control form-control-solid" placeholder="" name="jthtmp" value="{{ $order_pembelian->jthtmp }}" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords(str_replace("_", " ", "mata_uang")) }}</span>
                                                </label>
                                                <select name="uang" class="form-control">
                                                    <option disabled selected value> -- select an option -- </option>
                                                    <option @if($order_pembelian->uang == "IDR") {{ "selected" }} @endif>IDR</option>
                                                    <option @if($order_pembelian->uang == "USD") {{ "selected" }} @endif>USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">{{ ucwords(str_replace("_", " ", "kurs")) }}</span>
                                                </label>
                                                <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $order_pembelian->kurs }}" required/>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">{{ ucwords(str_replace("_", " ", "disc_fkt_(%)")) }}</span>
                                                        </label>
                                                        <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $order_pembelian->disc1 }}" required/>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">{{ ucwords(str_replace("_", " ", "ppn_(%)")) }}</span>
                                                        </label>
                                                        <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $order_pembelian->ppn }}" required/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-0">
                                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                            <span class="indicator-label">Lanjut Tambah Barang <i class="fa fa-arrow-right"></i></span>
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
                                <form action="{{ route("order_pembelian.destroy", $order_pembelian->faktur) }}" method="POST">
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

@section("transaksi")
    {{ "active show" }}
@endsection
