@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Candidat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($candidat, ['route' => ['candidats.update', $candidat->id], 'method' => 'patch']) !!}

                        @include('candidats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection