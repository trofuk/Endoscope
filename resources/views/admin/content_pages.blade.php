<div style="margin:50px 50px 0px 50px;">   

@if($pages)
 
	<table class="table table-hover table-striped">
      <tbody>
        
        @foreach($pages as $k => $page)
            @if($k%2 == 1)
            <tr style="background-color: #c3defb">    
                <td style="font-weight: 600; text-align: center;">Id</td>
                <td style="font-weight: 600; text-align: center;">Name</td>
                <td style="font-weight: 600; text-align: center;">Alias</td>
                <td colspan="3" style="font-weight: 600; text-align: center;">Text 1</td>
                <td colspan="3" style="font-weight: 600; text-align: center;">Image 1</td>
                <td style="font-weight: 600; text-align: center;">Created</td>
                <td style="font-weight: 600; text-align: center;">Delete</td>
            </tr>
            <tr style="background-color: #c3defb">
                <td style="font-weight: 600">{{ $page->id }}</td>
                <td>{!! Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                <td>{{ $page->alias }}</td>
                <td colspan="3" style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $page->text_1 }}</td>
                <td colspan="3" style="text-align: center;">{!! Html::image('assets/img/'.$page->image_1,'',['class'=>'img-responsive','width'=>'150px']) !!}</td>
                <td>{{ $page->created_at }}</td>
                
                <td>
                    {!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>
            </tr>

            
            @else 
            <tr style="background-color: #f3f3bb">    
                <td style="font-weight: 600; text-align: center;">Id</td>
                <td style="font-weight: 600; text-align: center;">Name</td>
                <td style="font-weight: 600; text-align: center;">Alias</td>
                <td style="font-weight: 600; text-align: center;">Text 1</td>
                <td style="font-weight: 600; text-align: center;">Text 2</td>
                <td style="font-weight: 600; text-align: center;">Text 3</td>
                <td style="font-weight: 600; text-align: center;">Image 1</td>
                <td style="font-weight: 600; text-align: center;">Image 2</td>
                <td style="font-weight: 600; text-align: center;">Image 3</td>
                <td style="font-weight: 600; text-align: center;">Created</td>
                <td style="font-weight: 600; text-align: center;">Delete</td>
            </tr>
            <tr style="background-color: #f3f3bb">
                <td style="font-weight: 600">{{ $page->id }}</td>
                <td>{!! Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                <td>{{ $page->alias }}</td>
                <td style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $page->text_1 }}</td>
                <td style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $page->text_2 }}</td>
                <td style="max-width: 150px;text-align: center;word-wrap:break-word;">{{ $page->text_3 }}</td>
                <td>{!! Html::image('assets/img/'.$page->image_1,'',['class'=>'img-responsive','width'=>'150px']) !!}</td>
                <td>{!! Html::image('assets/img/'.$page->image_2,'',['class'=>'img-responsive','width'=>'150px']) !!}</td>
                <td>{!! Html::image('assets/img/'.$page->image_3,'',['class'=>'img-responsive','width'=>'150px']) !!}</td>
                <td>{{ $page->created_at }}</td>
                
                <td>
                    {!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                        
                    {!! Form::close() !!}
                </td>
            </tr>           

            
            @endif

        	   
        @endforeach
        
		
        </tbody>
    </table>
@endif 

{!! Html::link(route('pagesAdd'),'New page') !!}
   
</div>