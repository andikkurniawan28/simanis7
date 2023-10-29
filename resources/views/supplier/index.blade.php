@extends("template.admin.index")

@section("title")
    {{ ucfirst(str_replace("_", " ", "supplier")) }}
@endsection

@section("form-create")
    {{ route("supplier.create") }}
@endsection

@section("table")
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 text-center">
                <th>{{ ucfirst("keterangan") }}</th>
                <th>{{ ucfirst("kode") }}</th>
                <th>{{ ucfirst("nama") }}</th>
                <th>{{ ucfirst("alamat1") }}</th>
                <th>{{ ucfirst("alamat2") }}</th>
                <th>{{ ucfirst("telp") }}</th>
                <th>{{ ucfirst("fax") }}</th>
                <th>{{ ucfirst("kota") }}</th>
                <th>{{ ucfirst("nmkota") }}</th>
                <th>{{ ucfirst("kodepos") }}</th>
                <th>{{ ucfirst("golongan") }}</th>
                <th>{{ ucfirst("disc1") }}</th>
                <th>{{ ucfirst("disc2") }}</th>
                <th>{{ ucfirst("plafon") }}</th>
                <th>{{ ucfirst("khusus") }}</th>
                <th>{{ ucfirst("ekspedisi") }}</th>
                <th>{{ ucfirst("status") }}</th>
                <th>{{ ucfirst("termin") }}</th>
                <th>{{ ucfirst("kurs") }}</th>
                <th>{{ ucfirst("person") }}</th>
                <th>{{ ucfirst("hp") }}</th>
                <th>{{ ucfirst("ptelp") }}</th>
                <th>{{ ucfirst("pfax") }}</th>
                <th>{{ ucfirst("email") }}</th>
                <th>{{ ucfirst("sk") }}</th>
                <th>{{ ucfirst("tipe") }}</th>
                <th>{{ ucfirst("noac") }}</th>
                <th>{{ ucfirst("npwp") }}</th>
                <th>{{ ucfirst("namawp") }}</th>
                <th>{{ ucfirst("alamatwp") }}</th>
                <th>{{ ucfirst("tindakan") }}</th>
            </tr>
        </thead>
        <tbody class="fw-bold text-gray-600">
        @foreach ($suppliers as $supplier)
            <tr class="text-center">
                <td>{{ $supplier->keterangan }}</td>
                <td>{{ $supplier->kode }}</td>
                <td>{{ $supplier->nama }}</td>
                <td>{{ $supplier->alamat1 }}</td>
                <td>{{ $supplier->alamat2 }}</td>
                <td>{{ $supplier->telp }}</td>
                <td>{{ $supplier->fax }}</td>
                <td>{{ $supplier->kota }}</td>
                <td>{{ $supplier->nmkota }}</td>
                <td>{{ $supplier->kodepos }}</td>
                <td>{{ $supplier->golongan->kode }}</td>
                <td>{{ $supplier->disc1 }}</td>
                <td>{{ $supplier->disc2 }}</td>
                <td>{{ $supplier->plafon }}</td>
                <td>{{ $supplier->khusus }}</td>
                <td>{{ $supplier->ekspedisi }}</td>
                <td>{{ $supplier->status }}</td>
                <td>{{ $supplier->termin->kode }}</td>
                <td>{{ $supplier->mata_uang->kurs }}</td>
                <td>{{ $supplier->person }}</td>
                <td>{{ $supplier->hp }}</td>
                <td>{{ $supplier->ptelp }}</td>
                <td>{{ $supplier->pfax }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->sk }}</td>
                <td>{{ $supplier->tipe }}</td>
                <td>{{ $supplier->noac }}</td>
                <td>{{ $supplier->npwp }}</td>
                <td>{{ $supplier->namawp }}</td>
                <td>{{ $supplier->alamatwp }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">{{ ucfirst("tindakan") }}
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                            </svg>
                        </span>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <a href="{{ route("supplier.edit", $supplier->id) }}" class="menu-link px-3">{{ ucfirst("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("supplier.destroy", $supplier->id) }}" method="POST" id="form-delete">
                                @csrf @method("DELETE")
                                <a class="menu-link px-3" onclick="submitForm()">{{ ucfirst("hapus") }}</a>
                                <script>
                                    function submitForm() {
                                        document.getElementById("form-delete").submit();
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
