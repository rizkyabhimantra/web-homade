<!DOCTYPE html>
<html lang="en">
	@include('components.header')
	<head>
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
	</head>

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

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
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
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<img src="{{ asset('icons/menu.svg') }}" alt="">
							</div>
						</div>
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="{{ route('admin.dashboard') }}" class="d-lg-none">
								<img alt="Logo" src="{{ asset('assets/media/logos/Logo-Primer.svg') }}" class="h-35px" />
							</a>
						</div>
						<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<div
								data-kt-swapper="true"
								data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
								data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
								class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
								<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
									Kategori
								</h1>
							</div>
							<div class="app-navbar flex-shrink-0">
								<div class="app-navbar-item ms-1 ms-md-4">
									<div
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
										data-kt-menu-trigger="click"
										data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom-end">
										<i class="bi bi-bell-fill fs-4"></i>
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									</div>
								</div>
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
							</div>
						</div>
					</div>
				</div>
				<!--end::Header-->

				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					@include('components.sidebar', ['page' => 'categories'])

					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">

							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<div
										data-kt-swapper="true"
										data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
										data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
										class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.dashboard') }}">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.categories') }}">Kelola Kategori</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Tambahkan Kategori</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">

									<form action="{{ route('admin.add-category') }}" method="POST">
										@csrf

										<!--begin::Mobile Breadcrumb-->
										<div class="row mb-5 d-md-none">
											<div class="col-12">
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
													<li class="breadcrumb-item text-muted">
														<a href="{{ route('admin.dashboard') }}">Home</a>
													</li>
													<li class="breadcrumb-item">
														<span class="bullet bg-gray-500 w-5px h-2px"></span>
													</li>
													<li class="breadcrumb-item text-muted">Tambahkan Kategori</li>
												</ul>
											</div>
										</div>
										<!--end::Mobile Breadcrumb-->

										<div class="row g-5 g-xl-10 mb-5 mb-xl-10">

											<!--begin::Page header-->
											<div class="col-12">
												<div class="d-flex flex-stack flex-wrap">
													<h3 class="m-md-0">Tambahkan Kategori</h3>
													<a href="{{ route('admin.categories') }}" class="btn btn-light-primary">
														<i class="bi bi-table fs-4"></i>
														Daftar Kategori
													</a>
												</div>
											</div>
											<!--end::Page header-->

											<!--begin::Form card (centered, narrower)-->
											<div class="col-md-8 col-xl-6">
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Detail Kategori</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<div class="mb-0">
															<label class="form-label required">Nama Kategori</label>
															<input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
														</div>

													</div>
												</div>
											</div>
											<!--end::Form card-->

											<!--begin::Action buttons-->
											<div class="col-12">
												<div class="d-flex flex-end">
													<a href="{{ route('admin.categories') }}" class="btn btn-secondary me-3">
														Batal
													</a>
													<button type="submit" class="btn btn-primary">
														Simpan
													</button>
												</div>
											</div>
											<!--end::Action buttons-->

										</div>
									</form>

								</div>
							</div>
							<!--end::Content-->

						</div>

						<div id="kt_app_footer" class="app-footer">
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2025&copy;</span>
									<span class="text-gray-800">Homade Kreatif Teknologi</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<img src="{{ asset('icons/arrow-up.svg') }}" alt="" class="img-white">
		</div>

		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

		@if (session()->has('response'))
		<script>
			alert('{{ session()->get('response')['message'] }}');
		</script>
		@endif

	</body>
</html>