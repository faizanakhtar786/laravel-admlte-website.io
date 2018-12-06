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
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    select{
        font-family: fontAwesome
    }
</style>               
<select name="icon" id="icon" class="form-control" >
    <option value="">- Select Icon -</option>
    @include('admin.service.select')
</select>

                    <span class="text-danger"> {{ $errors->first("icon") }}</span>
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
         