<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 10 Livewire CRUD Operation Example</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        @livewireStyles
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2>Laravel 10 Livewire CRUD Operation Example</h2>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @livewire('posts')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @livewireScripts
    </body>
</html>
