

@php
    $data = $response['data'];
    $themes = $data['themes'];
    $categories = $data['categories'];
    $packages = $data['packages'];
@endphp

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
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->

						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="index.html" class="d-lg-none">
								<img alt="Logo" src="assets/media/logos/Logo-Primer.svg" class="h-35px" />
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
									Menu
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
											<!--begin::Tabs-->
											<div class="hover-scroll-x">
												<div class="d-grid">
													<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9  flex-nowrap text-nowrap">
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab"
																href="#kt_topbar_notifications_1">Approval (99+)</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
																href="#kt_topbar_notifications_2">PICA (0)</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
																href="#kt_topbar_notifications_3">PICA Verification (5)</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Tabs-->
										</div>
										<!--end::Heading-->

										<!--begin::Tab content-->
										<div class="tab-content">









											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y h-325px my-5 px-4">
													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-search fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Inspeksi K3L</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for approval</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-shield-plus fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Pengelolaan Kecelakaan Kerja Pengelolaan Kecelakaan Kerja</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-exclamation-triangle fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Risk Containment Audit</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Ask for revision</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for approval</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->

											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Empty State-->
												<div class="d-flex flex-column px-9 my-5 h-325px">
													<!--begin::Section-->
													<div class="pt-10 pb-0">
														<!--begin::Title-->
														<h3 class="text-gray-900 text-center fw-bold">Belum ada pemberitahuan saat ini!</h3>
														<!--end::Title-->
														<!--begin::Text-->
														<div class="text-center text-gray-600 fw-semibold pt-1">Anda sudah mendapatkan informasi terbaru!</div>
														<!--end::Text-->
													</div>
													<!--end::Section-->
													<!--begin::Illustration-->
													<div class="text-center px-4">
														<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/5.png" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Empty State-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->

											<!--begin::Tab panel-->
											<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y h-325px my-5 px-4">
													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-search fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Inspeksi K3L</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-shield-plus fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Pengelolaan Kecelakaan Kerja Pengelolaan Kecelakaan Kerja</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-exclamation-triangle fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Risk Containment Audit</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->

													<!--begin::Item-->
													<a href="#" class="d-flex flex-stack rounded-2 p-4 text-gray-800 text-hover-primary bg-hover-gray-100">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-35px me-4">
																<span class="symbol-label bg-light-primary">
																	<i class="bi bi-journal-medical fs-2"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="mb-0 me-2 d-flex flex-column mw-150px mw-lg-200px">
																<span href="#" class="fs-6 fw-bold text-elipsis">Golden Rules HSE</span>
																<div class="text-gray-600 fs-7">HO-INS-122025-0002</div>
																<div class="text-gray-600 fs-7">Waiting for verification</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">16 Mar 26</span>
														<!--end::Label-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Tab panel-->











										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Notifications-->

								<!--begin::Theme mode-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu toggle-->
									<div
										class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" 
										data-kt-menu-trigger="click" 
										data-kt-menu-attach="parent" 
										data-kt-menu-placement="bottom-end">
										<i class="bi bi-sun-fill theme-light-show fs-3"></i>
										<i class="bi bi-moon-fill theme-dark-show fs-4"></i>
								</div>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-sun-fill fs-3"></i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-moon-fill fs-4"></i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="bi bi-pc-display fs-4"></i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
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
					@include('components.sidebar', ["page" => "menu"])
					<!--end::Sidebar-->

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">





							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar  py-3">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">

									<!--begin::Title-->
									<div 
										data-kt-swapper="true" 
										data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
										data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
										class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
							
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="{{ route('admin.dashboard') }}" class="">Home</a>
											</li>
											<!--end::Item-->

											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
							
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Kelola Menu</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->

									</div>
									<!--end::Title-->
							
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->


							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<form action="{{ route('admin.add-menu') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<!--begin::Row Breadcrumb for Mobile View-->
										<div class="row mb-5 mb-xl-10 d-md-none">
											<div class="col-12">

												<!--begin::Breadcrumb-->
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-md-none">
													<!--begin::Item-->
													<li class="breadcrumb-item text-muted">
														<a href="{{ route('admin.dashboard') }}" class="">Home</a>
													</li>
													<!--end::Item-->

													<!--begin::Item-->
													<li class="breadcrumb-item">
														<span class="bullet bg-gray-500 w-5px h-2px"></span>
													</li>
													<!--end::Item-->
									
													<!--begin::Item-->
													<li class="breadcrumb-item text-muted">Kelola Menu</li>
													<!--end::Item-->
												</ul>
												<!--end::Breadcrumb-->

											</div>
										</div>
										<!--begin::Row Breadcrumb for Mobile View-->

										<!--begin::Row-->
										<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
											<!--begin::Col-->
											<div class="col-md-12">
												<div class="d-flex flex-stack flex-wrap">
													<h3 class="m-md-0">Buat Menu</h3>
													<a href="{{ route('admin.menus') }}" class="btn btn-light-primary">
														<i class="bi bi-table fs-4"></i>
														Daftar Menu
													</a>
												</div>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-md-4">
												<!--begin::Gambar Menu-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Gambar Menu</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->

													<!--begin::Card body-->
													<div class="card-body text-center pt-0">
														<!--begin::Image input-->
														<!--begin::Image input placeholder-->
														<style>
															.image-input-placeholder {
																background-image: url('{{asset('assets/media/svg/files/blank-image.svg')}}');
															}

															[data-bs-theme="dark"] .image-input-placeholder {
																background-image: url('{{asset('assets/media/svg/files/blank-image-dark.svg')}}');
															}
														</style>
														<!--end::Image input placeholder-->

														<!--begin::Image input-->
														<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
															data-kt-image-input="true">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-150px h-150px"></div>
															<!--end::Preview existing avatar-->

															<!--begin::Label-->
															<label
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="change" data-bs-toggle="tooltip"
																aria-label="Change avatar"
																data-bs-original-title="Change avatar"
																data-kt-initialized="1">
																<!--begin::Icon-->
                                                                <img src="{{ asset('icons/edit.svg') }}" alt="" class="h-50">
																<!--end::Icon-->

																<!--begin::Inputs-->
																<input type="file" name="image" accept=".png, .jpg, .jpeg">
																<input type="hidden" name="avatar_remove">
																<!--end::Inputs-->
															</label>
															<!--end::Label-->

															<!--begin::Cancel-->
															<span
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
																aria-label="Cancel avatar"
																data-bs-original-title="Cancel avatar"
																data-kt-initialized="1">
                                                                <img src="{{ asset('icons/close.svg') }}" alt="" class="h-75">
															</span>
															<!--end::Cancel-->

															<!--begin::Remove-->
															<span
																class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
																data-kt-image-input-action="remove" data-bs-toggle="tooltip"
																aria-label="Remove avatar"
																data-bs-original-title="Remove avatar"
																data-kt-initialized="1">
                                                                <img src="{{ asset('icons/close.svg') }}" alt="" class="h-100">
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->

														<!--begin::Description-->
														<div class="text-muted fs-7">Set the category thumbnail image. Only
															*.png, *.jpg and *.jpeg image files are accepted</div>
														<!--end::Description-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Gambar Menu-->

												<!--begin::Detail Menu-->
												<div class="card card-flush py-4 mb-5 mb-xl-10">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Detail Menu</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label">Kategori</label>
															<div class="p-2 border rounded overflow-scroll d-flex flex-column gap-4" style="max-height: 150px;">
                                                                @foreach($categories as $cat)
                                                                    <div class="form-check d-flex gap-3">
                                                                        <input class="form-check-input bg-danger border-danger " type="checkbox" name="category_ids[]" value="{{ $cat['id'] }}" id="cat_{{ $cat['id'] }}" 
                                                                            {{ in_array($cat['id'], old('category_ids[]') ?? []) ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="cat_{{ $cat['id'] }}">
                                                                            {{ $cat['name'] }}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-0">
															<label class="form-label">Tema</label>
															<select class="form-select" aria-label="Tema" aria-placeholder="Tema" id="theme_id" name="theme_id">
																<option value="">Pilih Menu</option>
                                                                 @foreach($themes as $theme)
                                                                    <option value="{{ $theme['id'] }}" {{  (old('theme_id', '') ) == $theme['id'] ? 'selected' : '' }}>
                                                                        {{ $theme['name'] }}
                                                                    </option>
                                                                @endforeach
															</select>
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Detail Menu-->

												<!--begin::Status-->
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Status Menu</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<div class="rounded-circle bg-success w-15px h-15px" id="kt_status_menu"></div>
														</div>
														<!--begin::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-0">
															<div class="form-check form-switch mb-0">
                                                                <input class="form-check-input bg-danger border-danger" type="checkbox" role="switch" id="is_active" name="is_active" {{ old('status_active', 'active') === 'active' ? 'checked' : '' }}
                                                                    onchange="handler_status_active(this)"
                                                                >
                                                                <input type="hidden" name="status_active" id="status_active" value="{{ old('status_active') ? old('status_active') : 'active' }}">
                                                            </div>
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Status-->
											</div>
											<!--end::Col-->

											<!--begin::Col-->
											<div class="col-md-8">
												<div class="card card-flush py-4">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Detail</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->

													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Nama Menu</label>
															<div class="input-group">
																<input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
															</div>
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Sayuran</label>
															<div class="input-group">
																<input type="text" name="vegetable" value="{{ old('vegetable') }}" class="form-control" required />
															</div>
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Lauk Pendamping</label>
															<div class="input-group">
																<input type="text" name="side_dish" value="{{ old('side_dish') }}" class="form-control" required />
															</div>
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Sambal</label>
															<div class="input-group">
																<input type="text" name="sauce" value="{{ old('sauce') }}" class="form-control" required />
															</div>
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label">Buah Buahan</label>
															<div class="input-group">
																<input type="text" name="fruit" value="{{ old('fruit') }}" class="form-control" />
															</div>
														</div>
														<!--end::Input group-->

														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Deskripsi</label>
															<div class="input-group">
																<textarea class="form-control" rows="4" name="description" minlength="10" required>{{ old('description') }}</textarea>
															</div>
														</div>
														<!--end::Input group-->

                                                        @foreach ($packages as $index=>$package)
														<!--begin::Input group-->
														<div class="mb-5 mb-xl-10">
															<label class="form-label required">Harga {{ $package['name'] }}</label>
															<div class="input-group">
                                                                <input type="hidden" class="form-control form-control-sm" name="packages[{{ $index }}][package_id]" value="{{ $package['id'] }}">
																<input type="number" class="form-control rounded-2" name="packages[{{ $index }}][price]" value="{{ old("packages[$index][price]") }} required" minlength="0" />
															</div>
														</div>
														<!--end::Input group-->
                                                        @endforeach

													</div>
													<!--end::Card body-->
												</div>
											</div>
											<!--end::Col-->

											<!--begin::Col-->
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
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</form>
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->




							
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2025&copy;</span>
									<span class="text-gray-800">Homade Kreatif Teknologi</span>
								</div>
								<!--end::Copyright-->
							</div>
							<!--end::Footer container-->
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

		<!--begin::Drawers-->
		<!--end::Drawers-->

		<!--begin::Modals-->

			<!--begin::Gambar Alat-->
			<div class="modal fade" tabindex="-1" id="kt_modal_1">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Gambar Alat</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-12 text-center">
									<img src="assets/media/img/alat/Road-Roller.jpg" alt="" class="h-400px">
								</div>
								<div class="col-12">
									<h3 class="text-gray-800">
										Jenis:
										<span class="fw-medium">Road Roller</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Gambar Alat-->

			<!--begin::Tambah Operator-->
			<div class="modal fade" tabindex="-1" id="kt_modal_2" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Tambah Operator</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Nama</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Klik Cari" value="" required readonly />
										<button class="input-group-text text-hover-primary" id="basic-addon2" data-bs-stacked-modal="#cari_pengguna">
											Cari
										</button>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">NIK</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">No. SIO</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Masa Berlaku</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Jabatan</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Vendor</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Tambah Operator-->

			<!--begin::Tambah Inspector-->
			<div class="modal fade" tabindex="-1" id="kt_modal_3" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Tambah Inspector</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Nama</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Klik Cari" value="" required readonly />
										<button class="input-group-text text-hover-primary" id="basic-addon2" data-bs-stacked-modal="#cari_pengguna">
											Cari
										</button>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">NIK</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">No. SIO</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Masa Berlaku</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Jabatan</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Vendor</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
									</div>
									<!--end::Input group-->
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Tambah Inspector-->

			<!--begin::Tambah Daftar Checklist 1-->
			<div class="modal fade" tabindex="-1" id="kt_modal_4" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Tambah Daftar Checklist 1</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Pertanyaan</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Status</label>
									<div class="d-flex justify-content-between">
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="status_type" value="1" id="status_type_1" />
											<label class="form-check-label ms-3" for="status_type_1">
												Ya
											</label>
										</div>
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="status_type" value="2" id="status_type_2" />
											<label class="form-check-label ms-3" for="status_type_2">
												Tidak
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="status_type" value="3" id="status_type_3" />
											<label class="form-check-label ms-3" for="status_type_3">
												N/A
											</label>
										</div>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Keterangan</label>
									<div class="input-group">
										<textarea class="form-control" value="" required/></textarea>
									</div>
									<!--end::Input group-->
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Tambah Daftar Checklist 1-->

			<!--begin::Tambah Daftar Checklist 2-->
			<div class="modal fade" tabindex="-1" id="kt_modal_5" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Tambah Daftar Checklist 2</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">No. Bagian</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Bagian</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required />
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Keterangan Bagian</label>
									<div class="input-group">
										<textarea class="form-control" value="" /></textarea>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Kondisi</label>
									<div class="d-flex justify-content-between">
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="kondisi_type" value="1" id="kondisi_type_1" />
											<label class="form-check-label ms-3" for="kondisi_type_1">
												Baik
											</label>
										</div>
										<div class="form-check me-3">
											<input class="form-check-input" type="radio" name="kondisi_type" value="2" id="kondisi_type_2" />
											<label class="form-check-label ms-3" for="kondisi_type_2">
												Rusak
											</label>
										</div>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Rencana Perbaikan</label>
									<div class="input-group">
										<textarea class="form-control" value="" /></textarea>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Keterangan</label>
									<div class="input-group">
										<textarea class="form-control" value="" /></textarea>
									</div>
									<!--end::Input group-->
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Tambah Daftar Checklist 2-->

			<!--begin::Tambah Tindakan Perbaikan-->
			<div class="modal fade" tabindex="-1" id="kt_modal_6" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Tambah Tindakan Perbaikan</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">No. Bagian</label>
									<select class="form-select" data-control="select2" data-placeholder="Select an option">
										<option></option>
										<option value="1">1</option>
										<option value="2">2</option>
									</select>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Tenggat Waktu</label>
									<div class="input-group">
										<input type="text" class="form-control" required />
										<span class="input-group-text">
											<i class="bi bi-calendar3 fs-1"></i>
										</span>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Realisasi Perbaikan</label>
									<div class="input-group">
										<textarea class="form-control" value="" /></textarea>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Keterangan</label>
									<div class="input-group">
										<textarea class="form-control" value="" /></textarea>
									</div>
									<!--end::Input group-->
								</div>
								<div class="col-md-6">
									<!--begin::Input group-->
									<label class="form-label required">Penanggung Jawab</label>
									<div class="input-group">
										<input type="text" class="form-control" value="" required readonly />
										<button class="input-group-text text-hover-primary" id="basic-addon2" data-bs-stacked-modal="#cari_pengguna">
											Cari
										</button>
									</div>
									<!--end::Input group-->
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Tambah Tindakan Perbaikan-->

			<!--begin::Cari Pengguna-->
			<div class="modal fade" tabindex="-1" id="cari_pengguna" data-bs-backdrop="static">
				<div class="modal-dialog mw-900px">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Cari Pengguna 1</h3>
			
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
								<i class="bi bi-x fs-1"></i>
							</div>
							<!--end::Close-->
						</div>
			
						<div class="modal-body py-5 px-10">
							<div class="row g-5 g-md-10">
								<div class="col-12">
									<!--begin::Input group-->
									<label class="form-label required">Vendor</label>
									<div class="row g-5 g-md-10">
										<!-- Karyawan -->
										<div class="col-6">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="vendor_type" value="karyawan" id="vendor_karyawan" checked />
												<label class="form-check-label ms-3" for="vendor_karyawan">
													Karyawan
												</label>
											</div>
										</div>
									
										<!-- Kontraktor -->
										<div class="col-6">
											<div class="form-check">
												<input class="form-check-input" type="radio" name="vendor_type" value="kontraktor" id="vendor_kontraktor" />
												<label class="form-check-label ms-3" for="vendor_kontraktor">
													Kontraktor
												</label>
											</div>
										</div>
									</div>
									<!--end::Input group-->
								</div>

								<div class="col-12">
									<div class="d-flex flex-stack flex-wrap mb-5">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<input type="text" data-kt-filter="search" data-table-target="#kt_datatable_pengguna" class="form-control w-250px" placeholder="Cari" autofocus="true" />
										</div>
										<!--end::Search-->
									</div>

									<table class="table align-middle border rounded table-striped table-row-dashed fs-6 g-5 gs-5" id="kt_datatable_pengguna">
										<thead>
											<tr class="text-start text-gray-800 fw-bold fs-7 text-uppercase">
												<th class="min-w-100px">NIK</th>
												<th class="min-w-100px">Nama</th>
												<th class="min-w-100px">Departemen</th>
												<th class="min-w-100px">Jabatan</th>
												<th class="text-end min-w-100px pe-5">Aksi</th>
											</tr>
										</thead>
										<tbody class="text-gray-700"></tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">Batal</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Cari Pengguna-->
		<!--end::Modals-->


		
		<script>var hostUrl = "assets/";</script>

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/custom/jstree/jstree.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->

		<!--begin::Custom Javascript(used for this page only)-->
		<script>
			"use strict";

			KTUtil.onDOMContentLoaded(function () {
				const selectStatus = document.querySelector('select[aria-label="status-menu"]');
				const indicator = document.getElementById('kt_status_menu');

				function updateStatusIndicator() {
					const value = selectStatus.value;

					// reset class warna
					indicator.classList.remove('bg-success', 'bg-danger');

					if (value === "1") {
						indicator.classList.add('bg-success'); // Aktif → hijau
					} else {
						indicator.classList.add('bg-danger'); // Tidak Aktif → merah
					}
				}

				// saat berubah
				selectStatus.addEventListener('change', updateStatusIndicator);

				// trigger saat load (default value)
				updateStatusIndicator();
			});

		</script>
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>



@if (session()->has('response'))
<script>
    alert('{{ session()->get('response')['message'] }}');
    console.log(@json(session()->get('response')))
</script>
@endif


<script defer>
    function handler_status_active(e) {
        document.getElementById('status_active').value = e.checked? 'active' : 'non-active';
        document.getElementById('kt_status_menu').classList.add(e.checked? 'bg-success' : 'bg-danger')
        document.getElementById('kt_status_menu').classList.remove(e.checked? 'bg-danger' : 'bg-success')
    }

    function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('img[alt="tambahkan gambar menu"]').src = e.target.result;
            document.getElementById('img-warning').classList.add('d-none');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
