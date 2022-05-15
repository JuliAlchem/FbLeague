@extends("admin.index")
@section("crud")

<div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Create new player
            </h1>

            @if (session('info'))
            <div class="bg-blue-100  border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{session('info')}}</p>
            </div>
            @endif
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            
          {!! Form::open( [ 'route' => 'admin.players.store' ] ) !!}

          <!-- Name -->
          <div>
            {!! Form::label('user_id', 'User_id', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
            {!! Form::number('user_id', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>
          @error('user_id')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror
          <!-- Team -->
          <div>
          {!! Form::label('team_id', 'Team_id', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('team_id', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('team_id')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror
          <!-- Position -->
          <div>
            {!! Form::label('position', 'Position', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
            {!! Form::text('position', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('position')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror
          <!-- Goals -->
          <div>
          {!! Form::label('goals', 'Goals', ['class' => 'block text-sm font-bold text-gray-700' ]) !!}
          {!! Form::number('goals', null, ['class' => 'block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' ]) !!}
          </div>

          @error('goals')
              <span class='text-red-800 text-sm'>{{$message}}</span>
          @enderror    

           <!-- Buttons -->
           <div class="flex items-center justify-start mt-4 gap-x-2">
           {!! Form::submit('Save', ['class' => 'px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300"' ]) !!}
           <a href="{{route('admin.players.index')}}"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </a>
           </div>

  
          </div>
        </div>
      </div>
    </div>

@endsection