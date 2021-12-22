@extends('layouts.app')

@section('content')
<div class="row">

							<!-- BEGIN ALERT - REVENUE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-info no-margin">
											<strong class="pull-right text-success text-lg"><i class="md md-trending-up"></i></strong>
											<strong class="text-xl">{{$total_sales}} Rs</strong><br/>
											<span class="opacity-50">Total Sales</span>
											<div class="stick-bottom-left-right">
												<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - REVENUE -->

							<!-- BEGIN ALERT - VISITS -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-warning no-margin">
											<strong class="pull-right text-warning text-lg"><i class="md md-swap-vert"></i></strong>
											<strong class="text-xl">{{$customers_count}}</strong><br/>
											<span class="opacity-50">Total Customers</span>
											<div class="stick-bottom-right">
												<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - VISITS -->

							<!-- BEGIN ALERT - BOUNCE RATES -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-danger no-margin">
											<strong class="pull-right text-danger text-lg"><i class="md md-trending-down"></i></strong>
											<strong class="text-xl">{{$total_orders}}</strong><br/>
											<span class="opacity-50">Total Orders</span>
											<div class="stick-bottom-left-right">
												<div class="progress progress-hairline no-margin">
													<div class="progress-bar progress-bar-danger" style="width:43%"></div>
												</div>
											</div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - BOUNCE RATES -->

							<!-- BEGIN ALERT - TIME ON SITE -->
							<div class="col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body no-padding">
										<div class="alert alert-callout alert-success no-margin">
											<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
											<strong class="text-xl">54 sec.</strong><br/>
											<span class="opacity-50">Avg. time on site</span>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END ALERT - TIME ON SITE -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN SITE ACTIVITY -->
							<div class="col-md-6">
								<div class="card ">
									<div class="row">
										<div>
											<div class="card-head">
												<header class="text-primary">{{ $users_chart->options['chart_title'] }}</header>
											</div><!--end .card-head -->
											<div class="card-body">
                    							{!! $users_chart->renderHtml() !!}
											</div><!--end .card-body -->
										</div><!--end .col -->
										
									</div><!--end .row -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SITE ACTIVITY -->

							<!-- BEGIN SERVER STATUS -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-head">
										<header class="text-primary">{{ $sales_chart->options['chart_title'] }}</header>
									</div><!--end .card-head -->
									<div class="card-body">
										{!! $sales_chart->renderHtml() !!}
									</div><!--end .card-body -->
									
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END SERVER STATUS -->

						</div><!--end .row -->
						<div class="row">

							<!-- BEGIN TODOS -->
							<div class="col-md-3">
								<div class="card ">
									<div class="card-head">
										<header>Todo's</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list" data-sortable="true">
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox" checked>
														<span>Call clients for follow-up</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>
															Schedule meeting
															<small>opportunity for new customers</small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>
															Upload files to server
															<small>The files must be shared with all members of the board</small>
														</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
											<li class="tile">
												<div class="checkbox checkbox-styled tile-text">
													<label>
														<input type="checkbox">
														<span>Forward important tasks</span>
													</label>
												</div>
												<a class="btn btn-flat ink-reaction btn-default">
													<i class="md md-delete"></i>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END TODOS -->

							<!-- BEGIN REGISTRATION HISTORY -->
							<div class="col-md-6">
								<div class="card">
									<div class="card-head">
										<header>Registration history</header>
										<div class="tools">
											<a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
											<a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="col-sm-6 hidden-xs">
												<div class="force-padding text-sm text-default-light">
													<p>
														<i class="md md-mode-comment text-primary-light"></i>
														The registrations are measured from the time that the redesign was fully implemented and after the first e-mailing.
													</p>
												</div>
											</div><!--end .col -->
											<div class="col-sm-6">
												<div class="force-padding pull-right text-default-light">
													<h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
													<i class="fa fa-caret-up text-success fa-fw"></i> more registrations
												</div>
											</div><!--end .col -->
										</div><!--end .row -->
										<div class="stick-bottom-left-right force-padding">
											<div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
										</div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END REGISTRATION HISTORY -->

							<!-- BEGIN NEW REGISTRATIONS -->
							<div class="col-md-3">
								<div class="card">
									<div class="card-head">
										<header>New registrations</header>
										<div class="tools hidden-md">
											<a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
										</div>
									</div><!--end .card-head -->
									<div class="card-body no-padding height-9 scroll">
										<ul class="list divider-full-bleed">
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar9.jpg?1404026744" alt="" />
													</div>
													<div class="tile-text">Ann Laurens</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
													</div>
													<div class="tile-text">Alex Nelson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar11.jpg?1404026774" alt="" />
													</div>
													<div class="tile-text">Mary Peterson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar7.jpg?1404026721" alt="" />
													</div>
													<div class="tile-text">Philip Ericsson</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar8.jpg?1404026729" alt="" />
													</div>
													<div class="tile-text">Jim Peters</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
											<li class="tile">
												<div class="tile-content">
													<div class="tile-icon">
														<img src="../../assets/img/avatar2.jpg?1404026449" alt="" />
													</div>
													<div class="tile-text">Jessica Cruise</div>
												</div>
												<a class="btn btn-flat ink-reaction">
													<i class="md md-block text-default-light"></i>
												</a>
											</li>
										</ul>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END NEW REGISTRATIONS -->

						</div><!--end .row -->

@endsection
@section('js')
	{!! $users_chart->renderChartJsLibrary() !!}
	{!! $sales_chart->renderChartJsLibrary()  !!}
@endsection
@section('javascript')
	
	{!! $users_chart->renderJs() !!}
	{!! $sales_chart->renderJs() !!}
@endsection