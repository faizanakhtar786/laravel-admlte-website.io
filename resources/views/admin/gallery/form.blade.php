  <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			{!! Form::label("Title") !!}
        			{!! Form::text("title",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("title") }}</span>
        		</div>
        	</div>
        </div>
        
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label("Image") !!}
                    {!! Form::file("image") !!}
                     @isset($data)
                        @if($data->image!="")
                            <img src="{{ url('uploads/'.$data->image) }}" alt="" width="100" height="50">
                        @endif
                    @endisset
                    <span class="text-danger"> {{ $errors->first("image") }}</span>
                </div>
            </div>
        </div>
          
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label("Description") !!}
                   {!! Form::textarea("description",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("description") }}</span>
                </div>
            </div>
        </div>
         
