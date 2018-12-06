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
                    {!! Form::label("Email") !!}
                    {!! Form::text("email",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("email") }}</span>
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
                    {!! Form::label("designation") !!}
                    {!! Form::text("designation",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("designation") }}</span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("facebook") !!}
                    {!! Form::text("facebook",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("facebook") }}</span>
                </div>
            </div>
     
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("twitter") !!}
                    {!! Form::text("twitter",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("twitter") }}</span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("google") !!}
                    {!! Form::text("google",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("google") }}</span>
                </div>
            </div>
      
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label("company") !!}
                    {!! Form::text("company",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("company") }}</span>
                </div>
            </div>
        </div>
         
         <div class="row">
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
        			{!! Form::label("Message") !!}
        			{!! Form::textarea("message",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("message") }}</span>
        		</div>
        	</div>
        </div>
