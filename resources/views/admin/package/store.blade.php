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
							<a href="{{ route('admin.dashboard') }}" class="d-lg-none">
								<img alt="Logo" src="{{ asset('assets/media/logos/Logo-Primer.svg') }}" class="h-35px" />
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
									Paket Menu
								</h1>
							</div>
							<!--end::Title-->

							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Notifications-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<div
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px position-relative"
										data-kt-menu-trigger="click"
										data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom-end"
										id="kt_menu_item_wow">
										<i class="bi bi-bell-fill fs-4"></i>
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									</div>
									<div class="menu menu-sub menu-sub-dropdown menu-column w-325px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
											<span class="fs-8 opacity-75 ps-3">(99+)</span></h3>
										</div>
									</div>
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
				</div>
				<!--end::Header-->

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					@include('components.sidebar', ['page' => 'package'])

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
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.dashboard') }}" class="">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.packages') }}" class="">Kelola Paket Menu</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Tambahkan Paket</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<div id="kt_app_content_container" class="app-container container-fluid">

									<form action="{{ route('admin.add-package') }}" method="POST" enctype="multipart/form-data">
										@csrf

										<!--begin::Mobile Breadcrumb-->
										<div class="row mb-5 mb-xl-10 d-md-none">
											<div class="col-12">
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
													<li class="breadcrumb-item text-muted">
														<a href="{{ route('admin.dashboard') }}" class="">Home</a>
													</li>
													<li class="breadcrumb-item">
														<span class="bullet bg-gray-500 w-5px h-2px"></span>
													</li>
													<li class="breadcrumb-item text-muted">Tambahkan Paket</li>
												</ul>
											</div>
										</div>
										<!--end::Mobile Breadcrumb-->

										<!--begin::Row-->
										<div class="row g-5 g-xl-10 mb-5 mb-xl-10">

											<!--begin::Page header-->
											<div class="col-md-12">
												<div class="d-flex flex-stack flex-wrap">
													<h3 class="m-md-0">Tambahkan Paket</h3>
													<a href="{{ route('admin.packages') }}" class="btn btn-light-primary">
														<i class="bi bi-table fs-4"></i>
														Daftar Paket
													</a>
												</div>
											</div>
											<!--end::Page header-->

											<!--begin::Left column-->
											<div class="col-md-4">

												<!--begin::Gambar Paket-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<div class="card-header">
														<div class="card-title">
															<h2>Gambar Paket</h2>
														</div>
													</div>
													<div class="card-body text-center pt-0">
														<style>
															.image-input-placeholder {
																background-image: url('{{ asset('assets/media/svg/files/blank-image.svg') }}');
															}
															[data-bs-theme="dark"] .image-input-placeholder {
																background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg') }}');
															}
														</style>

														<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
															<div class="image-input-wrapper w-150px h-150px"></div>

															<label
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="change"
																data-bs-toggle="tooltip"
																aria-label="Ganti gambar"
																data-bs-original-title="Ganti gambar"
																data-kt-initialized="1">
																<img src="{{ asset('icons/edit.svg') }}" alt="" class="h-50">
																<input type="file" name="image" accept=".png, .jpg, .jpeg">
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

														<div class="text-muted fs-7">Set gambar paket. Hanya file *.png, *.jpg, dan *.jpeg yang diterima.</div>
													</div>
												</div>
												<!--end::Gambar Paket-->

												<!--begin::Status-->
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Status Paket</h2>
														</div>
														<div class="card-toolbar">
															<div class="rounded-circle bg-success w-15px h-15px" id="kt_status_paket"></div>
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
																	{{ old('status_active', 'active') === 'active' ? 'checked' : '' }}
																	onchange="handler_status_active(this)">
																<input type="hidden" name="status_active" id="status_active" value="{{ old('status_active', 'active') }}">
															</div>
														</div>
													</div>
												</div>
												<!--end::Status-->

											</div>
											<!--end::Left column-->

											<!--begin::Right column-->
											<div class="col-md-8">
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Detail Paket</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<!--begin::Nama Paket-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nama Paket</label>
															<div class="input-group">
																<input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
															</div>
														</div>
														<!--end::Nama Paket-->

														<!--begin::Deskripsi-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Deskripsi</label>
															<div class="input-group">
																<textarea class="form-control" rows="4" name="description" minlength="10" required>{{ old('description') }}</textarea>
															</div>
														</div>
														<!--end::Deskripsi-->

														<!--begin::Minimal Pemesanan-->
														<div class="mb-5">
															<label class="form-label required">Minimal Pemesanan</label>
															<div class="input-group">
																<input type="number" class="form-control" name="minimum_order" value="{{ old('minimum_order') }}" min="0" required />
															</div>
														</div>
														<!--end::Minimal Pemesanan-->

														<!--begin::Input group-->
                                                        <div class="mb-5 mb-xl-10">
                                                            <label class="form-label required">Total Serving</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" name="total_servings" value="{{ old('total_servings') }}" min="1" required />
                                                                <span class="input-group-text d-none">porsi</span>
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->

													</div>
												</div>
											</div>
											<!--end::Right column-->

											<!--begin::Action buttons-->
											<div class="col-md-12">
												<div class="d-flex flex-end">
													<button type="reset" class="btn btn-secondary me-3">
														Batal
													</button>
													<button type="submit" class="btn btn-primary">
														Simpan
													</button>
												</div>
											</div>
											<!--end::Action buttons-->

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
					<!--end::Main-->
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
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

		<script defer>
			function handler_status_active(e) {
				document.getElementById('status_active').value = e.checked ? 'active' : 'non-active';
				document.getElementById('kt_status_paket').classList.add(e.checked ? 'bg-success' : 'bg-danger');
				document.getElementById('kt_status_paket').classList.remove(e.checked ? 'bg-danger' : 'bg-success');
			}
		</script>

		@if (session()->has('response'))
		<script>
			alert('{{ session()->get('response')['message'] }}');
			console.log(@json(session()->get('response')));
		</script>
		@endif

	</body>
</html>