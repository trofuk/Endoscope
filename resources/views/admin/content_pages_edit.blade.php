<div style="margin:100px 50px 0px 50px;">  
<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('pagesEdit',array('page'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
		<div class="col-xs-8" style="margin-bottom: 15px;">
			{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Input page name']) !!}
		</div>
	
	</div>

	<div style="clear: both;"></div>
	<div class="form-group">
	     {!! Form::label('alias', 'Alias:', ['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::text('alias', $data['alias'], ['class' => 'form-control','placeholder'=>'Input page alias']) !!}
		 </div>
    </div>
    
    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_1', 'Text 1:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_1', $data['text_1'], ['id' => 'editor_1','class' => 'form-control','placeholder' => 'Input page text 1']) !!}
		 </div>
    </div>
	
	@if($count%2 == 1)
	<div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_2', 'Text 2:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_2', $data['text_2'], ['id' => 'editor_2','class' => 'form-control','placeholder' => 'Input page text 2']) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('text_3', 'Text 3:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::textarea('text_3', $data['text_3'], ['id' => 'editor_3','class' => 'form-control','placeholder' => 'Input page text 3']) !!}
		 </div>
    </div>
    @endif
   	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_image_1', 'Image 1:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/'.$data['image_1'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_image_1', $data['image_1']) !!}
    	</div>
    </div>

   <div style="clear: both;"></div>
   <div class="form-group">
	     {!! Form::label('image_1', 'Image 1:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_1', ['class' => 'filestyle','data-Text' => 'Choose image','data-btnClass'=>"btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>
    
	@if($count%2 == 1)
	<div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_image_2', 'Image 2:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/'.$data['image_2'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_image_2', $data['image_2']) !!}
    	</div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('image_2', 'Image 2:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_2', ['class' => 'filestyle','data-Text'=>'Choose image','data-btnClass' => "btn-primary",'data-placeholder' => "File not exists"]) !!}
		 </div>
    </div>

    <div style="clear: both;"></div>
	<div class="form-group">
    	{!! Form::label('old_image_3', 'Image 3:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
			{!! Html::image('assets/img/'.$data['image_3'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_image_3', $data['image_3']) !!}
    	</div>
    </div>

    <div style="clear: both;"></div>
    <div class="form-group">
	     {!! Form::label('image_3', 'Image 3:',['class' => 'col-xs-2 control-label']) !!}
	     <div class="col-xs-8" style="margin-bottom: 15px;">
		 	{!! Form::file('image_3', ['class' => 'filestyle','data-placeholder' => "File not exists",'data-Text'=>'Choose image', 'data-btnClass' => "btn-primary"]) !!}
		 </div>
    </div>
    @endif
    
     <div style="clear: both;"></div>
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10" style="margin-bottom: 15px;">
	      {!! Form::button('Save', ['class' => 'btn btn-primary','type' => 'submit']) !!}
	    </div>
	  </div>
	
	
	
	{!! Form::close() !!}
	@if($count%2 == 1)
		<script>
			CKEDITOR.replace('editor_2');
			CKEDITOR.replace('editor_3');
		</script>
	@endif
		<script>
			CKEDITOR.replace('editor_1');
		</script>
</div>
</div>