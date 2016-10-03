{!! Form::open(array('route'=>array('categories.destroy',$id),'method'=>'DELETE','style'=>'display: inline', 'class' =>'form-delete')) !!}    
<button class="btn btn-link"> <i class="glyphicon glyphicon-remove"> Remove</i></button>
{!! Form::close() !!}