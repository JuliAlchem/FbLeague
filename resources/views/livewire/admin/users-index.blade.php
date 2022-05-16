<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
       
    <div class="flex justify-center">
    <div class="mt-1 mb-3 xl:w-96">
    <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
      <input wire:model='search' type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
      
    </div>
  </div>
</div>
  



@if($users->count())

<table class="min-w-full">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                ID</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Name</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Email</th>
             
              <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                Action</th>
            </tr>
          </thead>

          <tbody class="bg-white">

          @foreach($users as $user)

          <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $user->id}}
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $user->name}}
                </div>
              </td>

              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="flex items-center">
                  {{ $user->email}}
                </div>
              </td>
              

              
              <!-- Links
               Edit CHANDGED
               Destroy CHANDGED
              -->
              
              <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                <a href="{{ route ('admin.users.edit', $user) }}" class=" flex justify text-indigo-600 hover:text-indigo-900">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                  </svg>Assign role
                </a>
              


        </tr>
          @endforeach     
          </tbody>
        </table>
        @else
        <div class=" mb-1 bg-yellow-100  border-yellow-500 text-yellow-700 px-4 py-3" role="alert" >
            <p class="font-bold">User doesn't exist</p>
            </div>
        @endif
        </div>
    </div>
  </div>