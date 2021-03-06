<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('partnersAdd'),'class' => 'form-horizontal','method' => 'POST','enctype' => 'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', old('name'), ['class' => 'form-control','placeholder' => 'Input partner name']) !!}
		</div>
	
	</div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('logo', 'Logo:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('logo', ['class' => 'filestyle','data-Text' => 'Choose logo','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

   	<div style="clear: both;"></div>
	  <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	</div>
	
	
	
	{!! Form::close() !!}
	

	
</div>
</div>