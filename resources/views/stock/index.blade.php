@extends("template.admin.index2")

@section("title")
    {{ ucwords(str_replace("_", " ", "stock")) }}
@endsection

@section("table")
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" id="example">
    <thead>
        <tr class="fw-bolder text-muted">
            <th>{{ ucwords(str_replace("_", " ", "kode")) }}</th>
            <th>{{ ucwords(str_replace("_", " ", "barcode")) }}</th>
            <th>{{ ucwords(str_replace("_", " ", "nama")) }}</th>
            <th>{{ ucwords(str_replace("_", " ", "golongan")) }}</th>
            <th>{{ ucwords(str_replace("_", " ", "subgol")) }}</th>
            <th>{{ ucwords(str_replace("_", " ", "satuan")) }}</th>
        </tr>
    </thead>
</table>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#example', {
    ajax: 'http://localhost:8000/api-stock.php',
    processing: true,
    serverSide: true
});
</script>
@endsection

@section("master")
    {{ "active show" }}
@endsection
