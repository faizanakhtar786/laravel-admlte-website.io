        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Name") !!}
                    {!! Form::text("name",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("name") }}</span>
                </div>
            </div>
       
           
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Meta Keyword") !!}
                    {!! Form::text("meta_keyword",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("meta_keyword") }}</span>
                </div>
            </div>
       
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("meta_description") !!}
                    {!! Form::text("meta_description",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("meta_description") }}</span>
                </div>
            </div>
        </div>
         <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			{!! Form::label("Title") !!}
        			{!! Form::text("title",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("title") }}</span>
        		</div>
        	</div>
            <div class="col-md-6">
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
                    {!! Form::label("Short Description") !!}
                    {!! Form::textarea("shortdescription",null,["class"=>"form-control","id"=>"editor"]) !!}
                    <span class="text-danger"> {{ $errors->first("shortdescription") }}</span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label("Long Description") !!}
                    {!! Form::textarea("longdescription",null,["class"=>"form-control","id"=>"editor2"]) !!}
                    <span class="text-danger"> {{ $errors->first("longdescription") }}</span>
                </div>
            </div>
        </div>
