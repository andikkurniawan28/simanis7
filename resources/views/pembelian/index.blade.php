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
                <th>{{ ucwords(str_replace("_", " ", "no")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "faktur")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "no_po")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "faktur_pajak")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "tanggal")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "gudang")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "faktur_asli")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "supplier")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "termin")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "mata_uang")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kurs")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "disc_fkt")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "ppn")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "subtotal")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "disc")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "pajak")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "biaya_kirim")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "total")) }}</th>
                <th>{{ ucwords("tindakan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pembelians as $pembelian)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pembelian->faktur }}</td>
                <td></td>
                <td></td>
                <td>{{ date("d-m-Y", strtotime($pembelian->tgl)) }}</td>
                <td>{{ $pembelian->gudang }}</td>
                <td>{{ $pembelian->asli }}</td>
                <td>{{ $pembelian->kodesc }}</td>
                <td>{{ $pembelian->termin }}</td>
                <td>{{ date("d-m-Y", strtotime($pembelian->jthtmp)) }}</td>
                <td>{{ $pembelian->uang }}</td>
                <td>{{ $pembelian->kurs }}</td>
                <td>{{ number_format($pembelian->disc1, 2) }}</td>
                <td>{{ number_format($pembelian->ppn, 2) }}</td>
                <td>Rp. {{ number_format($pembelian->subtotal) }}</td>
                <td>Rp. {{ number_format($pembelian->discount) }}</td>
                <td>Rp. {{ number_format($pembelian->pajak) }}</td>
                <td></td>
                <td>Rp. {{ number_format($pembelian->total) }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{ ucwords("tindakan") }}
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                            </svg>
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
@endsection
