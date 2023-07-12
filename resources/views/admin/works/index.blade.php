@extends('admin.layouts.base')

@section('contents')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Link</th>
                <th scope="col">Link Repo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($works as $work)
                <tr>
                    <th>{{ $work->title }}</th>
                    <th>
                        <a href="{{ $work->link }}">
                            Link Lavoro
                        </a>
                    </th>
                    <th>
                        <a href="{{ $work->github }}">
                            Link Repo
                        </a>
                    </th>
                </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection