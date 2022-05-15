@extends("admin.index")
@section("crud")

      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 ">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Edit team
            </h1>
            
            @if (session('info'))
            <div class="bg-blue-100  border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{session('info')}}</p>
            </div>
            @endif

          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">

            {!! Form::model($team, [ 'route' => ['admin.teams.update', $team],'method'=> 'put'] ) !!}

            <!-- Name -->
          <div>
            {!! Form::label('name', 'Name', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
            {!! Form::text('name', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('name')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

          <!-- Played -->
          <div>
          {!! Form::label('played', 'Played', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('played', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('played')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

          <!-- Won -->
          <div>
          {!! Form::label('won', 'Won', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('won', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('won')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

          <!-- Drawn -->
          <div>
          {!! Form::label('drawn', 'Drawn', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('drawn', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('drawn')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

          <!-- Lost -->
          <div>
          {!! Form::label('lost', 'Lost', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('lost', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>
          @error('lost')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

          <!-- Points -->
           <div>
           {!! Form::label('points', 'Points', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
           {!! Form::number('points', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
           </div>
           @error('points')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror

           <!-- Buttons -->
           <div class="flex items-center justify-start mt-4 gap-x-2">
           {!! Form::submit('Edit', ['class' => 'px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300"' ]) !!}
           <a href="{{route('admin.teams.index')}}"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </a>
           </div>
            
           {!! Form::close() !!}
                
            
            
          </div>
        </div>
      </div>
    
@endsection