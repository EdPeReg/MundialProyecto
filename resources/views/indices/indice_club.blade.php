@extends('layouts.layout')

@section('title','Clubs')

@section('content')
<div class="offset-1 col-10">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Clubs</strong>
        </h5>

        <div class="card-body px-lg-5">
            <div class="">
                <table width="100%" class="table table-bordered table-striped" id="dataTable" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                            <th>Nombre del club</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clubs as $club_item)
                            <tr>
                                <th><a href={{ route('ClubShow', $club_item) }}>{{ $club_item->Nombre }}</a></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection