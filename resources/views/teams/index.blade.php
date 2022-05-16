@extends('layouts.app')
@section('content')

<div class="container max-w-7xl mx-auto mt-8">
  <div class="mb-4">
    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Teams </h1>
    <div class="flex justify-end">
      
    </div>
    @if (session('info'))
            <div class="bg-blue-100  border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{session('info')}}</p>
            </div>
            @endif
  </div>

<!-- Link create changed -->

  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Name</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Played</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Won</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Drawn</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Lost</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Points</th>
            
            </tr>
          </thead>

          <tbody class="bg-white">

          @foreach($teams as $team)

          <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->name}}
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->played}}
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->won}}
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->drawn}}
                </div>
              </td> 

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->lost}}
                </div>
              </td> 

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $team->points}}
                </div>
              </td> 
              
             


        </tr>
          @endforeach     
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection