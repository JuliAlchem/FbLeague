@extends('layouts.app')
@section('content')

         
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Register</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                        <input  id="cus_name" name="cus_name" type="text" required="" placeholder="Your Name" aria-label="Name">
                    </div>
                    <div class="mt-2">
                        <label  for="cus_email">Email</label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Your Email" aria-label="Email">
                    </div>
                    
    
                   
                
           
@endsection