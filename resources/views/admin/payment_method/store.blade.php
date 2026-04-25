<!DOCTYPE html>
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
		data-kt-app-sidebar-hoverable="true" 
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
					class="app-header" 
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
					<!--begin::Sidebar-->
					@include('components.sidebar', ["page" => "payment"])
					<!--end::Sidebar-->

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div 
										data-kt-swapper="true" 
										data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
										data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
										class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.dashboard') }}" class="">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.payment-methods') }}" class="">Metode Pembayaran</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Tambah</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
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
												<li class="breadcrumb-item text-muted">
													<a href="{{ route('admin.dashboard') }}" class="">Home</a>
												</li>
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<li class="breadcrumb-item text-muted">
													<a href="{{ route('admin.payment-methods') }}" class="">Metode Pembayaran</a>
												</li>
												<li class="breadcrumb-item">
													<span class="bullet bg-gray-500 w-5px h-2px"></span>
												</li>
												<li class="breadcrumb-item text-muted">Tambah</li>
											</ul>
										</div>
									</div>
									<!--end::Row Breadcrumb for Mobile View-->

									<form id="formStore" action="{{ route('admin.create-payment-method') }}" method="POST" enctype="multipart/form-data">
										@csrf

										<!--begin::Row-->
										<div class="row g-5 g-xl-10 mb-5 mb-xl-10">

											<!--begin::Page header-->
											<div class="col-md-12">
												<div class="d-flex flex-stack flex-wrap">
													<h3 class="m-md-0">Tambahkan Metode Pembayaran</h3>
													<a href="{{ route('admin.payment-methods') }}" class="btn btn-light-primary">
														<i class="bi bi-arrow-left fs-4"></i>
														Kembali
													</a>
												</div>
											</div>
											<!--end::Page header-->

											<!--begin::Left col - Image & Status-->
											<div class="col-md-4">

												<!--begin::Gambar-->
												<div class="card card-flush py-4 mb-5">
													<div class="card-header">
														<div class="card-title">
															<h2>Logo Bank / E-Wallet</h2>
														</div>
													</div>
													<div class="card-body text-center pt-0">
														<style>
															.image-input-placeholder {
																background-image: url('{{asset('assets/media/svg/files/blank-image.svg')}}');
															}
															[data-bs-theme="dark"] .image-input-placeholder {
																background-image: url('{{asset('assets/media/svg/files/blank-image-dark.svg')}}');
															}
														</style>
														<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
															data-kt-image-input="true">
															<div class="image-input-wrapper w-150px h-150px"></div>
															<label
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="change"
																data-bs-toggle="tooltip"
																aria-label="Ganti gambar"
																data-bs-original-title="Ganti gambar"
																data-kt-initialized="1">
																<img src="{{ asset('icons/edit.svg') }}" alt="" class="h-50">
																<input type="file" name="image" accept=".png, .jpg, .jpeg" required>
																<input type="hidden" name="avatar_remove">
															</label>
															<span
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="cancel"
																data-bs-toggle="tooltip"
																aria-label="Batal"
																data-bs-original-title="Batal"
																data-kt-initialized="1">
																<img src="{{ asset('icons/close.svg') }}" alt="" class="h-75">
															</span>
															<span
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="remove"
																data-bs-toggle="tooltip"
																aria-label="Hapus gambar"
																data-bs-original-title="Hapus gambar"
																data-kt-initialized="1">
																<img src="{{ asset('icons/close.svg') }}" alt="" class="h-100">
															</span>
														</div>
														<div class="text-muted fs-7">Unggah logo bank atau e-wallet. Hanya file *.png, *.jpg, dan *.jpeg yang diterima.</div>
													</div>
												</div>
												<!--end::Gambar-->

												<!--begin::Status-->
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Status</h2>
														</div>
														<div class="card-toolbar">
															<div class="rounded-circle bg-success w-15px h-15px" id="kt_status_indicator"></div>
														</div>
													</div>
													<div class="card-body pt-0">
														<div class="mb-0">
															<div class="form-check form-switch mb-0">
																<input
																	class="form-check-input"
																	type="checkbox"
																	role="switch"
																	id="is_active"
																	name="is_active"
																	value="1"
																	checked
																	onchange="handleStatusChange(this)"
																>
															</div>
														</div>
													</div>
												</div>
												<!--end::Status-->

											</div>
											<!--end::Left col-->

											<!--begin::Right col - Form fields-->
											<div class="col-md-8">
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Detail</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<!--begin::Nama Bank-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nama Bank / E-Wallet</label>
															<div class="input-group">
																<input
																	type="text"
																	class="form-control"
																	name="bank_name"
																	value="{{ old('bank_name') }}"
																	placeholder="Contoh: Bank BCA"
																	required
																/>
															</div>
														</div>
														<!--end::Nama Bank-->

														<!--begin::Nama Pemilik-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nama Pemilik Rekening</label>
															<div class="input-group">
																<input
																	type="text"
																	class="form-control"
																	name="account_owner"
																	value="{{ old('account_owner') }}"
																	required
																/>
															</div>
														</div>
														<!--end::Nama Pemilik-->

														<!--begin::No Rekening-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nomor Rekening</label>
															<div class="input-group">
																<input
																	type="text"
																	class="form-control"
																	name="account_number"
																	value="{{ old('account_number') }}"
																	inputmode="numeric"
																	pattern="[0-9]*"
																	required
																/>
															</div>
														</div>
														<!--end::No Rekening-->

													</div>
												</div>
											</div>
											<!--end::Right col-->

											<!--begin::Actions-->
											<div class="col-md-12">
												<div class="d-flex flex-end gap-3">
													<a href="{{ route('admin.payment-methods') }}" class="btn btn-secondary">
														Batal
													</a>
													<button type="submit" class="btn btn-primary">
														Simpan
													</button>
												</div>
											</div>
											<!--end::Actions-->

										</div>
										<!--end::Row-->

									</form>

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

		<!--begin::Custom Javascript-->
		<script>
			"use strict";

			function handleStatusChange(el) {
				const indicator = document.getElementById('kt_status_indicator');
				if (el.checked) {
					indicator.classList.remove('bg-danger');
					indicator.classList.add('bg-success');
				} else {
					indicator.classList.remove('bg-success');
					indicator.classList.add('bg-danger');
				}
			}

			KTUtil.onDOMContentLoaded(function () {
				// init image input
				KTImageInput.createInstances();
			});
		</script>
		<!--end::Custom Javascript-->

		@if (session()->has('response'))
		<script>
			alert('{{ session()->get('response')['message'] }}');
		</script>
		@endif

	</body>
	<!--end::Body-->
</html>