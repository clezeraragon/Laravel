@section('conteudo')

 @if(isset($errors))
 @foreach($errors->all() as $erro  )
 <p class="erros"> {{$erro}}</p>
@endforeach
 @endif

 {{Form::open()}}

    <p>
    {{Form::label('Nome')}}
    {{Form::text('nome', Input::old('nome'),array('class' => 'Input'))}}
    </p>
    <p>
    {{Form::label('Valor')}}
    {{Form::text('valor', Input::old('valor'),array('class' => 'Input'))}}
    </p>

    <p>
    {{ Form::label('Categoria') }}
    {{--  Aqui devemos apontar o campo da tabela relacionada com a tabela produto --}}
    {{ Form::select('categorias_id',$categorias) }}

    </p>
    <p>
    {{Form::label('Descrição')}}
    {{Form::textarea('descrisao')}}
    </p>

    <p>
    {{Form::submit('Enviar')}}
    </p>

{{Form::close()}}


@endsection






