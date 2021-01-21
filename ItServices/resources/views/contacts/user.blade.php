{!! Form::open(["action"=>"VisitorController@store","method"=>"POST","enctype"=>"multpart/form-data",'files'=> true,"id"=>"visitor_form","data-parsley-validate"=>""]) !!}

<div class="form-group">
    {!! Form::text('text','',["class"=>"form-control","id"=>"email","placeholder"=>"Name","required"=>"","data-parsley-pattern"=>"[a-zA-Z]+$","data-parsley-trigger"=>"keyup"]) !!}
</div>
<div class="form-group">
    {!! Form::text('text','',["class"=>"form-control","id"=>"email","placeholder"=>"Email","required"=>"","data-parsley-type"=>"email"]) !!}
</div>
<div class="form-group">
    {!! Form::number('text','',["class"=>"form-control","id"=>"number","placeholder"=>"0758522463","required"=>"","data-parsley-type"=>"number","data-parsley-maxlength"=>"10"]) !!}
</div>
<div class="form-group">
    {!! Form::text('description','',["class"=>"form-control","id"=>"description","placeholder"=>"Message","required"=>"" ,"data-parsley-maxlength"=>"150"]) !!}
</div>
<div class="form-group">
    {{Form::submit("Contact Us",["class"=>"btn btn-danger btn-group-sm float-right mt-2 mb-2"])}}
</div>
{!! Form::close() !!}
