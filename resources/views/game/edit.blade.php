@extends("dashboard")
@section("crud")

<!-- Create Post -->
<div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Edit Game
            </h1>
          </div>

          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="/games/{{$game->id}}">
                @csrf
                @method("PUT")
              <!-- Date -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Date
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="date" name="date" value="{{$game->date}}" />
              </div>

              
              <!-- Team 1 -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Team 1 
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="number" name="team1_id" value="{{$game->team1_id}}" />
              </div>
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Result
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="number" name="team1_result" value="{{$game->team1_result}}" />
              </div>

              <!-- Team 2 -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Team 2
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="number" name="team2_id" value="{{$game->team2_id}}" />
              </div>

              <div>
                <label class="block text-sm font-bold text-gray-700" for="title">
                  Result
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="number" name="team2_result" value="{{$game->team2_result}}" />
              </div>

              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Save
                </button>
                <a href="/games"
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