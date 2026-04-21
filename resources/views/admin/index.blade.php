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

@dd($response)

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
									Dashboard
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
													<a href="{{ route('admin.categories') }}" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<img src="{{ asset('icons/menu.svg') }}" alt="">
													</a>
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
														<img class="mw-100 mh-200px" alt="image" src="{{asset('assets/media/illustrations/sketchy-1/5.png')}}" />
													</div>
													<!--end::Illustration-->
												</div>
												<!--end::Empty State-->
												<!--begin::View more-->
												<div class="py-3 text-center border-top">
													<a href="{{ route('admin.accounts') }}" class="btn btn-color-gray-600 btn-active-color-primary">Lihat Semua
													<i class="ki-duotone ki-arrow-right fs-5">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													</a>
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
					
				@include('components.sidebar', ["page" => "dash"])

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">

						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3">
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
										<li class="breadcrumb-item text-muted">Dashboard</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->

								</div>
								<!--end::Title & Breadcrumb-->

								<!--begin::Action group-->
								<div class="d-flex align-items-center ms-auto">
									
									<!--begin::Action wrapper-->
									<form action="{{ route('admin.export-orders') }}" method="post" class="d-flex align-items-center">
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
						
						<div class="d-flex w-100 h-100 flex-column flex-shrink-0 p-5">

							<div class="row g-5 g-xl-8">
	
								<div class="col-xl-3">
									<!--begin::Statistics Widget 5-->
									<a href="{{route('admin.orders')}}" class="card bg-body hoverable card-xl-stretch mb-xl-8">
										<!--begin::Body-->
										<div class="card-body">
											<img src="{{ asset('icons/document.svg') }}" alt="">
											<div class="text-default fw-bold fs-2 mb-2 mt-5">{{ $response['data']['transaction_summary']['total'] }}</div>
											<div class="fw-semibold text-default">Total Pesanan</div>
										</div>
										<!--end::Body-->
									</a>
									<!--end::Statistics Widget 5-->
								</div>
								<div class="col-xl-3">
									<!--begin::Statistics Widget 5-->
									<a href="{{route('admin.orders')}}" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
										<!--begin::Body-->
										<div class="card-body bg-light-accent rounded-2">
											<img src="{{ asset('icons/clock-filled.svg') }}" alt="" class="img-accent">
											<div class="text-default fw-bold fs-2 mb-2 mt-5">{{ $response['data']['transaction_summary']['waiting_for_confirmation_payment_proof'] }}</div>
											<div class="fw-semibold text-default">Waiting Confirmation</div>
										</div>
										<!--end::Body-->
									</a>
									<!--end::Statistics Widget 5-->
								</div>
								<div class="col-xl-3">
									<!--begin::Statistics Widget 5-->
									<a href="{{route('admin.orders')}}" class="card hoverable card-xl-stretch mb-xl-8">
										<!--begin::Body-->
										<div class="card-body bg-light-blue rounded-2">
											<img src="{{ asset('icons/food.svg') }}" alt="" class="img-blue">
											<div class="text-default fw-bold fs-2 mb-2 mt-5">{{ $response['data']['transaction_summary']['process'] }}</div>
											<div class="fw-semibold text-default">Proses</div>
										</div>
										<!--end::Body-->
									</a>
									<!--end::Statistics Widget 5-->
								</div>
								<div class="col-xl-3">
									<!--begin::Statistics Widget 5-->
									<a href="{{route('admin.orders')}}" class="card hoverable card-xl-stretch mb-5 mb-xl-8">
										<!--begin::Body-->
										<div class="card-body bg-light-green rounded-2">
											<img src="{{ asset('icons/check-circle.svg') }}" alt="" class="img-green">
											<div class="text-default fw-bold fs-2 mb-2 mt-5">{{ $response['data']['transaction_summary']['delivered'] }}</div>
											<div class="fw-semibold text-default">Delivered</div>
										</div>
										<!--end::Body-->
									</a>
									<!--end::Statistics Widget 5-->
								</div>
							</div>

							<div class="d-flex w-100 h-400px rounded-2 bg-white flex-column">

								<div class="d-flex w-100 flex-shrink-0">
								
									<!--begin::Charts Widget 2-->
									<div class="card card-xl-stretch mb-5 mb-xl-8 w-100">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
												<span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
											</h3>
											<!--begin::Toolbar-->
											<div class="card-toolbar" data-kt-buttons="true">
												<a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1" id="kt_charts_widget_2_year_btn">Year</a>
												<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_2_month_btn">Month</a>
												<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4" id="kt_charts_widget_2_week_btn">Week</a>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Chart-->
											<div id="kt_charts_widget_2_chart" style="height: 350px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Charts Widget 2-->

								</div>

								<div class="d-flex w-100 h-100 bg-primary-subtle"></div>


							</div>

						</div>


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

		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>

		<script>
			"use strict";

			let exportButton;

			function initCustomDatatable(tableId, columns, columnDefs, dataSource) {

				const tableElement = document.querySelector(tableId);
				if (!tableElement) return;

				const datatable = $(tableElement).DataTable({
					data: dataSource,
					info: true,
					order: [],
					pageLength: 5,
					lengthMenu: [
						[5, 10, 25, 50, 100],
						[5, 10, 25, 50, 100]
					],
					language: {
						lengthMenu: "_MENU_",
						info: "Showing _START_ to _END_ of _TOTAL_ entries",
						infoEmpty: "No entries available",
						infoFiltered: "(filtered from _MAX_ total entries)"
					},
					columns: columns,
					columnDefs: columnDefs,
					drawCallback: function () {
						KTMenu.createInstances();
					}
				});

				// ==========================
				// Checkbox Logic (Scoped)
				// ==========================

				const table = $(tableElement);

				// AUTO FOCUS SEARCH (tambahan)
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
							exportOptions: {
								// columns: ':not(:last-child)'
								columns: [0,1,2,3,4,5,6,8]
							}
						}]
					});
				}

				table.button(0).trigger();
			}

			KTUtil.onDOMContentLoaded(function () {

				const data1 = [
					{
						idMenu: "MN-072025-0001",
						tema: "Chinese",
						kategori: "Ayam",
						namaMenu: "Fuyunghai Ayam",
						sayuran: "Cah Jamur",
						sideDish: "Tahu Cabe Garam",
						sambal: "Chili Oil",
						gambar: "Foto",
						status: 1,
					},
					{
						idMenu: "MN-072025-0002",
						tema: "Rusia",
						kategori: "Ayam",
						namaMenu: "Fuyunghai Ayam",
						sayuran: "Cah Jamur",
						sideDish: "Tahu Cabe Garam",
						sambal: "Chili Oil",
						gambar: "Foto",
						status: 1,
					},
				];
				const columns1 = [
					{ data: "idMenu" },
					{ data: "tema" },
					{ data: "kategori" },
					{ data: "namaMenu" },
					{ data: "sayuran" },
					{ data: "sideDish" },
					{ data: "sambal" },
					{ data: "gambar" },
					{ data: "status",
						render: function (data) {
							if (data === 1) {
								return `<div class="badge badge-success">Active</div>`;
							} else {
								return `<div class="badge badge-secondary">Non Active</div>`;
							}
						}
					},
					{ data: null, 
					  orderable: false, 
					  className: 'text-end',
						render: function () {
							return `<button
										class="btn btn-secondary btn-active-light-primary btn-sm" 
										data-kt-menu-trigger="click"
										data-kt-menu-placement="bottom-end" 
										data-kt-menu-flip="top-end">
										Aksi
										<i class="bi bi-chevron-down fs-8 ms-1"></i>
									</button>
									<!--begin::Menu-->
									<div
										class="menu menu-primary menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg menu-state-color fw-bold fs-7 min-w-125px w-auto py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">
												Lihat Detail
											</a>
										</div>
										<!--end::Menu item-->
										
										<div class="separator my-2"></div>
										
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link menu-link-delete px-3">
												Hapus
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->`;
						}
					}
				];
				const columnDefs1 = [];

				initCustomDatatable('#kt_datatable_example', columns1, columnDefs1, data1);

				// handle export excel
				document.getElementById('btnExportExcel')?.addEventListener('click', function () {
					exportDatatableToExcel('#kt_datatable_example', 'Daftar Menu');
				});

				// handle Search Datatable
				document.querySelectorAll('[data-kt-filter="search"]').forEach(function (searchInput) {

					const tableSelector = searchInput.getAttribute('data-table-target');
					if (!tableSelector) return;

					const table = document.querySelector(tableSelector);
					if (!table) return;

					const datatable = $(table).DataTable();

					searchInput.addEventListener('keyup', function () {
						datatable.search(this.value).draw();
					});

				});
			});
		</script>
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>