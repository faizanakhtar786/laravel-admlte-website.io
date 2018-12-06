  <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			{!! Form::label("Name") !!}
        			{!! Form::text("name",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("name") }}</span>
        		</div>
        	</div>
        </div>
         <div class="row">
        	<div class="col-md-12">
        		<div class="form-group">
        			{!! Form::label("Email") !!}
        			{!! Form::email("email",null,["class"=>"form-control"]) !!}
        			<span class="text-danger"> {{ $errors->first("email") }}</span>
        		</div>
        	</div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label("Mobile") !!}
                    {!! Form::text("mobile",null,["class"=>"form-control"]) !!}
                    <span class="text-danger"> {{ $errors->first("mobile") }}</span>
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
