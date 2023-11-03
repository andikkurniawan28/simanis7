@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "pembelian")) }}
@endsection

@section("form-create")
    {{ route("pembelian.create") }}
@endsection

@section("table")
    <table class="table table-hover text-center" id="example">
        <thead>
            <tr>
                <th>{{ ucwords(str_replace("_", " ", "info")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "no")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "faktur")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "tanggal")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "faktur_asli")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "gudang")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "supplier")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "termin")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</th>
                <th>{{ ucwords("tindakan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pembelians as $pembelian)
            <tr class="text-center">
                <td><button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#detail{{ $pembelian->faktur }}"><i class="fa fa-info"></i></button></td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pembelian->faktur }}</td>
                <td>{{ date("d-m-Y", strtotime($pembelian->tgl)) }}</td>
                <td>{{ $pembelian->asli }}</td>
                <td>{{ $pembelian->nama_gudang }}</td>
                <td>{{ $pembelian->nama_supplier }}</td>
                <td>{{ $pembelian->nama_termin }}</td>
                <td>{{ date("d-m-Y", strtotime($pembelian->jthtmp)) }}</td>
                <td>
                    <a class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{ ucwords("tindakan") }}
                        <span class="svg-icon svg-icon-5 m-0">
                            <i class="fa fa-arrow-down"></i>
                        </span>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="{{ route("pembelian.edit", $pembelian->faktur) }}" class="menu-link px-3">{{ ucwords("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("pembelian.destroy", $pembelian->faktur) }}" method="POST" id="form-delete{{ $pembelian->faktur }}">
                                @csrf @method("DELETE")
                                <a class="menu-link px-3" onclick="submitForm{{ $pembelian->faktur }}()">{{ ucwords("hapus") }}</a>
                                <script>
                                    function submitForm{{ $pembelian->faktur }}() {
                                        document.getElementById("form-delete{{ $pembelian->faktur }}").submit();
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @foreach($pembelians as $pembelian)
        <div class="modal fade" id="detail{{ $pembelian->faktur }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">{{ ucfirst("faktur") }} : {{ $pembelian->faktur }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "mata_uang")) }}</th>
                                <th>{{ $pembelian->uang }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "kurs")) }}</th>
                                <th>{{ number_format($pembelian->kurs, 2) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "disc_fkt(%)")) }}</th>
                                <th>{{ number_format($pembelian->disc1, 2) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "ppn(%)")) }}</th>
                                <th>{{ number_format($pembelian->ppn, 2) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "sub_total")) }}</th>
                                <th>Rp. {{ number_format($pembelian->subtotal) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "discount")) }}</th>
                                <th>Rp. {{ number_format($pembelian->discount) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "pajak")) }}</th>
                                <th>Rp. {{ number_format($pembelian->pajak) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "biaya_kirim")) }}</th>
                                <th>Rp. {{ number_format($pembelian->biaya) }}</th>
                            </tr>
                            <tr>
                                <th>{{ ucwords(str_replace("_", " ", "total")) }}</th>
                                <th>Rp. {{ number_format($pembelian->total) }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section("transaksi")
    {{ "active show" }}
@endsection
