@extends("admin.index")
@section("crud")

<div class="container max-w-7xl mx-auto mt-8">
  <div class="mb-4">
    <h1 class="font-serif text-3xl font-bold underline decoration-gray-400"> Users </h1>

    @if (session('info'))
            <div class="bg-blue-100  border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{session('info')}}</p>
            </div>
            @endif

    
    @if (session('info'))
            <div class="bg-blue-100  border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{session('info')}}</p>
            </div>
            @endif
  </div>

<!-- Link create changed -->

  <div class="flex flex-col"> 
    <div class=" overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class=" inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
       
      <div class="  w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <div >
                <p class="block text-lg font-bold text-gray-700" >
                  Name:
                </p>

                <p class="block w-full mt-1 ">
                  {{$user->name}}
                  </p>
                
                  <h2 class="my-2 block text-lg font-bold text-gray-700">
              Roles
            </h2>
                {!! Form::model($user, ['route'=> ['admin.users.update', $user ], 'method'=> 'put']) !!}

                @foreach($roles as $role)

                <div >
           {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer']) !!}
           {{$role->name}}
                </div>

                @endforeach

                  <!-- Buttons -->
           <div class="flex items-center justify-start mt-4 gap-x-2">
           {!! Form::submit('Save', ['class' => 'px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300"' ]) !!}
           <a href="{{route('admin.users.index')}}"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </a>
           </div>

                {!! Form::close() !!}
            </div>

        </div>

      </div>
    </div>
  </div>
</div>

@endsection