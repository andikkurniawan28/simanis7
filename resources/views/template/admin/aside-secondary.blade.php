<div class="aside-secondary d-flex flex-row-fluid">
	<!--begin::Workspace-->
	<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
		<div class="d-flex h-100 flex-column">
			<!--begin::Wrapper-->
			<div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
				<!--begin::Tab content-->
				<div class="tab-content">

					<!--begin::Tab pane master-->
                    <div class="tab-pane fade @yield('master')" id="master" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="master" data-kt-menu="true">
                            <div id="master" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Master</span>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("mata_uang.index") }}">
                                        <span class="menu-icon">
                                            <i class="fa fa-dollar-sign"></i>
                                        </span>
                                        <span class="menu-title">Mata Uang</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("gudang.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-warehouse"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords("gudang") }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("pot.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-inbox"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords("pot") }}</span>
                                    </a>
                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-box"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("stock") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("golongan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("golongan") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("sub_golongan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("sub golongan") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    {{-- <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("satuan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("satuan") }}</span>
                                            </a>
                                        </div>
                                    </div> --}}

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("stock.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("stock") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("salesman.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-id-card"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "salesman")) }}</span>
                                    </a>
                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-truck"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("Supplier & Customer") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("termin.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("termin") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("wilayah.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("wilayah") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("usaha.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("usaha") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("supplier.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("supplier") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("customer.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("customer") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("akuntansi") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("kas_bank.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "kas_bank")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("rekening_balance_income.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "rekening_balance_income")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("rekening_induk.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "rekening_induk")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("rekening_sub.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "rekening_sub")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("rekening_akuntansi.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "rekening_akuntansi")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Tab pane master-->

					<!--begin::Tab pane transaksi-->
                    <div class="tab-pane fade @yield('transaksi')" id="transaksi" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="transaksi" data-kt-menu="true">
                            <div id="transaksi" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ ucwords("transaksi") }}</span>
                                    </div>
                                </div>

                                {{-- Pembelian --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("pembelian") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("order_pembelian.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "order_pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    {{-- <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("pembelian.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("retur_pembelian.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "retur_pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("nota_tambah_kurang_pembelian.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "nota_tambah_kurang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("titipan_pembelian.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "titipan")) }}</span>
                                            </a>
                                        </div>
                                    </div> --}}

                                </div>

                                {{-- Pelunasan Hutang --}}
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="{{ route("hutang.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-credit-card"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "pelunasan_hutang")) }}</span>
                                    </a>
                                </div> --}}

                                {{-- Penjualan --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-store"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("penjualan") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("order_penjualan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "sales_order")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    {{-- <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("penawaran.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "penawaran")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("penjualan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "penjualan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("retur_penjualan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "retur_penjualan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("nota_tambah_kurang_penjualan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "nota_tambah_kurang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("titipan_penjualan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "titipan")) }}</span>
                                            </a>
                                        </div>
                                    </div> --}}

                                </div>

                                {{-- Pelunasan Piutang --}}
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-wallet"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "pelunasan_piutang")) }}</span>
                                    </a>
                                </div> --}}

                                {{-- Mutasi Barang --}}
                                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "mutasi_barang")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("mutasi_barang_antar_gudang.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "mutasi_barang_antar_gudang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("mutasi_pot.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "mutasi_pot")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div> --}}

                                {{-- Penyesuaian Barang --}}
                                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-hands"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "penyesuaian_barang")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("barang_mati.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "mati")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("barang_rusak.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "rusak_/_sakit")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("barang_repotting.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "repotting_/_penambahan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("barang_hilang.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "hilang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div> --}}

                                {{-- Pemakaian Barang --}}
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="{{ route("pemakaian_barang.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-sign-language"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "pemakaian_barang")) }}</span>
                                    </a>
                                </div> --}}

                                {{-- Akuntansi --}}
                                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "akuntansi")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("bukti_kas_masuk.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "bukti_kas_masuk")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("bukti_kas_keluar.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "bukti_kas_keluar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("bukti_bank_masuk.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "bukti_bank_masuk")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("bukti_bank_keluar.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "bukti_bank_keluar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("jurnal_umum.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "jurnal_umum")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div> --}}

                            </div>
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Tab pane transaksi-->

                    {{-- <!--begin::Tab pane laporan-->
                    <div class="tab-pane fade @yield('laporan')" id="laporan" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="laporan" data-kt-menu="true">
                            <div id="laporan" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ ucwords("laporan") }}</span>
                                    </div>
                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-chart-bar"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "sekilas_bisnis")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_hutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_piutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "nilai_persediaan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-store"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "penjualan")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_order_penjualan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_penjualan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_retur_penjualan")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "customer")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "nota_tambah_/_kurang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "uang_muka_/_lebih_bayar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "pelunasan_piutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "pembelian")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_order_pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "detail_retur_pembelian")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "supplier")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "nota_tambah_/_kurang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "uang_muka_/_lebih_bayar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "pelunasan_hutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-tag"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "produk")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_barang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_stok_&_PHJ")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "penyesuaian_barang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "mutasi_barang_antar_gudang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "mutasi_antar_pot")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "pemakaian_barang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "kartu_stock")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "penyesuaian_stock")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "barang_keluar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">

                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-money-bill"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords(str_replace("_", " ", "keuangan")) }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_hutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "saldo_piutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "status_hutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "status_piutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "kartu_hutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "kartu_piutang")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "laba_rugi")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "neraca")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords(str_replace("_", " ", "bank_/_kas_masuk_&_keluar")) }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end::Tab pane laporan--> --}}

                    <!--begin::Tab pane supervisor-->
                    <div class="tab-pane fade @yield('supervisor')" id="supervisor" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="supervisor" data-kt-menu="true">
                            <div id="supervisor" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ ucwords("supervisor") }}</span>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("user.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-users"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "user_administrasi")) }}</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end::Tab pane supervisor-->

                    {{-- <!--begin::Tab pane setting-->
                    <div class="tab-pane fade @yield('setting')" id="setting" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="setting" data-kt-menu="true">
                            <div id="setting" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ ucwords("setting") }}</span>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-building"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "biodata_perusahaan")) }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "periode_database")) }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "lain_lain")) }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-file-invoice-dollar"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "fiskal")) }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-door-open"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "level_menu")) }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa fa-holly-berry"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords(str_replace("_", " ", "hari_libur")) }}</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end::Tab pane setting--> --}}

				</div>
				<!--end::Tab content-->
			</div>
			<!--end::Wrapper-->

		</div>
	</div>
	<!--end::Workspace-->
</div>
