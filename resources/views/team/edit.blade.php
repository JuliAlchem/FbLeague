@extends("dashboard")
@section("content")

<!-- Create Post -->
<div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Create Post
            </h1>
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="/teams/{{$team->id}}">
                @csrf
                @method("PUT")
              <!-- Name -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Name
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="name" name="name" value="{{$team->name}}" />
              </div>

              
              <!-- Played -->

              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                Played
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="number" name="played" value="{{$team->played}}" />
              </div>
             <!-- Won -->

             <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                Won
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                   type="number" name="won" value="{{$team->won}}" />
              </div>

             <!-- Drawn -->
             <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                Drawn
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                   type="number" name="drawn" value="{{$team->drawn}}" />
              </div>
              <!-- Lost -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                Lost
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                   type="number" name="lost" value="{{$team->lost}}" />
              </div>
              <!-- Points -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                Points
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                   type="number" name="points" value="{{$team->points}}" />
              </div>
              
              

              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Save
                </button>
                <a href="/teams"
                  class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Cancel
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

@endsection