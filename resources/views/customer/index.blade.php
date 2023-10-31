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
    {{ route("customer.create") }}
@endsection

@section("toolbar")
    <div class="dropdown">
        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog"></i> {{ ucwords("customer") }} {{ $state }}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{ route("customer_aktif", "Y") }}">{{ ucwords(str_replace("_", " ", "aktif")) }}</a></li>
            <li><a class="dropdown-item" href="{{ route("customer_aktif", "T") }}">{{ ucwords(str_replace("_", " ", "tidak_aktif")) }}</a></li>
            <li><a class="dropdown-item" href="{{ route("customer_aktif") }}">{{ ucwords(str_replace("_", " ", "null")) }}</a></li>
        </ul>
    </div>
@endsection

@section("table")
    <table class="table table-hover text-center" id="example">
        <thead>
            <tr>
                <th>{{ ucwords(str_replace("_", " ", "no")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kode")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "usaha")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "nama")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kantor")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "kirim")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "telp")) }}</th>
                <th>{{ ucwords(str_replace("_", " ", "fax")) }}</th>
                <th>{{ ucwords("kota") }}</th>
                <th>{{ ucwords("nmkota") }}</th>
                <th>{{ ucwords("kodepos") }}</th>
                <th>{{ ucwords("golongan") }}</th>
                <th>{{ ucwords("disc1") }}</th>
                <th>{{ ucwords("disc2") }}</th>
                <th>{{ ucwords("plafon") }}</th>
                <th>{{ ucwords("khusus") }}</th>
                <th>{{ ucwords("ekspedisi") }}</th>
                <th>{{ ucwords("status") }}</th>
                <th>{{ ucwords("termin") }}</th>
                <th>{{ ucwords("kurs") }}</th>
                <th>{{ ucwords("person") }}</th>
                <th>{{ ucwords("hp") }}</th>
                <th>{{ ucwords("ptelp") }}</th>
                <th>{{ ucwords("pfax") }}</th>
                <th>{{ ucwords("email") }}</th>
                <th>{{ ucwords("sk") }}</th>
                <th>{{ ucwords("tipe") }}</th>
                <th>{{ ucwords("noac") }}</th>
                <th>{{ ucwords("npwp") }}</th>
                <th>{{ ucwords("namawp") }}</th>
                <th>{{ ucwords("alamatwp") }}</th>
                <th>{{ ucwords("tindakan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $customer->kode }}</td>
                <td>{{ $customer->keterangan }}</td>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->alamat2 }}</td>
                <td>{{ $customer->telp }}</td>
                <td>{{ $customer->fax }}</td>
                <td>{{ $customer->kota }}</td>
                <td>{{ $customer->nmkota }}</td>
                <td>{{ $customer->kodepos }}</td>
                <td>{{ $customer->golongan }}</td>
                <td>{{ $customer->disc1 }}</td>
                <td>{{ $customer->disc2 }}</td>
                <td>{{ $customer->plafon }}</td>
                <td>{{ $customer->khusus }}</td>
                <td>{{ $customer->ekspedisi }}</td>
                <td>{{ $customer->status }}</td>
                <td>{{ $customer->termin }}</td>
                <td>{{ $customer->uang }}</td>
                <td>{{ $customer->person }}</td>
                <td>{{ $customer->hp }}</td>
                <td>{{ $customer->ptelp }}</td>
                <td>{{ $customer->pfax }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->sk }}</td>
                <td>{{ $customer->tipe }}</td>
                <td>{{ $customer->noac }}</td>
                <td>{{ $customer->npwp }}</td>
                <td>{{ $customer->namawp }}</td>
                <td>{{ $customer->alamatwp }}</td>
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
                            <a href="{{ route("customer.edit", $customer->kode) }}" class="menu-link px-3">{{ ucwords("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("customer.destroy", $customer->kode) }}" method="POST" id="form-delete{{ $customer->kode }}">
                                @csrf @method("DELETE")
                                <a class="menu-link px-3" onclick="submitForm{{ $customer->kode }}()">{{ ucwords("hapus") }}</a>
                                <script>
                                    function submitForm{{ $customer->kode }}() {
                                        document.getElementById("form-delete{{ $customer->kode }}").submit();
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
