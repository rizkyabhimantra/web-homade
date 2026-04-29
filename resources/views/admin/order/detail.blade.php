@if (session()->has('response'))
<script>
	alert('{{ session()->get('response')['message']}}')
	console.log(@json( session()->get('response')))
</script>
@endif

@php

    $placeImg = "https://placehold.co/400";
    $state = 3

@endphp

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
									Detail Pemesanan
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
				<div class="app-wrapper flex-column flex-row-fluid overflow-hidden" id="kt_app_wrapper">
					
				    @include('components.sidebar', ["page" => "order"])

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
										<li class="breadcrumb-item text-muted">Detail Pesanan # {{ $response['data']['id'] }}</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->

								</div>
								<!--end::Title & Breadcrumb-->

								<!--begin::Action group-->
								<div class="d-flex align-items-center ms-auto">
									{{-- halo ini disuruh hapus sama radit, katanya export blm ada dan filternya jg gak ada - labubu--}}
								</div>
								<!--end::Action group-->
						
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						
                        <div class="d-flex w-100 px-5">

                            <div class="d-flex w-100 h-100">
                        
                                <div class="d-flex w-100 flex-column overflow-hidden">
                
                                    <span class="h-40px flex-shrink-0"></span>

                                    <!-- begin::top side  -->
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        
                                        <span class="h-30px flex-shrink-0"></span>

                                        <!-- begin::detail pesanan -->
                                        <div class="d-flex flex-column gap-4 gap-md-0 flex-lg-row align-items-center mb-5 w-95">
                                            <div class="d-flex w-100 justify-content-center flex-column">
                                                <p class="fsc-3 mb-0">Dipesan pada: {{ $response['data']['created_at'] }}</p>
                                            </div>

                                            <div class="d-flex align-items-center gap-2 justify-content-start justify-content-md-end flex-shrink-0 w-100 w-lg-auto h-lg-100">
                                                <a href="{{ route('admin.orders') }}" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white d-none">Unduh Invoice</a>
                                                <a href="{{ route('admin.orders') }}" class="btn-primary-homade fsc-2 rounded-3 fw-bold text-white">Kembali <img src="{{ asset('icons/arrow-right.svg') }}" class="img-white"></a>
                                            </div>
                                        </div>
                                        <!-- end::detail pesanan -->

                                        <!-- begin::timeline -->
                                        <div class="d-flex align-items-center justify-content-center w-95 border-grey-1 rounded-5 p-10 flex-column">
                                            
                                        @if ($response['data']['status'] === "waiting_for_invoice")
                            
                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAINTING REVIEW</p>
                                            <p class="fsc-2 mb-0 bg-light-accent text-accent rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/show.svg') }}" class="img-accent h-1em"> Waiting Review</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/show.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/hourglass.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/food.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>


                                        
                                        @elseif ($response['data']['status'] === "pending")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAINTING PAYMENT</p>
                                            <p class="fsc-2 mb-0 bg-light-yellow text-yellow2 rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/clock.svg') }}" class="img-yellow h-1em"> Waiting Payment</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/clock.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/food.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>

                                        @elseif ($response['data']['status'] === "process")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">PROCCESS</p>
                                            <p class="fsc-2 mb-0 bg-light-blue text-blue rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/food.svg') }}" class="img-blue h-1em"> Proses</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/food.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>

                                        @elseif ($response['data']['status'] === "wait_for_pick_up")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">WAITING FOR PICKUP</p>
                                            <p class="fsc-2 mb-0 bg-light-purple text-purple rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/bag.svg') }}" class="img-purple h-1em"> Waiting For Pickup</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/bag.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>
                                        @elseif ($response['data']['status'] === "on_the_way")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">ON THE WAY</p>
                                            <p class="fsc-2 mb-0 bg-light-orange text-orange rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/truck.svg') }}" class="img-orange h-1em"> On The Way</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-accent ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/truck.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-light-grey"></span>
                                                        <div class="d-flex h-90 rounded-circle border-grey-1 ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-40 img-grey">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>

                                        @elseif ($response['data']['status'] === "delivered" || $response['data']['status'] === "success")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                                            <p class="fsc-2 mb-0 bg-light-green text-green rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/check-circle.svg') }}" class="img-green h-1em"> Delivered</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">


                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-success"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-success"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-success ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        @elseif ($response['data']['status'] === "cancelled_by_customer")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                                            <p class="fsc-2 mb-0 bg-danger text-white rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/close-circle.svg') }}" class="img-white h-1em"> Cancelled</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>

                                        </div>

                                        @elseif ($response['data']['status'] === "cancelled_by_admin")

                                        <div class="d-flex align-items-end align-items-sm-center gap-3 gap-sm-0 flex-column flex-sm-row w-100 justify-content-between mb-5">
                                            <p class="fsc-3 mb-0 fw-black d-flex gap-5 align-items-center w-100 w-sm-auto"><img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em"> WORKFLOW STATUS : <br class="d-sm-none">DELIVERED</p>
                                            <p class="fsc-2 mb-0 bg-danger text-white rounded-pill d-none d-sm-flex align-items-center gap-3 px-4 py-1"><img src="{{ asset('icons/close-circle.svg') }}" class="img-white h-1em"> Cancelled</p>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center w-100 mt-5 h-100px">
                                            <div class="d-flex align-items-center w-101 w-lg-90 overflow-scroll h-100">

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting Review</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Validation Order</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center text-nowrap w-100 mb-0 fw-light h-30px">Waiting Confirmation</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Wait Payment</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Process</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Processing Your Food</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Waiting For Pickup</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Menunggu Kurir</p>

                                                </div>

                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">On The Way</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Dalam Perjalanan</p>

                                                </div>
                                                    
                                                <div class="d-flex align-items-center justify-content-between h-100 w-125px flex-shrink-0 flex-lg-shrink-1 w-lg-100 flex-column">
                                                    
                                                    <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                                        <span class="w-100 h-5px bg-danger"></span>
                                                        <div class="d-flex h-90 rounded-circle bg-danger ratio-1 justify-content-center align-items-center">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-40 img-white">
                                                        </div>
                                                        <span class="w-100 h-5px"></span>
                                                    </div>

                                                    <p class="fsc-2 text-center w-100 mb-0 fw-light h-30px">Delivered</p>
                                                    <p class="fsc-1 text-center w-100 mb-0 fw-light h-30px">Finished</p>

                                                </div>
                                                
                                            </div>

                                        </div>


                                        @endif

                                        </div>
                                        <!-- end::timeline -->

                                        <span class="h-40px flex-shrink-0"></span>

                                    </div>
                                    <!-- end::top side -->

                                    <!-- begin::bottom side -->
                                    <div class="d-flex w-100 align-items-center justify-content-center flex-column flex-shrink-0">

                                        <div class="d-flex w-95 flex-column-reverse align-items-center gap-5 align-items-lg-start overflow-hidden flex-lg-row">

                                        <!-- begin::left side -->
                                            <div class="d-flex w-100 align-items-center gap-10 justify-content-center flex-column" style="min-width: 0;">
                                                <div class="d-flex w-100 align-items-center flex-column border-grey-1 rounded-5">

                                                    <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-5 gap-3"><img src="{{ asset('icons/user-circle.svg') }}" class="h-1em"> Informasi Pengiriman</p>
                                                    <span class="w-100 h-1px bg-grey"></span>

                                                    <div class="d-flex align-items-center justify-content-center w-100 px-5 px-md-15 py-10 flex-column gap-5">

                                                        <div class="d-flex align-items-center justify-content-center w-100 h-200px border-grey-1 rounded-4">
                                                            <iframe 
                                                                class="w-100 h-100 rounded-4" 
                                                                style="border:0"
                                                                loading="lazy" 
                                                                allowfullscreen 
                                                                src="https://maps.google.com/maps?q={{ $response['data']['delivery_info']['address_info']['latitude'] }},{{ $response['data']['delivery_info']['address_info']['longitude'] }}&hl=es&z=14&output=embed">
                                                            </iframe>
                                                        </div>

                                                        <div class="d-flex flex-column w-100 gap-5">

                                                            <div class="d-flex w-100 flex-column overflow-hidden">
                                                                <p class="fsc-2 fw-bolder mb-2 text-black">USER ID (CUSTOMER REF)</p>
                                                                <p class="fsc-2 mb-0 px-2 py-1 bg-accent text-white rounded-2 fw-bold w-max" style="word-break: break-all; overflow: hidden; max-width: 100%;">{{ $response['data']['user']['id'] }}</p>
                                                            </div>

                                                            <div class="d-flex w-50 flex-shrink-0 flex-column">
                                                                <p class="fsc-2 mb-0 fw-bolder text-black">Nama Lengkap</p>
                                                                <p class="fsc-3 mb-0 fw-bold text-accent">{{ $response['data']['user']['first_name'] }} {{ $response['data']['user']['last_name'] }}</p>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex flex-column w-100 gap-5">

                                                            <div class="d-flex w-100 flex-column">
                                                                <p class="fsc-2 mb-0 fw-bolder text-black">NOMOR TELEPON</p>
                                                                <p class="fsc-3 mb-0 fw-bold text-black">{{ $response['data']['user']['phone'] }}</p>
                                                            </div>

                                                            <div class="d-flex w-100 flex-column">
                                                                <p class="fsc-2 mb-0 fw-bolder text-black">ALAMAT PENGIRIMAN</p>
                                                                <p class="fsc-1 mb-0">{{ $response['data']['delivery_info']['address_info']['address'] }}</p>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex w-100 h-100px flex-column gap-5">

                                                            <div class="d-flex w-100 h-100 flex-column">
                                                                <p class="fsc-2 mb-3 fw-bolder text-black">Note Opsional</p>
                                                                <p class="fsc-2 w-100 h-100px overflow-scroll px-3 py-3 rounded-2 border-grey-1 mb-0 text-black">{{ $response['data']['note'] }}</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                                                
                                                    
                                                </div>

                                                <!--  -->
                                                
                                                <div class="overflow-hidden d-flex align-items-center flex-column w-100 border-grey-1 rounded-5">

                                                    <p class="fsc-3 mb-0 d-flex align-items-center w-100 px-10 py-3 gap-3"><img src="{{ asset('icons/bag.svg') }}" class="h-1em"> Daftar Pemesanan</p>
                                                    <span class="w-100 h-1px bg-grey"></span>

                                                    <div class="overflow-hidden d-flex align-items-center justify-content-center w-100 px-10 py-5 flex-column gap-5">

                                                        <div class="d-flex w-100 gap-1 h-30px align-items-center justify-content-center">

                                                            <div class="d-flex h-100 w-100 align-items-center justify-content-center"><p class="fsc-2 fw-bold mb-0 w-100">MENU</p></div>

                                                            <div class="h-100 w-20 flex-shrink-0 align-items-center d-none d-md-flex justify-content-center"><p class="fsc-2 mb-0 w-100 text-center">QUANTITY</p></div>

                                                            <div class="d-flex h-100 w-30 flex-shrink-0 align-items-center justify-content-center"><p class="fsc-2 mb-0 w-100 text-end">TOTAL PRICE</p></div>

                                                        </div>

                                                        @foreach ($response['data']['items'] as $menu)
                                                            
                                                            <div class="overflow-hidden d-flex w-100 gap-1 h-60px h-md-80px align-items-center justify-content-center">

                                                                <div class="overflow-hidden d-flex h-100 w-100 align-items-center justify-content-center">
                                                                    <div class="overflow-hidden d-flex w-100 h-100 gap-3 gap-md-10">

                                                                        <div class="d-none d-sm-flex h-100 ratio-1">
                                                                            <img src="{{ $menu['image_url'] }}" alt="" class="w-100 h-100 object-fit-cover">
                                                                        </div>

                                                                        <div class="overflow-hidden d-flex w-100 h-100 align-items-center justify-content-center flex-column">
                                                                            <p class="fsc-2 mb-0 w-100 overflow-hidden text-overflow text-nowrap fw-bold">{{ $menu['name'] }}</p>
                                                                            <p class="fsc-1 mb-0 w-100 overflow-hidden text-overflow text-nowrap">{{ $menu['package'] }}</p>
                                                                            <p class="fsc-1 mb-0 w-100 overflow-hidden text-overflow text-nowrap">{{ $menu['note'] }}</p>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="d-none d-md-flex h-100 w-20 flex-column flex-shrink-0 align-items-center justify-content-center">
                                                                    <p class="fsc-2 fw-bold mb-0 w-100 text-center">{{ $menu['quantity'] }}</p>
                                                                    <p class="fsc-1 mb-0 w-100 text-center">PORSI</p>
                                                                </div>

                                                                <div class="d-flex h-100 w-35 w-sm-30 flex-shrink-0 flex-column align-items-center justify-content-center">
                                                                    <p class="fsc-2 fw-bold mb-0 w-100 text-end">Rp {{ number_format($menu['total_price'] , 0, ',', '.') }}</p>
                                                                    <p class="fsc-1 mb-0 w-100 text-end d-none d-md-inline">Rp {{ number_format( $menu['price_at_purchase'] , 0, ',', '.') }} / Pcs</p>
                                                                    <p class="fsc-1 mb-0 w-100 text-end d-md-none">{{ $menu['quantity'] }} Porsi</p>
                                                                </div>

                                                            </div>

                                                            <span class="h-1px w-100 bg-dark-grey"></span>

                                                        @endforeach

                                                        @if ($state === 6)
                                                        
                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class="fsc-2 mb-0">Subtotal</p>
                                                            <p class="fsc-2 mb-0">Rp 45.000.000</p>
                                                        </div>

                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class="fsc-2 mb-0">Ongkir</p>
                                                            <p class="fsc-2 mb-0">Rp 5.000</p>
                                                        </div>

                                                        <div class="d-flex justify-content-between align-items-center w-100">
                                                            <p class="fsc-3 mb-0">Subtotal</p>
                                                            <p class="fsc-3 mb-0 fw-bold">Rp 45.005.000</p>
                                                        </div>

                                                        @endif

                                                    </div>
                                                </div>

                                            </div>
                                        <!-- end::left side -->

                                        <!-- begin::right side -->
                                            <div class="d-flex w-99 w-sm-400px w-lg-30 flex-shrink-0">
                                                <div class="d-flex h-max align-items-center justify-content-center w-100 border-grey-1 rounded-5">


                                                @if ($response['data']['status'] === "waiting_for_invoice")
                                                        
                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <form action="{{ route('admin.change-transaction-information', ['id' => $response['data']['id']]) }}" method="post" class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">
                                                            @csrf
                                                            @method('PUT')

                                                            <p class="fsc-2">Status Saat Ini:</p>

                                                            <label for="ongkirInput" class="mb-2">Input ongkos kirim</label>
                                                            <div class="d-flex w-100 gap-2 border-grey-1 bg-light accent px-5 py-4 align-items-center rounded-3">
                                                                <label for="ongkirInput">Rp</label>
                                                                <input type="number" name="shipping_cost" id="ongkirInput" class="w-100 h-100" oninput="ongkirSync()" required>
                                                            </div>

                                                            <button class="w-100 py-4 fsc-2 bg-accent rounded-3 text-white d-flex align-items-center justify-content-center fw-bold mt-5">Simpan Ongkir</button>
                                                        </form>

                                                        <button onclick="togglePopUp('cancel')" class="w-100 py-4 fsc-2 bg-light-accent rounded-3 text-accent d-flex align-items-center justify-content-center mb-5 fw-bold">Batalkan Pesanan</button>

                                                        <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                                        <div class="d-flex w-100 h-100 flex-column">

                                                            <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Subtotal</p>
                                                                <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                            </div>
                                
                                                            <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Ongkir</p>
                                                                <div class="d-flex gap-2">
                                                                    <p class="fsc-2 mb-0">Rp</p>
                                                                    <p class="fsc-2 mb-0" id="ongkirLabel">0</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                            <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                            <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                        </div>

                                                    </div>

                                                @elseif ($response['data']['status'] === "pending")

                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                            <p class="fsc-2">Status saat ini:</p>

                                                            <label for="ongkirInput" class="mb-2">Ongkos kirim ditentukan</label>
                                                            <div class="d-flex w-100 gap-2 border-grey-1 bg-light accent px-5 py-4 align-items-center rounded-3">
                                                                <label>Rp {{ $response['data']['shipping_cost'] }}</label>
                                                            </div>

                                                            <div class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-0 text-white fsc-2 mt-5">
                                                                <img src="{{ asset('icons/check-circle.svg') }}" alt="" class="h-12em img-white">Invoice Dikirim
                                                            </div>
                                                        </div>

                                                        <div class="d-flex w-100 flex-column">
                                                            <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>
                            
                                                            <div class="d-flex w-100 h-100 flex-column">
                            
                                                                <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Subtotal</p>
                                                                    <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                                </div>
                                    
                                                                <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Ongkir</p>
                                                                        <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                                                </div>
                            
                                                            </div>
                            
                                                            <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                                <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                                <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                            <p class="fsc-2 w-100 text-center">Validasi Pembayaran</p>
                                                            
                                                            <button onclick="togglePopUp('proof')" class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center mb-0 text-white fsc-2 justify-content-center mt-5">
                                                                <img src="{{ asset('icons/show.svg') }}" alt="" class="h-12em img-white">Lihat Bukti Pembayaran
                                                            </button>

                                                            <form action="{{ route('admin.accept-payment-proof', ['id' => $response['data']['id']]) }}" method="post">
                                                                @csrf
                                                                
                                                                <input type="hidden" name="reason" value="Bukti pembayaran yang sangat valid!">
                                                                <button class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-0 text-white fsc-2 mt-5">
                                                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-12em img-white">Konfirmasi Pembayaran
                                                                </button>

                                                            </form>

                                                            <button onclick="togglePopUp('cancelP')" class="w-100 py-4 gap-2 bg-light-accent rounded-3 d-flex align-items-center justify-content-center fsc-2 text-accent mb-5 mt-5">
                                                                <img src="{{ asset('icons/close.svg') }}" alt="" class="h-2em img-accent">Tolak Pembayaran
                                                            </button>

                                                            <p class="fsc-1 w-100 text-center">Pastikan bukti transfer valid. Klik konfirmasi untuk memindahkan pesanan ke dapur</p>
                                                        </div>

                                                    </div>

                                                @elseif ($response['data']['status'] === "process")

                                                <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                                    <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                    <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                        <p class="fsc-2">Status saat ini:</p>
                                                        
                                                        <div class="d-flex gap-10 rounded-3 px-10 py-4 bg-success">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50px img-white">
                                                            </div>
                                                            <div class="d-flex w-100 flex-column align-items-center justify-content-center">
                                                                <p class="fsc-2 mb-0 text-white fw-bold w-100">Validasi Pembayaran</p>
                                                                <p class="fsc-2 mb-0 text-white w-100">Payment Confirmed - Paid</p>
                                                            </div>
                                                        </div>

                                                        <form action="{{ route('admin.change-status-delivery-order', ['id' => $response['data']['id']]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            
                                                            <p class="fsc-2 mt-5 mb-2">Aksi selanjutnya</p>
                                                            
                                                            <input type="hidden" name="delivery_status" value="wait_for_pick_up">

                                                            <button type="submit" class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-3 text-white fsc-2">
                                                                Siap Dikirim
                                                            </button>

                                                            <p class="fsc-2 mb-2">Klik tombol diatas jika pesanan sudah siap dikirm</p>

                                                        </form>

                                                    </div>

                                                    <div class="d-flex w-100 flex-column">
                                                        <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                                        <div class="d-flex w-100 h-100 flex-column">

                                                            <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Subtotal</p>
                                                                <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                            </div>
                                
                                                            <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Ongkir</p>
                                                                    <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                            <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                            <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                        </div>
                                                    </div>

                                                </div>

                                                @elseif ($response['data']['status'] === "wait_for_pick_up")

                                                <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                                    <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                    <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                        <p class="fsc-2">Status saat ini:</p>
                                                        
                                                        <div class="d-flex gap-10 rounded-3 px-10 py-4 bg-success">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50px img-white">
                                                            </div>
                                                            <div class="d-flex w-100 flex-column align-items-center justify-content-center">
                                                                <p class="fsc-2 mb-0 text-white fw-bold w-100">Pesanan Siap Dikirimkan</p>
                                                                <p class="fsc-2 mb-0 text-white w-100">Diperiksa & dikemas sesuai standar.</p>
                                                            </div>
                                                        </div>

                                                        <form action="{{ route('admin.change-status-delivery-order', ['id' => $response['data']['id']]) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            
                                                            <p class="fsc-2 mt-5 mb-2">Aksi selanjutnya</p>
                                                            
                                                            <input type="hidden" name="delivery_status" value="on_the_way">

                                                            <button class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-3 text-white fsc-2">
                                                                Pesanan Diambil Kurir
                                                            </button>

                                                            <p class="fsc-2 mb-2">Klik tombol diatas jika pesanan sudah siap dikirm</p>

                                                        </form>

                                                    </div>

                                                    <div class="d-flex w-100 flex-column">
                                                        <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                                        <div class="d-flex w-100 h-100 flex-column">

                                                            <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Subtotal</p>
                                                                <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                            </div>
                                
                                                            <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                <p class="fsc-2 mb-0">Ongkir</p>
                                                                    <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                                            </div>

                                                        </div>

                                                        <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                            <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                            <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                        </div>
                                                    </div>

                                                </div>

                                                @elseif ($response['data']['status'] === "on_the_way")

                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                            <p class="fsc-2">Status saat ini:</p>
                                                            
                                                            <div class="d-flex gap-10 rounded-3 px-10 py-4">
                                                                <div class="d-flex">
                                                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50px img-green">
                                                                </div>
                                                                <div class="d-flex w-100 flex-column align-items-center justify-content-center">
                                                                    <p class="fsc-2 mb-0 text-green fw-bold w-100">Pesanan Sedang Dkirim</p>
                                                                    <p class="fsc-2 mb-0 text-green w-100">Kurir sedang mengantar masakan kepada pelanggan terhormat.</p>
                                                                </div>
                                                            </div>

                                                            <form action="{{ route('admin.change-status-delivery-order', ['id' => $response['data']['id']]) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                
                                                                <p class="fsc-2 mt-5 mb-2">Aksi selanjutnya</p>
                                                                
                                                                <input type="hidden" name="delivery_status" value="delivered">

                                                                <button class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-3 text-white fsc-2">
                                                                    Pesanan Sudah Sampai
                                                                </button>

                                                                <p class="fsc-2 mb-2">Klik tombol diatas jika pesanan sampai tujuan</p>

                                                            </form>

                                                        </div>

                                                        <div class="d-flex w-100 flex-column">
                                                            <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                                            <div class="d-flex w-100 h-100 flex-column">

                                                                <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Subtotal</p>
                                                                    <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                                </div>
                                    
                                                                <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Ongkir</p>
                                                                        <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                                                </div>

                                                            </div>

                                                            <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                                <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                                <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                @elseif ($response['data']['status'] === "delivered" || $response['data']['status'] === "success")

                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">

                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <div class="d-flex w-100 px-5 pt-5 pb-10 mb-10 border-grey-1 flex-column rounded-4 flex-shrink-0">

                                                            <p class="fsc-2">Status saat ini:</p>
                                                            
                                                            <div class="d-flex gap-10 rounded-3 px-10 py-4">
                                                                <div class="d-flex">
                                                                    <img src="{{ asset('icons/checkmark.svg') }}" alt="" class="h-50px img-green">
                                                                </div>
                                                                <div class="d-flex w-100 flex-column align-items-center justify-content-center">
                                                                    <p class="fsc-2 mb-0 text-green fw-bold w-100">Pesanan Sudah Selesai</p>
                                                                    <p class="fsc-2 mb-0 text-green w-100">Pelanggan sudah menerima pesanan dan menikmati makanannya.</p>
                                                                </div>
                                                            </div>

                                                            @if ($response['data']['status'] === "delivered")
                                                                
                                                            <form action="{{ route('admin.complete-order', ['id' => $response['data']['id']]) }}" method="post">
                                                                @csrf
                                                                
                                                                <p class="fsc-2 mt-5 mb-2">Aksi selanjutnya</p>
                                                                
                                                                <input type="hidden" name="delivery_status" value="delivered">

                                                                <button class="w-100 py-4 gap-2 bg-accent rounded-3 d-flex align-items-center justify-content-center mb-3 text-white fsc-2">
                                                                    Selesaikan Pesanan
                                                                </button>

                                                                <p class="fsc-2 mb-2">Klik tombol diatas jika pesanan sudah selesai</p>

                                                            </form>
                                                            @endif
                                                                
                                                        </div>



                                                        <div class="d-flex w-100 flex-column">
                                                            <p class="fsc-3 mb-3 fw-bold flex-shrink-0 mb-3 w-100">Rincian Pembayaran</p>

                                                            <div class="d-flex w-100 h-100 flex-column">

                                                                <div class="d-flex w-100 mb-3 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Subtotal</p>
                                                                    <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['subtotal'], 0, ',', '.') }}</p>
                                                                </div>
                                    
                                                                <div class="d-flex w-100 mb-4 justify-content-between align-items-center">
                                                                    <p class="fsc-2 mb-0">Ongkir</p>
                                                                        <p class="fsc-2 mb-0">Rp {{ number_format($response['data']['shipping_cost'], 0, ',', '.') }}</p>
                                                                </div>

                                                            </div>

                                                            <div class="d-flex w-100 mb-1 flex-shrink-0 justify-content-between align-items-center">
                                                                <p class="fsc-3 fw-bold mb-0">Total Transaksi</p>
                                                                <p class="fsc-3 fw-bold mb-0">Rp {{ number_format($response['data']['total_price'], 0, ',', '.') }}</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                @elseif ($response['data']['status'] === "cancelled_by_customer")

                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <div class="d-flex mt-5 h-50px bg-danger align-items-center justify-content-center ratio-1 rounded-circle">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-50 img-white">
                                                        </div>

                                                        <p class="fsc-3 mb-0 mt-5">Pesanan Dibatalkan</p>
                                                        <p class="fsc-2 mb-7 mt-1">Oleh Pengguna</p>

                                                        <p class="fsc-2 mb-7 mt-1">Alasan: {{ $response['data']['cancelled_reason'] }}</p>
                                                        
                                                    </div>

                                                @elseif ($response['data']['status'] === "cancelled_by_admin")

                                                    <div class="d-flex w-90 h-95 py-5 flex-column align-items-center justify-content-center">
                                                        <p class="w-100 fsc-3 mb-3 flex-shrink-0">STATUS PEMESANAN</p>

                                                        <div class="d-flex mt-5 h-50px bg-danger align-items-center justify-content-center ratio-1 rounded-circle">
                                                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-50 img-white">
                                                        </div>

                                                        <p class="fsc-3 mb-0 mt-5">Pesanan Dibatalkan</p>
                                                        <p class="fsc-2 mb-7 mt-1">Oleh Admin</p>

                                                        <p class="fsc-2 mb-7 mt-1">Alasan: {{ $response['data']['cancelled_reason'] }}</p>

                                                    </div>
                                                    
                                                
                                                @endif
                                                    
                                                </div>
                                            </div>
                                        <!-- end::right side -->

                                        </div>

                                    </div>
                                    <!-- end::bottom side -->

                                    <span class="h-40px flex-shrink-0"></span>

                                    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
                                    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

                                    <script>

                                        function togglePopUp(x)
                                        {
                                            if (x === "cancel")
                                            {
                                                document.getElementById("CancelPopUp").classList.toggle("d-flex")
                                            } 

                                            if (x === "cancelP")
                                            {
                                                document.getElementById("CancelPaymentPopUp").classList.toggle("d-flex")
                                            } 
                                            
                                            if (x === "proof")
                                            {
                                                document.getElementById("ProofPopUp").classList.toggle("d-flex")
                                            }
                                        }
                                    </script>

                                    <script>
                                        @if ( $response['data']['shipping_cost'] )
                                        let ongkirValue = {{ $response['data']['shipping_cost'] }};
                                        @else
                                        let ongkirValue = 0;
                                        @endif

                                        const formatter = new Intl.NumberFormat('id-ID');
                                        let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
                                        document.getElementById('ongkirLabel').innerText = displayValue;

                                        function ongkirSync() {
                                            ongkirValue = document.getElementById('ongkirInput').value;

                                            let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
                                            document.getElementById('ongkirLabel').innerText = displayValue;
                                        }
                                    </script>

                                </div>

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

		<!--begin::Modals-->
        
            <!-- begin::cancel pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" id="CancelPopUp">
                <form action="{{ route('admin.reject-order', ['id' => $response['data']['id']]) }}" method="post" class="d-flex flex-column w-30 px-10 py-5 rounded-3 bg-white">
                    @csrf
                    <p class="fsc-3 mb-5 fw-bold">Alasan Kenapa Cancel</p>
                    <textarea name="reason" class="w-100 px-2 py-3 min-h-100px max-h-300px rounded-2 border-grey-2 mb-5" minlength="10" required></textarea>
                    <div class="d-flex w-100 gap-3">
                        <button type="button" onclick="togglePopUp('cancel')" class="w-100 rounded-2 bg-light-accent py-3 fsc-2 text-accent fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                        <button type="submit" class="w-100 rounded-2 bg-accent py-3 fsc-2 text-white fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                    </div>
                </form>
            </div>
            <!-- end::cancel pop up -->

            <!-- begin::cancel payment pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" id="CancelPaymentPopUp">
                <form action="{{ route('admin.reject-payment-proof', ['id' => $response['data']['id']]) }}" method="post" class="d-flex flex-column w-30 px-10 py-5 rounded-3 bg-white">
                    @csrf
                    <p class="fsc-3 mb-5 fw-bold">Alasan Kenapa Ditolak</p>
                    <textarea name="reason" class="w-100 px-2 py-3 min-h-100px max-h-300px rounded-2 border-grey-2 mb-5" minlength="10" required></textarea>
                    <div class="d-flex w-100 gap-3">
                        <button type="button" onclick="togglePopUp('cancelP')" class="w-100 rounded-2 bg-light-accent py-3 fsc-2 text-accent fw-bold d-flex justify-content-center align-items-center">Cancel</button>
                        <button type="submit" class="w-100 rounded-2 bg-accent py-3 fsc-2 text-white fw-bold d-flex justify-content-center align-items-center">Tolak</button>
                    </div>
                </form>
            </div>
            <!-- end::cancel payment pop up -->

            <!-- begin::proof pop up -->
            <div class="d-none2 align-items-center justify-content-center pop-up" style="z-index: 999;" id="ProofPopUp">
                <div class="d-flex flex-column w-100 h-100 gap-3 p-5">
                    
                    <div class="d-flex h-30px justify-content-end align-items-center gap-3 flex-shrink-0">

                        @if ($response['data']['payment_proof'])
                            @if ($response['data']['payment_proof']['status'] == "rejected")
                            
                            <form enctype="multipart/form-data" action="{{ route('admin.uploud-payment-proof', ['id' => $response['data']['id']]) }}" method="post" class="position-relative cursor-pointer bg-accent rounded-pill align-items-center h-100 px-3 pe-5 d-flex gap-3 fsc-2 text-white mb-0">
                                @csrf
                                <img src="{{ asset('icons/arrow-left-right.svg') }}" alt="" class="h-1em img-white"> Ganti Bukti
                                <input type="hidden" name="reason" value="Bukti Pembayaran Baru">
                                <input name="uplouded_file" accept="image/*" type="file" onchange="this.form.submit()" class="w-100 h-100 top-0 left-0 position-absolute opacity-0">
                            </form>

                            @endif
                        @endif

                        <button onclick="togglePopUp('proof')" class="bg-accent rounded-pill align-items-center h-100 px-3 pe-5 d-flex gap-3 fsc-2 text-white mb-0">
                            <img src="{{ asset('icons/close.svg') }}" alt="" class="h-15em img-white"> Close
                        </button>
                    </div>

                    <div class="d-flex w-100 h-100 overflow-hidden">
                        <img src="{{ $response['data']['payment_proof']['url'] ?? "https://placehold.co/400x250/FFEEEE/DC3545?text=Gambar+Rusak" }}" alt="" class="w-100 h-100 object-fit-contain">
                    </div>

                </div>
            </div>
            <!-- end::proof pop up -->

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

            function togglePopUp(x)
            {
                if (x === "cancel")
                {
                    document.getElementById("CancelPopUp").classList.toggle("d-flex")
                } 

                if (x === "cancelP")
                {
                    document.getElementById("CancelPaymentPopUp").classList.toggle("d-flex")
                } 
                
                if (x === "proof")
                {
                    document.getElementById("ProofPopUp").classList.toggle("d-flex")
                }
            }
        </script>

        <script>
            @if ( $response['data']['shipping_cost'] )
            let ongkirValue = {{ $response['data']['shipping_cost'] }};
            @else
            let ongkirValue = 0;
            @endif

            const formatter = new Intl.NumberFormat('id-ID');
            let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
            document.getElementById('ongkirLabel').innerText = displayValue;

            function ongkirSync() {
                ongkirValue = document.getElementById('ongkirInput').value;

                let displayValue = ongkirValue ? formatter.format(ongkirValue) : 0;
                document.getElementById('ongkirLabel').innerText = displayValue;
            }
        </script>
		<!--end::Custom Javascript-->
		
	</body>
	<!--end::Body-->
</html>
