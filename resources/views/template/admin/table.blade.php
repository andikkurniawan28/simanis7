<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
{{-- <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/> --}}

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <h1 class="text-dark fw-bolder my-0 fs-2">Daftar @yield("title")</h1>
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo7/dist/index.html" class="text-muted">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">@yield("title")</li>
                    <li class="breadcrumb-item text-dark">Daftar @yield("title")</li>
                </ul>
            </div>
            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                        </svg>
                    </span>
                </div>
                <a href="{{ route("home") }}" class="d-flex align-items-center">
                    <img alt="Logo" src="/old/simanis.jpg" class="h-50px" />
                </a>
            </div>
        </div>
    </div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            @include("components.alert")
            <div class="card">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">@yield("title")</span>
                        <span class="text-muted mt-1 fw-bold fs-7">Menampilkan semua data ...</span>
                    </h3>
                    <div class="card-toolbar btn-group" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Klik disini untuk menambah @yield("title")">
                        <button class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#create">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                </svg>
                            </span>
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        @yield("table")
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("template.admin.footer")

    <div class="modal fade" id="create" tabindex="-1" aria-hidden="true">
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
						<h1 class="mb-3">Tambah @yield("title")</h1>
					</div>
				    <div class="mb-10">
                        @yield("form-create")
				    </div>
			    </div>
		    </div>
	    </div>
    </div>

    {{--

    <div class="modal fade" id="show" tabindex="-1" aria-hidden="true">
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
                        @yield("form-show")
				    </div>
			    </div>
		    </div>
	    </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
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
                        @yield("form-delete")
				    </div>
			    </div>
		    </div>
	    </div>
    </div> --}}

</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#example');
</script>
{{-- <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            // "paging": true
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script> --}}
@yield("custom")
