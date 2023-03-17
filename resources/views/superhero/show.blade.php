@extends('layouts.app')

@section('template_title')
    {{ $superhero->name ?? 'Show Superhero' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Superhero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('superheroes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Realname:</strong>
                            {{ $superhero?->realname }}
                        </div>
                        <div class="form-group">
                            <strong>Superheroname:</strong>
                            {{ $superhero?->superheroname }}
                        </div>
                        <div class="form-group">
                            <strong>Photo:</strong>
                            {{ $superhero?->photo }}
                        </div>
                        <div class="form-group">
                            <strong>Information:</strong>
                             {{ $superhero?->information }} <!--Agreue el ? para que puedan ser nulos -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
