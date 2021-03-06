@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Genres
        </h1>
   </section>
   <div class="content">
        @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($genres, ['route' => ['genres.update', $genres->id], 'method' => 'patch']) !!}

                        @include('genres.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection