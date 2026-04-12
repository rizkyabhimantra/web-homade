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
									Tema
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
																<span href="#" class="fs-6 fw-bold text-elipsis">Kelola Menu</span>
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
					
				@include('components.sidebar', ["page" => "theme"])

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">





							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar  py-3">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack ">

									<!--begin::Title & Breadcrumb-->
									<div 
										data-kt-swapper="true" 
										data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
										data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}"
										class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
							
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-none d-md-flex">
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<a href="{{ route('admin.dashboard') }}" class="">Dashboard</a>
											</li>
											<!--end::Item-->

											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
							
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Kelola Tema</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->

									</div>
									<!--end::Title & Breadcrumb-->

									<!--begin::Action group-->
									<div class="d-flex align-items-center ms-auto">
										
										<!--begin::Action wrapper-->
										<form method="post" action="{{ route('admin.export-themes') }}" class="d-flex align-items-center">
											@csrf
											<button id="btnExportExcel" class="btn btn-sm btn-light-primary">
												<i class="bi bi-file-earmark-spreadsheet fs-4"></i>
												Export (Excel)
											</button>
										</form>
										<!--end::Action wrapper-->

										<!--begin::Action wrapper-->
										<div class="d-flex align-items-center">
											<!--begin::Separartor-->
											<div class="bullet bg-secondary h-35px w-1px mx-5"></div>
											<!--end::Separartor-->

											<button class="btn btn-sm btn-dark" id="kt_drawer_filter_global_button">
												<i class="bi bi-funnel fs-4"></i>
												Filter
											</button>
										</div>
										<!--end::Action wrapper-->

									</div>
									<!--end::Action group-->
							
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->


							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">

									<!--begin::Row Breadcrumb for Mobile View-->
									<div class="row mb-5 mb-xl-10 d-md-none">
										<div class="col-12">

											<!--begin::Breadcrumb-->
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 d-md-none">
												<!--begin::Item-->
												<li class="breadcrumb-item">
													<a href="{{ route('admin.dashboard') }}" class="">Dashboard</a>
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
										<div class="col-12">

											<!--begin::Card widget 7-->
											<div class="card">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Daftar Tema</span>
													</h3>
													<!--end::Title-->
												
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('admin.add-theme-page') }}" class="btn btn-primary">
															<i class="bi bi-plus-lg fs-4"></i>
															Buat Tema
														</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->

												<!--begin::Card body-->
												<div class="card-body">

													<div class="d-flex flex-stack flex-wrap mb-5">
														<!--begin::Search-->
														<div class="d-flex align-items-center position-relative my-1">
															<input type="text" data-kt-filter="search" data-table-target="#kt_datatable_example" class="form-control w-250px" placeholder="Cari" />
														</div>
														<!--end::Search-->

														<!--begin::Action-->
														<div class="d-flex align-items-center">
														</div>
														<!--end::Action-->
													</div>

													<div class="table-responsive">
														<table class="mb-4 table align-middle border rounded table-striped table-row-dashed fs-6 g-5 gs-5" id="kt_datatable_example">
															<thead>
																<tr class="text-start text-gray-800 fw-bold fs-7 text-capitalize">
																	<th class="min-w-200px">ID Tema</th>
																	<th class="min-w-100px">Nama Tema</th>
																	<th class="min-w-100px">Deskripsi</th>
																	<th class="min-w-100px">Status</th>
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
																	<div class="h-100 ratio-1 rounded-2 d-flex align-items-center text-black justify-content-center fw-bold cursor-default">
																		...
																	</div>
																@endif

																@for ($i = $start; $i <= $end; $i++)
																	<a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}" 
																	class="text-decoration-none h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold {{ $currentPage == $i ? 'bg-accent text-white' : 'text-dark' }}">
																		{{ $i }}
																	</a>
																@endfor

																@if($end < $lastPage - 1)
																	<div class="h-100 ratio-1 rounded-2 d-flex align-items-center justify-content-center fw-bold text-black cursor-default">
																		...
																	</div>
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
											<!--end::Card widget 7-->

										</div>
										<!--end::Col-->

										
									</div>
									<!--end::Row-->

								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->

							<!--begin::Drawer-->
							<div 
								id="kt_drawer_filter_global" 
								class="bg-white" 
								data-kt-drawer="true" 
								data-kt-drawer-activate="true"
								data-kt-drawer-toggle="#kt_drawer_filter_global_button" 
								data-kt-drawer-close="#kt_drawer_filter_global_close"
								data-kt-drawer-overlay="true" 
								data-kt-drawer-permanent="true" 
								data-kt-drawer-width="{default:'300px', 'md': '300px'}">
								<!--begin::Card-->
								<div class="card rounded-0 w-100">
									<form action="" class="d-flex flex-column h-100" onsubmit="return false;">
										<!--begin::Card header-->
										<div class="card-header pe-5">
											<!--begin::Title-->
											<div class="card-title">
												Filter
											</div>
											<!--end::Title-->
								
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Close-->
												<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_filter_global_close">
													<i class="bi bi-x-lg fs-1"></i>
												</div>
												<!--end::Close-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
								
										<!--begin::Card body-->
										<div class="card-body hover-scroll-overlay-y">
											<div class="row g-3 g-lg-6 mt-0">
												<div class="col-12">
													<label class="form-label">Status</label>
													<select class="form-select" name="status">
														<option value="all">Semua</option>
														<option value="active" selected>Aktif</option>
														<option value="deleted">Dihapus</option>
													</select>
												</div>
											</div>
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-between">
											<a href="{{ route('admin.themes') }}" type="reset" class="btn btn-sm btn-secondary">
												Atur Ulang
											</a>
											<button type="button" onclick="applyFilter()" class="btn btn-sm btn-dark">
												Terapkan
											</button>
										</div>
										<!--end::Card footer-->
									</form>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Drawer-->




							
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

@if ($response['status_code'] === 200)
		<!--begin::Custom Javascript(used for this page only)-->
		<script>
			const allData = @json($response['data']['themes']);

			"use strict";

			let exportButton;

			function initCustomDatatable(tableId, columns, columnDefs, dataSource) {
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
					pageLength: 8,
					lengthMenu: [[5, 8, 10, 25, 50], [5, 8, 10, 25, 50]],
					language: {
						lengthMenu: "",
						info: "",
						infoEmpty: "",
						infoFiltered: ""
					},
					columns: columns,
					columnDefs: columnDefs,
					drawCallback: function () {
						KTMenu.createInstances();
					}
				});

				setTimeout(() => {
					const searchInput = document.querySelector(`[data-kt-filter="search"][data-table-target="${tableId}"]`);
					searchInput?.focus();
				}, 100);
			}

			function exportDatatableToExcel(tableId, filename = 'Export Excel') {
				const table = $(tableId).DataTable();
				if (!exportButton) {
					exportButton = new $.fn.dataTable.Buttons(table, {
						buttons: [{
							extend: 'excelHtml5',
							title: filename,
							exportOptions: { columns: [0, 1, 2] }
						}]
					});
				}
				table.button(0).trigger();
			}

			function getFilteredData(status) {
				if (status === 'active')  return allData.filter(item => item.deleted_at === null);
				if (status === 'deleted') return allData.filter(item => item.deleted_at !== null);
				return allData;
			}

			const columns1 = [
				{ data: 'id' },
				{ data: 'name' },
				{ data: 'description' },
				{
					data: 'deleted_at',
					render: function (data) {
						return data === null
							? `<div class="badge badge-success">Active</div>`
							: `<div class="badge badge-secondary">Non Active</div>`;
					}
				},
				{
					data: null,
					orderable: false,
					className: 'text-end',
					render: function (row) {
						const detailUrl = "{{ route('admin.detail-theme', '_ID_') }}".replace('_ID_', row.id);
						const deleteUrl = "{{ route('admin.delete-theme', '_ID_') }}".replace('_ID_', row.id);
						
						return `
							<button
								class="btn btn-secondary btn-active-light-primary btn-sm"
								data-kt-menu-trigger="click"
								data-kt-menu-placement="bottom-end"
								data-kt-menu-flip="top-end">
								Aksi
								<i class="bi bi-chevron-down fs-8 ms-1"></i>
							</button>
							<div class="menu menu-primary menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-color fw-bold fs-7 min-w-125px w-auto py-4" data-kt-menu="true">
								<div class="menu-item px-3">
									<a href="${detailUrl}" class="menu-link px-3">Lihat Detail</a>
								</div>
								<div class="separator my-2"></div>
								<form action="${deleteUrl}" method="post" class="menu-item px-3">
									@csrf
									@method('delete')
									<button class="menu-link menu-link-delete px-3">Hapus</button>
								</form>
							</div>`;
					}
				}
			];

			KTUtil.onDOMContentLoaded(function () {

				initCustomDatatable('#kt_datatable_example', columns1, [], getFilteredData('active'));

				document.querySelector('#kt_drawer_filter_global form')?.addEventListener('submit', function (e) {
					e.preventDefault();
					const status = this.querySelector('[name="status"]').value;
					initCustomDatatable('#kt_datatable_example', columns1, [], getFilteredData(status));
				});

				document.querySelector('#kt_drawer_filter_global form')?.addEventListener('reset', function () {
					initCustomDatatable('#kt_datatable_example', columns1, [], getFilteredData('active'));
				});

				document.getElementById('btnExportExcel')?.addEventListener('click', function () {
					exportDatatableToExcel('#kt_datatable_example', 'Daftar Tema');
				});

				document.querySelectorAll('[data-kt-filter="search"]').forEach(function (searchInput) {
					const tableSelector = searchInput.getAttribute('data-table-target');
					if (!tableSelector) return;
					searchInput.addEventListener('keyup', function () {
						$(document.querySelector(tableSelector)).DataTable().search(this.value).draw();
					});
				});

			});
		</script>

		<script>
			function applyFilter() {
				const status = document.querySelector('[name="status"]')?.value || 'all';
				initCustomDatatable('#kt_datatable_example', columns1, [], getFilteredData(status));
			}
		</script>
		<!--end::Custom Javascript-->
@else
@endif
		
	</body>
	<!--end::Body-->
</html>