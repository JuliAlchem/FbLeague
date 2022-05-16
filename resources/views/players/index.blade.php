
@extends('layouts.app')
@section('content')

<div class="container max-w-7xl mx-auto mt-8">
  <div class="mb-4">
    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">Players</h1>
    <div class="flex justify-end">
      
    </div>
  </div>
      <table class="min-w-full">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Name</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Team</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Position</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Goals</th>
            </tr>
          </thead>
          <tbody class="bg-white">

      @foreach ($players as $player)
      
      <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $player->user->name}} 
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $player->team->name}}
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $player->position}}
                </div>
              </td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $player->goals}}
                </div>
              </td> 

              @endforeach   
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection






  
    

          

       

       
     
 

