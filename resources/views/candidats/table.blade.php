<table class="table table-responsive" id="candidats-table">
    <thead>
        <tr>
            <th>Nomcomplet</th>
        <th>Date Naiss</th>
        <th>Adresse</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($candidats as $candidat)
        <tr>
            <td>{!! $candidat->nomComplet !!}</td>
            <td>{!! $candidat->date_naiss !!}</td>
            <td>{!! $candidat->adresse !!}</td>
            <td>{!! $candidat->description !!}</td>
            <td>
                {!! Form::open(['route' => ['candidats.destroy', $candidat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('candidats.show', [$candidat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('candidats.edit', [$candidat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>