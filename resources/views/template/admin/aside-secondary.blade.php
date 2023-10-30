<div class="aside-secondary d-flex flex-row-fluid">
	<!--begin::Workspace-->
	<div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
		<div class="d-flex h-100 flex-column">
			<!--begin::Wrapper-->
			<div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
				<!--begin::Tab content-->
				<div class="tab-content">

					<!--begin::Tab pane master-->
                    <div class="tab-pane fade active show" id="master" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                            <div id="kt_aside_menu_wrapper" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Master</span>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("mata_uang.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Mata Uang</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("gudang.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                            </svg>
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

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ route("satuan.index") }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("satuan") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route("salesman.index") }}">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                            </svg>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                            </svg>
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


					{{-- <!--begin::Tab pane transaksi-->
                    <div class="tab-pane fade active show" id="transaksi" role="tabpanel">

                        <!--begin::Menu-->
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                            <div id="kt_aside_menu_wrapper" class="menu-fit">

                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{ ucwords("transaksi") }}</span>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo7/dist/index.html">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Mata Uang</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo7/dist/index.html">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{ ucwords("gudang") }}</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo7/dist/index.html">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                </svg>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>

                                    <span class="menu-title">{{ ucwords("stock") }}</span>
                                        <span class="menu-arrow"></span>
                                    </span>

                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo7/dist/account/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">{{ ucwords("golongan") }}</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Tab pane transaksi--> --}}

				</div>
				<!--end::Tab content-->
			</div>
			<!--end::Wrapper-->

		</div>
	</div>
	<!--end::Workspace-->
</div>
