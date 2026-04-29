<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
-->
<html lang="en">
	<!--begin::Head-->
	@include('components.header')
	<head>
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
									Pesanan
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
										<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{ asset('assets/media/misc/menu-header-bg.jpg') }}')">
											<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
												<span class="fs-8 opacity-75 ps-3">(99+)</span>
											</h3>
											<div class="hover-scroll-x">
												<div class="d-grid">
													<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9 flex-nowrap text-nowrap">
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Approval (99+)</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="tab-content">
											<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
												<div class="scroll-y h-325px my-5 px-4">
													<div class="text-center text-muted py-10 fs-7">Tidak ada notifikasi</div>
												</div>
												<div class="py-3 text-center border-top">
													<a href="#" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua</a>
												</div>
											</div>
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
					<!--end::Header container-->
				</div>
				<!--end::Header-->

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<!--begin::Sidebar-->
					@include('components.sidebar', ["page" => "order"])
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
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.dashboard') }}" class="">Home</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.orders') }}" class="">Kelola Pesanan</a>
											</li>
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Buat Pesanan</li>
										</ul>
									</div>
								</div>
							</div>
							<!--end::Toolbar-->

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">

									@if($response['status_code'] == 200)

									<form id="createOrderForm" action="{{ route('admin.add-order') }}" method="POST">
										@csrf

										<!--begin::Row-->
										<div class="row g-5 g-xl-10 mb-5 mb-xl-10">

											<!--begin::Col Header-->
											<div class="col-md-12">
												<div class="d-flex flex-stack flex-wrap">
													<h3 class="m-md-0">Buat Pesanan</h3>
													<a href="{{ route('admin.orders') }}" class="btn btn-light-primary">
														<i class="bi bi-table fs-4"></i>
														Daftar Pesanan
													</a>
												</div>
											</div>
											<!--end::Col Header-->

											<!--begin::Col Left (narrow)-->
											<div class="col-md-4">

												<!--begin::Card Pelanggan-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<div class="card-header">
														<div class="card-title">
															<h2>Pelanggan</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<div class="mb-5 mb-xl-10">
															<label class="form-label">Akun Pelanggan</label>
															@php $defaultUser = $response['data']['user_info']['default']; @endphp
															<select id="selectUser" class="form-select" onchange="onUserSelect(this)">
																{{-- Default user always first and pre-selected --}}
																<option
																	value="{{ $defaultUser['id'] }}"
																	data-firstname="{{ $defaultUser['first_name'] }}"
																	data-lastname="{{ $defaultUser['last_name'] }}"
																	data-phone="{{ $defaultUser['phone'] }}"
																	data-email="{{ $defaultUser['email'] }}"
																	data-address="{{ json_encode($defaultUser['address']) }}"
																	data-isdefault="1"
																	selected>
																	{{ $defaultUser['first_name'] }} &mdash; {{ $defaultUser['email'] }}
																</option>
																{{-- All other users (skip default to avoid duplicate) --}}
																@foreach($response['data']['user_info']['users'] as $user)
																	@if($user['id'] !== $defaultUser['id'])
																	<option
																		value="{{ $user['id'] }}"
																		data-firstname="{{ $user['first_name'] }}"
																		data-lastname="{{ $user['last_name'] }}"
																		data-phone="{{ $user['phone'] }}"
																		data-email="{{ $user['email'] }}"
																		data-address="{{ json_encode($user['address']) }}">
																		{{ $user['first_name'] }} {{ $user['last_name'] }} &mdash; {{ $user['email'] }}
																	</option>
																	@endif
																@endforeach
															</select>
														</div>

														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nama Depan</label>
															<div class="input-group">
																<input type="text" name="first_name" id="inputFirstName" class="form-control" placeholder="Nama depan" required>
															</div>
														</div>

														<div class="mb-5 mb-xl-10">
															<label class="form-label">Nama Belakang</label>
															<div class="input-group">
																<input type="text" name="last_name" id="inputLastName" class="form-control" placeholder="Nama belakang">
															</div>
														</div>

														<div class="mb-5 mb-xl-10">
															<label class="form-label required">No. WhatsApp</label>
															<div class="input-group">
																<span class="input-group-text">+62</span>
																<input type="text" name="phone" id="inputPhone" class="form-control" placeholder="81234567890" required>
															</div>
														</div>

														<div class="mb-0">
															<label class="form-label">Email</label>
															<div class="input-group">
																<input type="email" name="email" id="inputEmail" class="form-control" placeholder="email@contoh.com">
															</div>
														</div>

													</div>
												</div>
												<!--end::Card Pelanggan-->

												<!--begin::Card Tanggal Pengiriman-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<div class="card-header">
														<div class="card-title">
															<h2>Tanggal Pengiriman</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														@if(!empty($response['data']['menu_info']['weekly']))
														<div class="mb-5 mb-xl-10">
															<label class="form-label">Jadwal Tersedia</label>
															<div class="d-flex flex-column gap-2">
																@foreach($response['data']['menu_info']['weekly'] as $week)
																	<button type="button"
																		class="btn btn-sm btn-light weekly-date-btn text-start"
																		data-date="{{ \Carbon\Carbon::createFromFormat('d-m-Y', $week['date'])->format('Y-m-d') }}"
																		onclick="pickWeeklyDate(this)">
																		<i class="bi bi-calendar3 me-2"></i>
																		{{ \Carbon\Carbon::createFromFormat('d-m-Y', $week['date'])->translatedFormat('l, d M Y') }}
																	</button>
																@endforeach
															</div>
														</div>
														@endif

														<div class="mb-0">
															<label class="form-label required">Tanggal Pengiriman</label>
															<input type="date" name="delivery_at" id="inputDeliveryAt" class="form-control"
																min="{{ now()->addDay()->format('Y-m-d') }}"
																onchange="onDeliveryDateChange(this.value)" required>
														</div>

													</div>
												</div>
												<!--end::Card Tanggal Pengiriman-->

												<!--begin::Card Alamat Pengiriman-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<div class="card-header">
														<div class="card-title">
															<h2>Alamat Pengiriman</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														{{-- Address picker: shown when selected user has saved addresses --}}
														<div id="addressPicker" class="d-none mb-5">
															<label class="form-label">Alamat Tersimpan</label>
															<div id="addressOptions" class="d-flex flex-column gap-2 mb-3"></div>
															<div class="separator separator-dashed my-4"></div>
														</div>

														{{-- New address fields: shown when no saved address is chosen --}}
														<div id="newAddressFields">

															<div class="mb-5 mb-xl-10">
																<label class="form-label required">Nama Penerima</label>
																<div class="input-group">
																	<input type="text" name="fullname" id="inputFullname" class="form-control" placeholder="Nama penerima paket" required>
																</div>
															</div>

															<div class="mb-5 mb-xl-10">
																<label class="form-label required">No. HP Penerima</label>
																<div class="input-group">
																	<span class="input-group-text">+62</span>
																	<input type="text" name="phone_address" id="inputAddressPhone" class="form-control" placeholder="81234567890" required>
																</div>
															</div>

															<div class="mb-5 mb-xl-10">
																<label class="form-label required">Label Alamat</label>
																<div class="input-group">
																	<input type="text" name="address_label" id="inputAddressLabel" class="form-control" placeholder="Contoh: Rumah, Kantor" required>
																</div>
															</div>

															<div class="mb-5 mb-xl-10">
																<label class="form-label required">Alamat Lengkap</label>
																<div class="input-group">
																	<textarea name="address" id="inputAddress" class="form-control" rows="3" placeholder="Jl. Contoh No. 123, Kelurahan, Kecamatan, Kota" required></textarea>
																</div>
															</div>

															<div class="mb-5 mb-xl-10">
																<label class="form-label required">Catatan Alamat</label>
																<div class="input-group">
																	<input type="text" name="address_note" id="inputAddressNote" class="form-control" placeholder="Contoh: Titip di pos satpam depan" required>
																</div>
															</div>

															<div class="mb-5">
																<label class="form-label required">Lokasi Pin</label>
																<div id="deliveryMap" style="height:220px;border-radius:0.625rem;border:1px solid var(--bs-border-color);z-index:0;"></div>
																<div class="d-flex gap-3 mt-2">
																	<div class="flex-grow-1">
																		<small class="text-muted">Latitude</small>
																		<div class="fw-bold fs-7" id="displayLatitude">-6.2088</div>
																	</div>
																	<div class="flex-grow-1">
																		<small class="text-muted">Longitude</small>
																		<div class="fw-bold fs-7" id="displayLongitude">106.8456</div>
																	</div>
																</div>
																<small class="text-muted fs-8">Klik atau geser pin untuk mengatur lokasi pengiriman.</small>
																<input type="hidden" name="latitude"  id="inputLatitude"  value="-6.2088" required>
																<input type="hidden" name="longitude" id="inputLongitude" value="106.8456" required>
															</div>

															<div class="mb-0 d-flex align-items-center gap-3">
																<div class="form-check form-switch mb-0">
																	<input class="form-check-input" type="checkbox" id="inputSaveToProfile" name="save_to_profile">
																	<label class="form-check-label" for="inputSaveToProfile">Simpan alamat ke profil</label>
																</div>
															</div>

														</div>

													</div>
												</div>
												<!--end::Card Alamat Pengiriman-->

											</div>
											<!--end::Col Left-->

											<!--begin::Col Right (wide)-->
											<div class="col-md-8">
												<!--begin::Card Pilih Menu-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<div class="card-header">
														<div class="card-title">
															<h2>Pilih Menu &amp; Paket</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<div class="row g-5">
															@foreach($response['data']['menu_info']['menus'] as $index => $menu)
															<div class="col-md-6">
																<div class="border rounded-3 overflow-hidden h-100 menu-card" data-menu-id="{{ $menu['id'] }}">
																	<div class="position-relative" style="height: 160px;">
																		<img src="{{ $menu['image_url'] }}" alt="{{ $menu['name'] }}" class="w-100 h-100 object-fit-cover">
																		<span class="position-absolute top-0 start-0 m-2 px-4 py-1 rounded-2 fw-semibold bg-light-accent text-accent">{{ $menu['theme'] }}</span>
																	</div>
																	<div class="p-4">
																		<h6 class="fw-bold mb-1">{{ $menu['name'] }}</h6>
																		<p class="text-muted fs-7 mb-3" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
																			{{ $menu['description'] }}
																		</p>
																		<div id="menuSummary_{{ $menu['id'] }}" class="mb-3 d-none fs-7 border rounded p-2 bg-light-primary"></div>
																		<button type="button" class="btn btn-primary btn-sm w-100 align-items-center"
																			onclick="openMenuPopup('{{ $menu['id'] }}')">
																			<i class="bi bi-bag me-1"></i>
																			<span id="menuBtnLabel_{{ $menu['id'] }}" class="text-white">Pilih Paket</span>
																		</button>
																	</div>
																</div>
															</div>
															@endforeach
														</div>

													</div>
												</div>
												<!--end::Card Pilih Menu-->

												<!--begin::Card Ringkasan-->
												<div class="card card-flush mb-5 mb-xl-10 py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Ringkasan Pesanan</h2>
														</div>
													</div>
													<div class="card-body pt-0">

														<div class="d-flex justify-content-between align-items-center mb-3 border rounded p-3">
															<span class="text-muted fs-7">Tanggal Pengiriman</span>
															<span class="fw-bold fs-7" id="summaryDeliveryDate">-</span>
														</div>

														<div class="d-flex justify-content-between align-items-center mb-5 border rounded p-3">
															<span class="text-muted fs-7">Pelanggan</span>
															<span class="fw-bold fs-7" id="summaryCustomer">-</span>
														</div>

														<p class="fw-bold fs-7 text-muted mb-3">Item Pesanan</p>
														<div id="summaryItems" class="d-flex flex-column gap-3 mb-5 min-h-50px">
															<div class="text-center text-muted fs-7 py-5" id="summaryEmpty">
																<i class="bi bi-cart3 fs-1 d-block mb-2 opacity-25"></i>
																Belum ada menu dipilih
															</div>
														</div>

														<div class="separator separator-dashed my-5"></div>

														<div class="d-flex justify-content-between mb-2">
															<span class="text-muted fs-7">Subtotal</span>
															<span class="fw-bold fs-7" id="summarySubtotal">Rp 0</span>
														</div>

														<div class="d-flex justify-content-between mb-5">
															<span class="text-muted fs-7">Ongkos Kirim</span>
															<span class="fs-7 text-muted">Dihitung setelah konfirmasi</span>
														</div>

													</div>
												</div>
												<!--end::Card Ringkasan-->

												<!--begin::Card Catatan-->
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Catatan Tambahan</h2>
														</div>
													</div>
													<div class="card-body pt-0">
														<textarea name="note" id="inputNote" class="form-control" rows="3" placeholder="Catatan opsional dari pelanggan..."></textarea>
													</div>
												</div>
												<!--end::Card Catatan-->

											</div>
											<!--end::Col Right-->

											<!--begin::Col Actions-->
											<div class="col-md-12">
												<div class="d-flex flex-end gap-3">
													<button type="reset" class="btn btn-secondary me-3">
														Batal
													</button>
													<button type="button" onclick="submitOrder()" class="btn btn-primary">
														Simpan Pesanan
													</button>
												</div>
											</div>
											<!--end::Col Actions-->

										</div>
										<!--end::Row-->

										<input type="hidden" name="checkout_payload" id="checkoutPayload">
									</form>

									@else

									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<div class="col-md-12">
											<div class="d-flex flex-stack flex-wrap">
												<h3 class="m-md-0">Buat Pesanan</h3>
												<a href="{{ route('admin.orders') }}" class="btn btn-light-primary">
													<i class="bi bi-table fs-4"></i>
													Daftar Pesanan
												</a>
											</div>
										</div>
										<div class="col-md-12">
											<div class="card card-flush py-10 text-center">
												<div class="card-body">
													<i class="bi bi-exclamation-triangle fs-1 text-warning mb-4 d-block"></i>
													<p class="fw-bold fs-4 text-gray-700">{{ $response['message'] }}</p>
													<a href="{{ route('admin.orders') }}" class="btn btn-primary">Kembali ke Daftar Pesanan</a>
												</div>
											</div>
										</div>
									</div>

									@endif

								</div>
								<!--end::Content container-->
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

		<!--begin::Menu Popup Modal-->
        <div class="modal fade" id="menuPopupModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" style="border-radius: 1.25rem; overflow: hidden; border: none;">

                    <div class="modal-header border-0 px-8 pt-6 pb-0">
                        <h5 class="modal-title fw-bold">Pilih Kemasan Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-0" style="height: 80dvh; overflow: hidden;">
                        <div class="d-flex h-100">

                            <!--begin::Left panel (menu info)-->
                            <div class="d-flex flex-column flex-shrink-0 px-8 py-6" style="width: 300px;">
                                <div class="position-relative rounded-4 overflow-hidden flex-shrink-0" style="height: 200px;">
                                    <img id="modalMenuImg" src="" alt="" class="w-100 h-100 object-fit-cover">
                                    <span id="modalMenuLabel"
                                        class="position-absolute top-0 start-0 m-3 px-4 py-1 rounded-2 fw-bold fs-8 bg-accent text-white"></span>
                                </div>
                                <div class="border rounded-bottom-4 p-5 d-flex flex-column flex-grow-1" style="border-top: none !important; margin-top: -4px; min-height: 0;">
                                    <p id="modalMenuName" class="fw-bolder fs-5 mb-2 flex-shrink-0 text-nowrap overflow-hidden" style="text-overflow:ellipsis;"></p>
                                    <div class="flex-grow-1 mb-4" style="overflow-y: auto; min-height: 0;">
                                        <p id="modalMenuDesc" class="text-muted fs-7 mb-0"></p>
                                    </div>
                                    <button type="button" class="btn-primary-homade rounded-2 w-100 fw-bold flex-shrink-0 justify-content-center"
                                        onclick="confirmMenuSelection()">
                                        <i class="bi bi-check-lg me-1 text-white"></i> Konfirmasi
                                    </button>
                                </div>
                            </div>
                            <!--end::Left panel-->

                            <!--begin::Divider-->
                            <div class="flex-shrink-0" style="width: 1px; background: var(--bs-border-color);"></div>
                            <!--end::Divider-->

                            <!--begin::Right panel (packages)-->
                            <div class="flex-grow-1 px-8 py-6" style="overflow-y: auto; overflow-x: hidden;">
                                <div id="modalPackageList" class="d-flex flex-column gap-4"></div>
                            </div>
                            <!--end::Right panel-->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end::Menu Popup Modal-->

		<script>var hostUrl = "assets/";</script>

		<!--begin::Global Javascript Bundle-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
		<!--end::Global Javascript Bundle-->

		<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/jstree/jstree.bundle.js') }}"></script>

		@if($response['status_code'] == 200)
		<script>
		"use strict";

		const allMenus = @json($response['data']['menu_info']['menus']);
		const allUsers = @json($response['data']['user_info']['users']);

		let allOrders      = [];
		let currentMenu    = null;
		let selectedUserId = null;

		// Tracks the UUID of a saved address if one is selected
		let selectedSavedAddressId = null;

		function fmt(n) {
			return new Intl.NumberFormat('id-ID').format(n);
		}

		// ─── User selector ────────────────────────────────────────────────────────

		function onUserSelect(sel) {
			const opt       = sel.options[sel.selectedIndex];
			const isDefault = opt.dataset.isdefault === '1';
			selectedUserId         = opt.value || null;
			selectedSavedAddressId = null;

			const customerFields = ['inputFirstName', 'inputLastName', 'inputPhone', 'inputEmail'];

			if (isDefault) {
				// Default = walk-in / messaging customer: clear fields so admin can type freely
				customerFields.forEach(id => {
					const el = document.getElementById(id);
					el.value    = '';
					el.readOnly = false;
				});
			} else {
				// Real account: pre-fill from stored data and lock
				document.getElementById('inputFirstName').value = opt.dataset.firstname || '';
				document.getElementById('inputLastName').value  = opt.dataset.lastname  || '';
				document.getElementById('inputPhone').value     = opt.dataset.phone     || '';
				document.getElementById('inputEmail').value     = opt.dataset.email     || '';
				customerFields.forEach(id => {
					document.getElementById(id).readOnly = true;
				});
			}

			updateSummaryCustomer();

			// Parse this user's saved addresses
			let addresses = [];
			try { addresses = JSON.parse(opt.dataset.address || '[]'); } catch(e) {}

			const addressPicker  = document.getElementById('addressPicker');
			const addressOptions = document.getElementById('addressOptions');

			// Clear previous address options
			addressOptions.innerHTML = '';

			if (isDefault) {
				// Default user: always hide picker, always show manual address form
				addressPicker.classList.add('d-none');
				setNewAddressRequired(true);
			} else if (addresses.length > 0) {
				// Real user with saved addresses: show picker, hide manual form immediately
				addressPicker.classList.remove('d-none');
				setNewAddressRequired(false);

				addresses.forEach((addr, i) => {
					const card = document.createElement('div');
					card.className = 'border rounded-3 p-4 cursor-pointer address-option-card';
					card.dataset.addressId = addr.id || '';
					card.innerHTML = `
						<div class="d-flex align-items-start gap-3">
							<div class="form-check mt-1 flex-shrink-0">
								<input class="form-check-input" type="radio" name="addressOptionRadio"
									id="addrOpt${i}" value="${addr.id || ''}" ${i === 0 ? 'checked' : ''}>
							</div>
							<label class="form-check-label w-100" for="addrOpt${i}" style="cursor:pointer;">
								<div class="d-flex align-items-center gap-2 mb-1">
									<span class="fw-bold fs-7">${addr.received_name || addr.fullname || '—'}</span>
									${addr.label ? `<span class="badge badge-light-success">${addr.label}</span>` : ''}
									${addr.is_main_address ? '<span class="badge badge-light-primary">Utama</span>' : ''}
								</div>
								<div class="text-muted fs-8">${addr.phone || ''}</div>
								<div class="text-muted fs-8 mt-1">${addr.address || ''}</div>
							</label>
						</div>`;

					card.querySelector('input[type=radio]').addEventListener('change', () => {
						pickAddressCard(card, addr.id);
					});
					card.addEventListener('click', (e) => {
						if (e.target.tagName !== 'INPUT') {
							card.querySelector('input').checked = true;
							pickAddressCard(card, addr.id);
						}
					});
					addressOptions.appendChild(card);
				});

				// "Use New Address" option at the bottom
				const newCard = document.createElement('div');
				newCard.className = 'border rounded-3 p-4 cursor-pointer address-option-card';
				newCard.dataset.addressId = '__new__';
				newCard.innerHTML = `
					<div class="d-flex align-items-center gap-3">
						<div class="form-check flex-shrink-0">
							<input class="form-check-input" type="radio" name="addressOptionRadio" id="addrOptNew" value="__new__">
						</div>
						<label class="form-check-label d-flex align-items-center gap-2" for="addrOptNew" style="cursor:pointer;">
							<i class="bi bi-plus-circle text-accent"></i>
							<span class="fw-semibold fs-7 text-accent">Gunakan Alamat Baru</span>
						</label>
					</div>`;
				newCard.querySelector('input[type=radio]').addEventListener('change', () => {
					pickAddressCard(newCard, '__new__');
				});
				newCard.addEventListener('click', (e) => {
					if (e.target.tagName !== 'INPUT') {
						newCard.querySelector('input').checked = true;
						pickAddressCard(newCard, '__new__');
					}
				});
				addressOptions.appendChild(newCard);

				// Auto-select the first saved address
				pickAddressCard(addressOptions.firstElementChild, addresses[0].id);

			} else {
				// Real user with no saved addresses: hide picker, show manual form
				addressPicker.classList.add('d-none');
				setNewAddressRequired(true);
			}
		}

		function pickAddressCard(card, addressId) {
			// Remove highlight from all cards
			document.querySelectorAll('.address-option-card').forEach(c => {
				c.classList.remove('border-accent', 'bg-light-accent');
			});
			card.classList.add('border-accent', 'bg-light-accent');

			if (addressId === '__new__') {
				// Show manual address form
				selectedSavedAddressId = null;
				setNewAddressRequired(true);
			} else {
				// Use this saved address UUID, hide manual form
				selectedSavedAddressId = addressId;
				setNewAddressRequired(false);
			}
		}

		/**
		 * Toggle visibility and HTML `required` attribute on new-address fields.
		 * When a saved address is selected these fields are hidden and not required.
		 */
		function setNewAddressRequired(required) {
			const wrapper = document.getElementById('newAddressFields');
			wrapper.style.display = required ? '' : 'none';

			const fieldIds = [
				'inputFullname',
				'inputAddressPhone',
				'inputAddressLabel',
				'inputAddress',
				'inputAddressNote',
				'inputLongitude',
				'inputLatitude'
			];

			fieldIds.forEach(id => {
				const el = document.getElementById(id);
				if (!el) return;
				if (required) {
					el.setAttribute('required', '');
				} else {
					el.removeAttribute('required');
				}
			});

			if (required) {
				selectedSavedAddressId = null;
			}
		}

		// ─── Delivery date ────────────────────────────────────────────────────────

		function pickWeeklyDate(btn) {
			document.querySelectorAll('.weekly-date-btn').forEach(b => {
				b.classList.remove('btn-accent');
				b.classList.add('btn-light');
			});
			btn.classList.remove('btn-light');
			btn.classList.add('btn-accent');
			const date = btn.dataset.date;
			document.getElementById('inputDeliveryAt').value = date;
			onDeliveryDateChange(date);
		}

		function onDeliveryDateChange(val) {
			if (!val) {
				document.getElementById('summaryDeliveryDate').textContent = '—';
				return;
			}
			const d    = new Date(val);
			const opts = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
			document.getElementById('summaryDeliveryDate').textContent = d.toLocaleDateString('id-ID', opts);
		}

		// ─── Menu popup ───────────────────────────────────────────────────────────

        function openMenuPopup(menuId) {
            currentMenu = allMenus.find(m => m.id === menuId);
            if (!currentMenu) return;

            const menuIndex = allMenus.findIndex(m => m.id === menuId);

            document.getElementById('modalMenuImg').src             = currentMenu.image_url;
            document.getElementById('modalMenuName').textContent    = currentMenu.name;
            document.getElementById('modalMenuDesc').textContent    = currentMenu.description;
            document.getElementById('modalMenuLabel').textContent   = 'Paket ' + (menuIndex === 0 ? 'A' : 'B');

            const container = document.getElementById('modalPackageList');
            container.innerHTML = '';

            (currentMenu.packages || []).forEach((pkg, idx) => {
                const i        = idx + 1;
                const minOrder = pkg.minimum_order || 5;
                const price    = fmt(parseFloat(pkg.price));
                const existing = allOrders.find(o => o.menuId === menuId && o.pkgId === pkg.id);
                const initQty  = existing ? existing.qty  : 0;
                const initNote = existing ? existing.note : '';

                const card = document.createElement('div');
                card.className = 'rounded-4 p-5 flex-shrink-0';
                card.style.background = '#FFFBD7';
                card.innerHTML = `
                    <div class="d-flex align-items-center gap-5 flex-wrap mb-3">
                        <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0 overflow-hidden"
                            style="width:64px;height:64px;border:1px solid rgba(0,0,0,.08);">
                            <img src="${pkg.image_url || ''}" alt="${pkg.name}" style="width:100%;height:100%;object-fit:cover;">
                        </div>
                        <div class="flex-grow-1">
                            <p class="fw-bolder fs-6 mb-0">${pkg.name}</p>
                            <p class="text-accent fw-bold fs-7 mb-0">Rp ${price} / box</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 flex-shrink-0">
                            <button type="button"
                                class="btn btn-sm btn-icon rounded-2 text-white"
                                style="width:36px;height:36px;background:var(--bs-accent);"
                                onclick="counterSubtract(${i}, ${minOrder})">
                                <i class="bi bi-dash-lg text-accent"></i>
                            </button>
                            <input id="pkgInput${i}" type="number"
                                class="text-center fw-bold"
                                style="width:60px;" value="${initQty}" min="0"
                                onblur="checkEmpty(${i})">
                            <button type="button"
                                class="btn btn-sm btn-icon rounded-2 text-white"
                                style="width:36px;height:36px;background:var(--bs-accent);"
                                onclick="counterAdd(${i}, ${minOrder})">
                                <i class="bi bi-plus-lg text-accent"></i>
                            </button>
                        </div>
                    </div>
                    <div id="noteWrapper${i}" style="display:${initQty > 0 ? 'block' : 'none'};">
                        <button type="button"
                            class="p-0 fs-8 text-accent mb-2 fw-semibold"
                            onclick="toggleNote(${i})"
                            id="noteToggle${i}">${initNote ? initNote : 'Tambah Catatan'}</button>
                        <div id="noteArea${i}" style="display:${initNote ? 'block' : 'none'};">
                            <textarea id="pkgNote${i}"
                                class="form-control form-control-sm"
                                rows="2"
                                placeholder="Catatan opsional untuk paket ini"
                                oninput="syncNoteBtn(${i})">${initNote}</textarea>
                        </div>
                    </div>`;
                container.appendChild(card);
            });

            new bootstrap.Modal(document.getElementById('menuPopupModal')).show();
        }

        function counterAdd(i, minOrder) {
            const inp = document.getElementById('pkgInput' + i);
            let val   = parseInt(inp.value) || 0;
            inp.value = (val === 0 && minOrder > 1) ? minOrder : val + 1;
            document.getElementById('noteWrapper' + i).style.display = 'block';
        }

        function counterSubtract(i, minOrder) {
            const inp = document.getElementById('pkgInput' + i);
            let val   = parseInt(inp.value) || 0;
            if (val <= 0) return;
            if (minOrder > 1 && val === minOrder) {
                inp.value = 0;
            } else {
                inp.value = Math.max(0, val - 1);
            }
            if (parseInt(inp.value) === 0) {
                document.getElementById('noteWrapper' + i).style.display = 'none';
                document.getElementById('noteArea'    + i).style.display = 'none';
            }
        }

        function checkEmpty(i) {
            const inp = document.getElementById('pkgInput' + i);
            if (!inp.value.trim()) inp.value = 0;
        }

        function toggleNote(i) {
            const area = document.getElementById('noteArea' + i);
            area.style.display = area.style.display === 'none' ? 'block' : 'none';
        }

        function syncNoteBtn(i) {
            const val = document.getElementById('pkgNote' + i).value.trim();
            document.getElementById('noteToggle' + i).textContent = val || 'Tambah Catatan';
        }

        function confirmMenuSelection() {
            if (!currentMenu) return;

            const newItems = [];
            (currentMenu.packages || []).forEach((pkg, idx) => {
                const i    = idx + 1;
                const qty  = parseInt(document.getElementById('pkgInput' + i)?.value) || 0;
                const note = document.getElementById('pkgNote'  + i)?.value?.trim()  || '';
                if (qty > 0) {
                    newItems.push({
                        menuId:   currentMenu.id,
                        menuName: currentMenu.name,
                        pkgId:    pkg.id,
                        pkgName:  pkg.name,
                        qty, note,
                        price: parseFloat(pkg.price)
                    });
                }
            });

            allOrders = allOrders.filter(o => o.menuId !== currentMenu.id);
            allOrders.push(...newItems);

            renderSummary();
            updateMenuCard(currentMenu.id);

            bootstrap.Modal.getInstance(document.getElementById('menuPopupModal'))?.hide();
        }

		// ─── Summary / card helpers ───────────────────────────────────────────────

		function updateMenuCard(menuId) {
			const items    = allOrders.filter(o => o.menuId === menuId);
			const summDiv  = document.getElementById('menuSummary_' + menuId);
			const btnLabel = document.getElementById('menuBtnLabel_' + menuId);
			const card     = document.querySelector(`[data-menu-id="${menuId}"]`);

			if (items.length === 0) {
				summDiv.classList.add('d-none');
				summDiv.innerHTML = '';
				btnLabel.textContent = 'Pilih Paket';
				card?.classList.remove('border-accent');
				return;
			}

			summDiv.classList.remove('d-none');
			summDiv.innerHTML = items.map(it =>
				`<div class="d-flex justify-content-between">
					<span class="text-muted">${it.pkgName}</span>
					<span class="fw-bold badge badge-light-accent">${it.qty}x</span>
				</div>`
			).join('');
			btnLabel.textContent = 'Ubah Pilihan';
			card?.classList.add('border-accent');
		}

		function renderSummary() {
			const container = document.getElementById('summaryItems');
			const emptyEl   = document.getElementById('summaryEmpty');

			if (allOrders.length === 0) {
				container.innerHTML = '';
				emptyEl.classList.remove('d-none');
				container.appendChild(emptyEl);
				document.getElementById('summarySubtotal').textContent = 'Rp 0';
				return;
			}

			emptyEl.classList.add('d-none');
			let subtotal = 0;
			container.innerHTML = '';

			allOrders.forEach(item => {
				const total = item.qty * item.price;
				subtotal += total;
				const row = document.createElement('div');
				row.className = 'd-flex justify-content-between align-items-start gap-3 border-bottom pb-3';
				row.innerHTML = `
					<div class="flex-grow-1 min-w-0">
						<div class="fw-bold fs-7">${item.menuName}</div>
						<div class="text-muted fs-8">${item.qty}x ${item.pkgName}</div>
					</div>
					<div class="flex-shrink-0 text-end">
						<div class="fw-bold fs-7">Rp ${fmt(total)}</div>
						<button type="button" class="btn btn-xs btn-link text-danger p-0 fs-8"
							onclick="removeOrder('${item.menuId}','${item.pkgId}')">Hapus</button>
					</div>`;
				container.appendChild(row);
			});
			container.appendChild(emptyEl);

			document.getElementById('summarySubtotal').textContent = 'Rp ' + fmt(subtotal);
		}

		function removeOrder(menuId, pkgId) {
			allOrders = allOrders.filter(o => !(o.menuId === menuId && o.pkgId === pkgId));
			renderSummary();
			updateMenuCard(menuId);
		}

		function updateSummaryCustomer() {
			const fn = document.getElementById('inputFirstName').value.trim();
			const ln = document.getElementById('inputLastName').value.trim();
			document.getElementById('summaryCustomer').textContent = (fn || ln) ? `${fn} ${ln}`.trim() : '—';
		}

		['inputFirstName', 'inputLastName'].forEach(id => {
			document.getElementById(id)?.addEventListener('input', updateSummaryCustomer);
		});

		// ─── Submit ───────────────────────────────────────────────────────────────

		function submitOrder() {
			if (allOrders.length === 0) {
				alert('Silakan pilih minimal satu menu terlebih dahulu.');
				return;
			}

			const deliveryAt    = document.getElementById('inputDeliveryAt').value;
			const firstName     = document.getElementById('inputFirstName').value.trim();
			const phone         = document.getElementById('inputPhone').value.trim();
			const email         = document.getElementById('inputEmail').value.trim();
			const orderNote     = document.getElementById('inputNote').value.trim();

			// ── Required field validation ──────────────────────────────────────────
			if (!deliveryAt) { alert('Silakan pilih tanggal pengiriman.');   return; }
			if (!firstName)  { alert('Nama depan pelanggan wajib diisi.');   return; }
			if (!phone)      { alert('No. WhatsApp pelanggan wajib diisi.'); return; }

			// Only validate new-address fields when no saved address is selected
			let deliveryInfo;
			if (selectedSavedAddressId) {
				deliveryInfo = {
					delivery_at:      deliveryAt,
					user_address_id:  selectedSavedAddressId,
					new_user_address: null,
				};
			} else {
				const fullname      = document.getElementById('inputFullname').value.trim();
				const addressPhone  = document.getElementById('inputAddressPhone').value.trim();
				const addrLabel     = document.getElementById('inputAddressLabel').value.trim();
				const address       = document.getElementById('inputAddress').value.trim();
				const addrNote      = document.getElementById('inputAddressNote').value.trim();
				const longitude     = document.getElementById('inputLongitude').value.trim();
				const latitude      = document.getElementById('inputLatitude').value.trim();
				const saveToProfile = document.getElementById('inputSaveToProfile').checked;

				if (!fullname)     { alert('Nama penerima wajib diisi.');     return; }
				if (!addressPhone) { alert('No. HP penerima wajib diisi.');   return; }
				if (!addrLabel)    { alert('Label alamat wajib diisi.');      return; }
				if (!address)      { alert('Alamat lengkap wajib diisi.');    return; }
				if (!addrNote)     { alert('Catatan alamat wajib diisi.');    return; }
				if (!longitude)    { alert('Longitude wajib diisi.');         return; }
				if (!latitude)     { alert('Latitude wajib diisi.');          return; }

				deliveryInfo = {
					delivery_at:      deliveryAt,
					user_address_id:  null,
					new_user_address: {
						fullname:        fullname,
						phone:           '62' + addressPhone,
						label:           addrLabel,
						address:         address,
						note:            addrNote,
						longitude:       longitude,
						latitude:        latitude,
						save_to_profile: saveToProfile,
					},
				};
			}

			// ── Build items ────────────────────────────────────────────────────────
			const itemsMap = {};
			allOrders.forEach(o => {
				if (!itemsMap[o.menuId]) itemsMap[o.menuId] = { id: o.menuId, packages: [] };
				itemsMap[o.menuId].packages.push({ id: o.pkgId, quantity: o.qty, note: o.note });
			});

			// ── Assemble final payload ─────────────────────────────────────────────
			const isDefaultUser = document.getElementById('selectUser')
				?.options[document.getElementById('selectUser').selectedIndex]
				?.dataset.isdefault === '1';

			const lastName = document.getElementById('inputLastName').value.trim();

			const payload = {
				transaction_info: {
					shipping_cost: 0,
					is_success:    false,
					is_created:    false,
					created_at:    null,
					payment_type:  'transfer',
					note:          orderNote,
				},
				items: Object.values(itemsMap),
				user_info: {
					// For default (walk-in) customers, send null so backend doesn't
					// resolve the name from the account — use the typed fields instead.
					user_id:       selectedUserId, // always send the UUID; backend requires it even for the default (walk-in) user
					first_name:    firstName,
					last_name:     lastName || null,
					phone:         '62' + phone,
					contact_email: email || null,
				},
				delivery_info: deliveryInfo,
			};

			document.getElementById('checkoutPayload').value = JSON.stringify(payload);
			document.getElementById('createOrderForm').submit();
		}

		// ─── Leaflet map ──────────────────────────────────────────────────────────

		let deliveryMap    = null;
		let deliveryMarker = null;

		function initDeliveryMap() {
			if (deliveryMap) return; // already initialised
			const defaultLat = -6.2088;
			const defaultLng = 106.8456;

			deliveryMap = L.map('deliveryMap').setView([defaultLat, defaultLng], 13);

			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
				maxZoom: 19,
			}).addTo(deliveryMap);

			deliveryMarker = L.marker([defaultLat, defaultLng], { draggable: true }).addTo(deliveryMap);

			function onPinMoved(latlng) {
				const lat = latlng.lat.toFixed(7);
				const lng = latlng.lng.toFixed(7);
				document.getElementById('inputLatitude').value  = lat;
				document.getElementById('inputLongitude').value = lng;
				document.getElementById('displayLatitude').textContent  = lat;
				document.getElementById('displayLongitude').textContent = lng;
			}

			// Drag the marker
			deliveryMarker.on('dragend', (e) => onPinMoved(e.target.getLatLng()));

			// Click anywhere on map to move pin
			deliveryMap.on('click', (e) => {
				deliveryMarker.setLatLng(e.latlng);
				onPinMoved(e.latlng);
			});
		}

		// ─── Initialize on page load ──────────────────────────────────────────────

		window.addEventListener('DOMContentLoaded', () => {
			const sel = document.getElementById('selectUser');
			if (sel) onUserSelect(sel);
			initDeliveryMap();
		});

		</script>
		@endif

		@if(session()->has('response'))
		<script>
			alert('{{ session()->get('response')['message'] }}');
			console.log(@json(session()->get('response')));
		</script>
		@endif

	</body>
	<!--end::Body-->
</html>