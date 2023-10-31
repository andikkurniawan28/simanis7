@extends("template.admin.index")

@section("title")
    {{ ucwords(str_replace("_", " ", "rekening_balance_income")) }}
@endsection

@section("form-create")
    {{ route("rekening_balance_income.create") }}
@endsection

@section("table")
    <table class="table table-hover text-center" id="example">
        <thead>
            <tr>
                <th>{{ ucwords("no") }}</th>
                <th>{{ ucwords("kode") }}</th>
                <th>{{ ucwords("nama") }}</th>
                <th>{{ ucwords("debit / kredit") }}</th>
                <th>{{ ucwords("balance / income") }}</th>
                <th>{{ ucwords("urutan FBI") }}</th>
                <th>{{ ucwords("urutan KBI") }}</th>
                <th>{{ ucwords("kelompok BI") }}</th>
                <th>{{ ucwords("tindakan") }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rekening_balance_incomes as $rekening_balance_income)
            <tr class="text-center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $rekening_balance_income->kode }}</td>
                <td>{{ $rekening_balance_income->nama }}</td>
                <td>{{ $rekening_balance_income->dk }}</td>
                <td>{{ $rekening_balance_income->balinc }}</td>
                <td>{{ $rekening_balance_income->urutfbi }}</td>
                <td>{{ $rekening_balance_income->urutkbi }}</td>
                <td>{{ $rekening_balance_income->klpbi }}</td>
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
                            <a href="{{ route("rekening_balance_income.edit", $rekening_balance_income->kode) }}" class="menu-link px-3">{{ ucwords("edit") }}</a>
                        </div>
                        <div class="menu-item px-3">
                            <form action="{{ route("rekening_balance_income.destroy", $rekening_balance_income->kode) }}" method="POST" id="form-delete{{ $rekening_balance_income->kode }}">
                                @csrf @method("DELETE")
                                <a class="menu-link px-3" onclick="submitForm{{ $rekening_balance_income->kode }}()">{{ ucwords("hapus") }}</a>
                                <script>
                                    function submitForm{{ $rekening_balance_income->kode }}() {
                                        document.getElementById("form-delete{{ $rekening_balance_income->kode }}").submit();
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
