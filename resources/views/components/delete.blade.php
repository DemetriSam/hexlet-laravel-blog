{{ Form::open(['route' => ['articles.destroy', $id], 'method' => 'DELETE']) }}
{{ Form::submit('Удалить статью') }}
{{ Form::close() }}
