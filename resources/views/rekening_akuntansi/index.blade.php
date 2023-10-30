@extends("template.admin.index")

@section("title")
    {{ ucfirst(str_replace("_", " ", "rekening_akuntansi")) }}
@endsection

@section("form-create")
    {{ route("rekening_akuntansi.create") }}
@endsection

@section("table")
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 text-center">
                <th>{{ ucfirst("kode") }}</th>
                <th>{{ ucfirst("nama") }}</th>
                <th>{{ ucfirst("dk") }}</th>
                <th>{{ ucfirst("kelas") }}</th>
                <th>{{ ucfirst("balinc") }}</th>
                <th>{{ ucfirst("urutfbi") }}</th>
                <th>{{ ucfirst("urutkbi") }}</th>
                <th>{{ ucfirst("klpbi") }}</th>
                <th>{{ ucfirst("tindakan") }}</th>
            </tr>
        </thead>
        <tbody class="fw-bold text-gray-600">
        @foreach ($rekening_akuntansis as $rekening_akuntansi)
            <tr class="text-center">
                <td>{{ $rekening_akuntansi->kode }}</td>
                <td>{{ $rekening_akuntansi->nama }}</td>
                <td>{{ $rekening_akuntansi->dk }}</td>
                <td>{{ $rekening_akuntansi->kelas }}</td>
                <td>{{ $rekening_akuntansi->balinc }}</td>
                <td>{{ $rekening_akuntansi->urutfbi }}</td>
                <td>{{ $rekening_akuntansi->urutkbi }}</td>
                <td>{{ $rekening_akuntansi->klpbi }}</td>
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
                            <a href="{{ route("rekening_akuntansi.edit", $rekening_akuntansi->id) }}" class="menu-link px-3">{{ ucfirst("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("rekening_akuntansi.destroy", $rekening_akuntansi->id) }}" method="POST" id="form-delete">
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