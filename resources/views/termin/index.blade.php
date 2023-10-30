@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "termin")) }}
@endsection

@section("form-create")
    {{ route("termin.create") }}
@endsection

@section("table")
    <table class="table table-hover text-center" id="example">
        <thead>
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 text-center">
                <th>{{ ucwords("no") }}</th>
                <th>{{ ucwords("kode") }}</th>
                <th>{{ ucwords("keterangan") }}</th>
                <th>{{ ucwords("lama") }}</th>
                {{-- <th>{{ ucwords("disc") }}</th>
                <th>{{ ucwords("hdisc") }}</th> --}}
                <th>{{ ucwords("tindakan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($termins as $termin)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $termin->kode }}</td>
                <td>{{ $termin->keterangan }}</td>
                <td>{{ $termin->lama }}</td>
                {{-- <td>{{ $termin->disc }}</td>
                <td>{{ $termin->hdisc }}</td> --}}
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
                            <a href="{{ route("termin.edit", $termin->kode) }}" class="menu-link px-3">{{ ucwords("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("termin.destroy", $termin->kode) }}" method="POST" id="form-delete{{ $termin->kode }}">
                                @csrf @method("DELETE")
                                <a class="menu-link px-3" onclick="submitForm{{ $termin->kode }}()">{{ ucwords("hapus") }}</a>
                                <script>
                                    function submitForm{{ $termin->kode }}() {
                                        document.getElementById("form-delete{{ $termin->kode }}").submit();
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
