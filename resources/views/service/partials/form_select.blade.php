{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
{{Form::select('product_id', $product,null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-xs btn-primary']) }}
</div>
