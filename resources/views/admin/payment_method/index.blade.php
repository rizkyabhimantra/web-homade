<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.9
Purchase: https://1.envato.market/Vm7VRE
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	@include('components.header')
	<head>
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->



	<!--begin::Body-->
	<body 
		id="kt_app_body" 
		data-kt-app-layout="dark-sidebar" 
		data-kt-app-header-fixed="true" 
		data-kt-app-sidebar-enabled="true" 
		data-kt-app-sidebar-fixed="true" 
		data-kt-app-sidebar-hoverable="false" 
		data-kt-app-sidebar-push-header="true" 
		data-kt-app-sidebar-push-toolbar="true" 
		data-kt-app-sidebar-push-footer="true" 

		data-kt-app-toolbar-enabled="true" 
		data-kt-app-toolbar-fixed="true"
		data-kt-app-toolbar-fixed-mobile="true"

		class="app-default">
		
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div 
					id="kt_app_header" 
					class="app-header " 
					data-kt-sticky="true" 
					data-kt-sticky-activate="{default: true, lg: true}" 
					data-kt-sticky-name="app-header-minimize" 
					data-kt-sticky-offset="{default: '200px', lg: '0'}" 
					data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<img src="{{ asset('icons/menu.svg') }}" alt="">
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->

						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="{{route('admin.dashboard')}}" class="d-lg-none">
								<img alt="Logo" src="{{asset('assets/media/logos/Logo-Primer.svg')}}" class="h-35px" />
							</a>
						</div>
						<!--end::Mobile logo-->

						<!--begin::Header wrapper-->
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

							<!--begin::Title-->
							<div 
								data-kt-swapper="true" 
								data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
								data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
								class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
									Metode Pembayaran
								</h1>
							</div>
							<!--end::Title-->

							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu Icon-->
									<div 
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative" 
										data-kt-menu-trigger="click" 
										data-kt-menu-attach="parent" 
										data-kt-menu-placement="bottom-end" 
										id="kt_menu_item_wow">
										<i class="bi bi-bell-fill fs-4"></i>
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									</div>
									<!--end::Menu Icon-->

									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-325px w-lg-375px " data-kt-menu="true" id="kt_menu_notifications">
										<!--begin::Heading-->
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<!--begin::Title-->
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications 
											<span class="fs-8 opacity-75 ps-3">(99+)</span></h3>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Notifications-->

								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<div
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" 
										data-kt-menu-trigger="click" 
										data-kt-menu-attach="parent" 
										data-kt-menu-placement="bottom-end">
										<i class="bi bi-sun-fill theme-light-show fs-3"></i>
										<i class="bi bi-moon-fill theme-dark-show fs-4"></i>
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon"><i class="bi bi-sun-fill fs-3"></i></span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon"><i class="bi bi-moon-fill fs-4"></i></span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon"><i class="bi bi-pc-display fs-4"></i></span>
												<span class="menu-title">System</span>
											</a>
										</div>
									</div>
								</div>
								<!--end::Theme mode-->
							</div>
							<!--end::Navbar-->

						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					@include('components.sidebar', ["page" => "payment-methods"])

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

									<!--begin::Title & Breadcrumb-->
									<div 
										data-kt-swapper="true" 
										data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
										data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
										class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<li class="breadcrumb-item">
												<a href="{{route('admin.dashboard')}}" class="">Dashboard</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Metode Pembayaran</li>
										</ul>
									</div>
									<!--end::Title & Breadcrumb-->

									<!--begin::Action group-->
									<div class="d-flex align-items-center ms-auto gap-3">

										<!--begin::Export button-->
										<form method="post" action="{{ route('admin.export-payment-methods') }}" class="d-flex align-items-center">
											@csrf
											<button id="btnExportExcel" class="btn btn-sm btn-light-primary">
												<i class="bi bi-file-earmark-spreadsheet fs-4"></i>
												Export (Excel)
											</button>
										</form>
										<!--end::Export button-->

									</div>
									<!--end::Action group-->

								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">

									<!--begin::Row Breadcrumb for Mobile View-->
									<div class="row mb-5 mb-xl-10 d-md-none">
										<div class="col-12">
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-md-none">
												<li class="breadcrumb-item">
													<a href="{{route('admin.dashboard')}}" class="">Dashboard</a>
												</li>
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<li class="breadcrumb-item text-muted">Metode Pembayaran</li>
											</ul>
										</div>
									</div>
									<!--end::Row Breadcrumb for Mobile View-->

									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-12">

											<!--begin::Card-->
											<div class="card">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Daftar Metode Pembayaran</span>
													</h3>
													<div class="card-toolbar">
														<a href="{{ route('admin.create-payment-method-page') }}" class="btn btn-primary">
															<i class="bi bi-plus-lg fs-4"></i>
															Tambahkan Metode
														</a>
													</div>
												</div>
												<!--end::Header-->

												<!--begin::Card body-->
												<div class="card-body">

													<div class="d-flex flex-stack flex-wrap mb-5">
														<!--begin::Search-->
														<div class="d-flex align-items-center position-relative my-1">
															<input type="text" data-kt-filter="search" data-table-target="#kt_datatable_payments" class="form-control w-250px" placeholder="Cari" />
														</div>
														<!--end::Search-->
													</div>

													<div class="table-responsive">
														<table class="mb-4 table align-middle border rounded table-striped table-row-dashed fs-6 g-5 gs-5" id="kt_datatable_payments">
															<thead>
																<tr class="text-start text-gray-800 fw-bold fs-7 text-capitalize">
																	<th class="min-w-100px">Logo Bank</th>
																	<th class="min-w-150px">Nama Bank</th>
																	<th class="min-w-150px">Nama Pemilik</th>
																	<th class="min-w-150px">No Rekening</th>
																	<th class="min-w-100px pe-5">Status</th>
																	<th class="text-end min-w-125px pe-5">Aksi</th>
																</tr>
															</thead>
															<tbody class="text-gray-700"></tbody>
														</table>

														<div class="mt-3 d-flex align-items-center justify-content-between w-100 h-40px">
															<select name="limit" onchange="window.location.href='?limit=' + this.value" class="h-100 border-grey-05 outline-0 bg-transparent fs-4 py-2 px-2 rounded-2">
																@foreach ([8, 16, 24, 32] as $limit)
																	<option value="{{ $limit }}" {{ request('limit') == $limit ? 'selected' : '' }}>
																		{{ $limit }}
																	</option>
																@endforeach
															</select>

															@php
																$pagination = $response['data']['pagination'] ?? null;
																$currentPage = $pagination['current_page'] ?? 1;
																$lastPage = $pagination['last_page'] ?? 1;

																$window = 1;
																$start = max(2, $currentPage - $window);
																$end = min($lastPage - 1, $currentPage + $window);
															@endphp

															@if($pagination && $lastPage > 1)
															<div class="d-flex h-100 gap-2">
																
																<a href="{{ $currentPage > 1 ? request()->fullUrlWithQuery(['page' => $currentPage - 1]) : '#' }}" 
																class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage <= 1 ? 'opacity-50 pe-none' : '' }}">
																	<img src="{{ asset('icons/caret-arrow-left.svg') }}" alt="Prev" class="h-90">
																</a>

																<a href="{{ request()->fullUrlWithQuery(['page' => 1]) }}" 
																class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == 1 ? 'bg-accent text-white' : 'text-dark' }}">
																	1
																</a>

																@if($start > 2)
																	<div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold text-black cursor-default">...</div>
																@endif

																@for ($i = $start; $i <= $end; $i++)
																	<a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" 
																	class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $i ? 'bg-accent text-white' : 'text-dark' }}">
																		{{ $i }}
																	</a>
																@endfor

																@if($end < $lastPage - 1)
																	<div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold text-black cursor-default">...</div>
																@endif

																<a href="{{ request()->fullUrlWithQuery(['page' => $lastPage]) }}" 
																class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $lastPage ? 'bg-accent text-white' : 'text-dark' }}">
																	{{ $lastPage }}
																</a>

																<a href="{{ $currentPage < $lastPage ? request()->fullUrlWithQuery(['page' => $currentPage + 1]) : '#' }}" 
																class="text-decoration-none text-dark h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center {{ $currentPage >= $lastPage ? 'opacity-50 pe-none' : '' }}">
																	<img src="{{ asset('icons/caret-arrow-right.svg') }}" alt="Next" class="h-90">
																</a>

															</div>
															@endif

														</div>

													</div>

												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->

										</div>
									</div>
									<!--end::Row-->

								</div>
							</div>
							<!--end::Content-->

						</div>
						<!--end::Content wrapper-->

						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2025&copy;</span>
									<span class="text-gray-800">Homade Kreatif Teknologi</span>
								</div>
							</div>
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<img src="{{ asset('icons/arrow-up.svg') }}" alt="" class="img-white">
		</div>
		<!--end::Scrolltop-->

		<script>var hostUrl = "assets/";</script>

		<!--begin::Global Javascript Bundle-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Vendors Javascript-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript-->
		<script>
			const allData = @json($response['data']['payments']);

			"use strict";

			let exportButton;

			function initPaymentDatatable(dataSource) {
				const tableId = '#kt_datatable_payments';
				const tableElement = document.querySelector(tableId);
				if (!tableElement) return;

				if ($.fn.DataTable.isDataTable(tableElement)) {
					$(tableElement).DataTable().destroy();
				}

				$(tableElement).DataTable({
					data: dataSource,
					deferRender: true,
					searching: true,
					info: false,
					paging: false,
					order: [],
					pageLength: 12,
					language: {
						lengthMenu: "",
						info: "",
						infoEmpty: "No entries available",
						infoFiltered: ""
					},
					columns: [
						{
							// Logo Bank
							data: 'image_url',
							orderable: false,
							render: function (data) {
								return data
									? `<img src="${data}" style="height:40px;width:60px;object-fit:contain;border-radius:4px;background:#f5f5f5;padding:4px;" loading="lazy">`
									: `<div style="height:40px;width:60px;background:#f5f5f5;border-radius:4px;display:flex;align-items:center;justify-content:center;"><i class="bi bi-bank fs-4 text-muted"></i></div>`;
							}
						},
						{
							// Nama Bank
							data: 'bank_name',
							render: function (data) {
								return data ?? '-';
							}
						},
						{
							// Nama Pemilik
							data: 'account_owner',
							render: function (data) {
								return data ?? '-';
							}
						},
						{
							// No Rekening
							data: 'account_number',
							render: function (data) {
								return data
									? `<span class="fw-bold text-primary">${data}</span>`
									: '-';
							}
						},
						{
							// Status
							data: 'is_active',
							render: function (data) {
								return data
									? `<div class="badge badge-success">Active</div>`
									: `<div class="badge badge-secondary">Non Active</div>`;
							}
						},
						{
							// Aksi
							data: null,
							orderable: false,
							className: 'text-end',
							render: function (row) {
								const detailUrl  = "{{ route('admin.edit-payment-method', '_ID_') }}".replace('_ID_', row.id);
								const deleteUrl  = "{{ route('admin.delete-payment-method', '_ID_') }}".replace('_ID_', row.id);

								return `
									<button
										class="btn btn-secondary btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click"
										data-kt-menu-placement="bottom-end"
										data-kt-menu-flip="top-end">
										Aksi <i class="bi bi-chevron-down fs-8 ms-1"></i>
									</button>
									<div class="menu menu-primary menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-color fw-bold fs-7 min-w-125px w-auto py-4" data-kt-menu="true">
										<div class="menu-item px-3">
											<a href="${detailUrl}" class="menu-link px-3">Edit</a>
										</div>
										<div class="separator my-2"></div>
										<form action="${deleteUrl}" method="post" class="menu-item px-3 w-100" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
											@csrf
											@method('delete')
											<button class="menu-link menu-link-delete px-3">Hapus</button>
										</form>
									</div>`;
							}
						}
					],
					drawCallback: function () {
						KTMenu.createInstances();
					}
				});
			}

			KTUtil.onDOMContentLoaded(function () {

				// Initialize DataTable with all payment data
				initPaymentDatatable(allData);

				// Wire up search input
				document.querySelectorAll('[data-kt-filter="search"]').forEach(function (searchInput) {
					const tableSelector = searchInput.getAttribute('data-table-target');
					if (!tableSelector) return;
					searchInput.addEventListener('keyup', function () {
						$(document.querySelector(tableSelector)).DataTable().search(this.value).draw();
					});
				});

				// Export button — reuses DataTable Buttons
				document.getElementById('btnExportExcel')?.addEventListener('click', function (e) {
					e.preventDefault();
					const table = $('#kt_datatable_payments').DataTable();
					if (!exportButton) {
						exportButton = new $.fn.dataTable.Buttons(table, {
							buttons: [{
								extend: 'excelHtml5',
								title: 'Daftar Metode Pembayaran',
								exportOptions: { columns: [0, 1, 2, 3, 4] }
							}]
						});
					}
					table.button(0).trigger();
				});

			});
		</script>
		<!--end::Custom Javascript-->

	</body>
	<!--end::Body-->
</html>