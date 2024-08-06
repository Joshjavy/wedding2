@extends('layouts.app')

@section('title', 'Admin')
@section('hscript')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">


@endsection
@section('content')
<nav class="flex py-3 ">
    <ul class="w-full flex justify-end m-auto pt-1 w-full">
    @if(auth()->check())
      <li class="text-sm py-1 px-4 rounded-md">
        <p class=" text-sm">Welcome <b>{{ auth()->user()->name }}</b></p>
      </li>
      <li>
        <a href="{{ route('login.destroy') }}" class="font-bold text-sm
        py-3 px-4 rounded-md">Log Out</a>
      </li>
    @endif
    </ul>
  </nav>
  
    <div class="w-full m-auto sm:w-full md:w-full lg:w-full xl:w-1/3 2xl:w-1/3 ">
        <div class="">
            <table id="table_id" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead>
                  <tr>
                    <th>firstname</th>
                    <th>Surname</th>
                    <th>Mobile</th>
                    <th>allergies</th>
                    <th>transport</th>
                    <th>song</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ( $registros as $registro )
                        <tr>
                            <td class="px-6 py-4">{{ $registro->firstname }}</td>
                            <td class="px-6 py-4">{{ $registro->Surname }}</td>
                            <td class="px-6 py-4">{{ $registro->Mobile }}</td>
                            <td class="px-6 py-4">{{ $registro->allergies }}</td>
                            <td class="px-6 py-4">{{ $registro->transport }}</td>
                            <td class="px-6 py-4">{{ $registro->song }}</td>
                        </tr>
                    @empty
                    <tr>
                        <td class="px-6 py-4" colspan="5">Aún no hay registros</td>
                        
                      </tr>
                    @endforelse
                  
                </tbody>
              </table>
        </div>

    </div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
      $('#table_id').DataTable();
    });
    </script>
@endsection
