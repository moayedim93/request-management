<div id="accordion">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <i class="fa fa-plus-square fa-lg mr-2"></i>
                                <strong>@lang('Create Organization User')</strong>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapseOne" data-parent="#accordion">
                            {!! Form::open(['route' => 'organizationUsers.store']) !!}

                            @include('organization_users.fields')

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>