<section class="content-header">
    <h1>
        Create Inventory
    </h1>
 	<a href="{{ url($role. '/inventory/10') }}" class="no-link"><i class="fa fa-arrow-circle-o-left tosca"></i> Back</a>
    <ol class="breadcrumb">
        <li><a href="{{ url($role. '/') }}">Home</a></li>
        <li><a href="{{ url($role. '/inventory/10') }}">Inventories List</a></li>
    </ol>
</section>

<section class="content">
  	<div class="row">
        <div class="col-md-12">
			<div class="box box-primary">
				{!! Form::model(old(),array('url' => route('staff.inventory.store'), 'enctype'=>'multipart/form-data', 'method' => 'POST', 'class' => 'form-horizontal')) !!}
	                <div class="box-body">
	                    @include('layout.inventory.form', ['SubmitButtonText' => 'Tambah', 'role' => $role])
	                </div>
	            {!! Form::close() !!}
	        </div>
	    </div>
	</div>
</section>