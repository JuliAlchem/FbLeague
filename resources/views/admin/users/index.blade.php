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
  </div>

<!-- Link create changed -->

  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
       
        @livewire('admin.users-index')

      </div>
    </div>
  </div>
</div>

@endsection