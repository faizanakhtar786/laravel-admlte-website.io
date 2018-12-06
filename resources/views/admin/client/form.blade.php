        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Name") !!}
                    {!! Form::text("name",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("name") }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Rate") !!}
                    {!! Form::select("rate",["1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5"],null,["class"=>"form-control","placeholder"=>"choose Rate"]) !!}
                    <span class="text-danger"> {{ $errors->first("rate") }}</span>
                </div>
            </div>
           
        </div>
              <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Mobile") !!}
                    {!! Form::text("mobile",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("mobile") }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Website") !!}
                    {!! Form::text("website",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("website") }}</span>
                </div>
            </div>
           
        </div>
       
         <div class="row">
        	<div class="col-md-6">
        		<div class="form-group">
        			{!! Form::label("Email") !!}
        			{!! Form::email("email",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("email") }}</span>
        		</div>
        	</div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("Feature Image") !!}
                    {!! Form::file("feature_image") !!}
                     @isset($data)
                        @if($data->feature_image!="")
                            <img src="{{ url('uploads/'.$data->feature_image) }}" alt="" width="100" height="50">
                        @endif
                    @endisset
                    <span class="text-danger"> {{ $errors->first("feature_image") }}</span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label(" Images") !!}
                    {!! Form::file("images[]",["multiple"=>"multiple"]) !!}
                    @isset($data)
                    @isset($data->images)
                        @if($data->images!="")
                            @php
                                $images=explode("-&",$data->images);
                                array_pop($images);
                            @endphp
                            @foreach($images as $image)
            <img src="{{ url('uploads/'.$image) }}" width="50" height="50">
                            @endforeach
                        @endif
                    @endisset  
                     @endisset
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label(" Description") !!}
                    {!! Form::textarea("description",null,["class"=>"form-control","id"=>"editor"]) !!}
                    <span class="text-danger"> {{ $errors->first("description") }}</span>
                </div>
            </div>
        </div>
         