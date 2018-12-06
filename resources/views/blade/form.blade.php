

{!! Form::open(["files"=>true]) !!}
<table>
	<tr>
		<th>
			{!! Form::label("Enter Email") !!}
		</th>
		<td>
			{!! Form::email("email",null,["class"=>"form-control","placeholder"=>"Enter Email"]) !!}
			<span class="error">{{ $errors->first("email") }}</span>
		</td>
	</tr>
	<tr>
		<th>
			{!! Form::label("Enter Name") !!}
		</th>
		<td>
			{!! Form::text("name",null,["class"=>"form-control","placeholder"=>"Enter Name"]) !!}
			<span class="error">{{ $errors->first("name") }}</span>
		</td>
	</tr>
	<tr>
		<th>
			{!! Form::label("Enter Mobile") !!}
		</th>
		<td>
			{!! Form::number("mobile",'9045642302',["class"=>"form-control","placeholder"=>"Enter Mobile No"]) !!}

			{!! Form::select('size', ['L' => 'Large', 'S' => 'Small'],null,["placeholder"=>"Choose Size"]) !!}
			<span class="error">{{ $errors->first("mobile") }}</span>
		</td>
	</tr>
	<tr>
		<th>
			{!! Form::label("Enter Password") !!}
		</th>
		<td>
			{!! Form::password("password",["class"=>"form-control","placeholder"=>"Enter Password"]) !!}
			<span class="error">{{ $errors->first("password") }}</span>
		</td>
	</tr>
	<tr>
		<th>
			{!! Form::label("Enter Confirm Password") !!}
		</th>
		<td>
			{!! Form::password("confirm_password",["class"=>"form-control","placeholder"=>"Enter confirm_password"]) !!}
			<span class="error">{{ $errors->first("confirm_password") }}</span>
		</td>
	</tr>
	<tr>
		<th colspan="2">
			{!! Form::submit("Click Me",["class"=>"btn btn-danger"]) !!}
		</th>
	</tr>

</table>


{!! Form::close() !!}