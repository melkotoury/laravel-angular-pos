@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					{{ trans('dashboard.welcome') }}
					<hr />
					<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{trans('dashboard.statistics')}}</h3>
  </div>
  <div class="panel-body">
    <div class="row">
    	<div class="col-md-4">

            <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">

                                    <div class="col-xs-3">
                                        <i class="fa fa-briefcase fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$employees}}</div>
                                        <div>{{trans('dashboard.total_employees')}} </div>
                                    </div>
                                </div>
                            </div>
                            <a href="\employees">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>

    		{{--<div class="well">{{trans('dashboard.total_employees')}} : {{$employees}}</div>--}}
    	</div>
    	<div class="col-md-4">


            <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$customers}}</div>
                                        <div>{{trans('dashboard.total_customers')}}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="\customers">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>



    		{{--<div class="well">{{trans('dashboard.total_customers')}} : {{$customers}}</div>--}}
    	</div>
    	<div class="col-md-4">
            <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">

                                    <div class="col-xs-3">
                                        <i class="fa fa-handshake-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$suppliers}}</div>
                                        <div>{{trans('dashboard.total_suppliers')}}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="\suppliers">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
    		{{--<div class="well">{{trans('dashboard.total_suppliers')}} : {{$suppliers}}</div>--}}
    	</div>
    </div>
  
    <div class="row">
      <div class="col-md-3">
          <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-barcode fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$items}}</div>
                                        <div>{{trans('dashboard.total_items')}}</div>
                                    </div>
                                </div>
                            </div>
                            <a href="\items">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
        {{--<div class="well">{{trans('dashboard.total_items')}} : {{$items}}</div>--}}
      </div>
      <div class="col-md-3">
          <div class="panel panel-danger">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-shopping-cart fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge">{{$item_kits}}</div>
                          <div>{{trans('dashboard.total_item_kits')}}</div>
                      </div>
                  </div>
              </div>
              <a href="\item-kits">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
        {{--<div class="well">{{trans('dashboard.total_item_kits')}} : {{$item_kits}}</div>--}}
      </div>
      <div class="col-md-3">
          <div class="panel panel-info">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-hand-o-down fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge">{{$receivings}}</div>
                          <div>{{trans('dashboard.total_receivings')}} </div>
                      </div>
                  </div>
              </div>
              <a href="\receivings">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
        {{--<div class="well">{{trans('dashboard.total_receivings')}} : {{$receivings}}</div>--}}
      </div>
      <div class="col-md-3">
                   <div class="panel panel-warning">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-money fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge">{{$sales}}</div>
                          <div>{{trans('dashboard.total_sales')}} </div>
                      </div>
                  </div>
              </div>
              <a href="\reports\sales">
                  <div class="panel-footer">
                      <span class="pull-left">View Details</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
          </div>
        {{--<div class="well">{{trans('dashboard.total_sales')}} : {{$sales}}</div>--}}
      </div>
    </div>

</div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
