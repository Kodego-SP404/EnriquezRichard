@include('partials.header')
<?php $array = array('title' => 'Student System') ;?>
<x-nav :data="$array"/>


<header class="max-w-lg mx-auto mt-20">
   <a href="#">
      <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
   </a>
</header>
 
<section class="mt-10">

   <form class="w-5/12 mx-auto mb-3" type="GET" action="/search" method="GET">   
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
          </div>
          <input name="query" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search student name" required>
          <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-4 py-2 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Search</button>
      </div>
  </form>

   <div class="overflow-x-auto relative rounded">
      <table class="w-96 mx-auto text-sm text-left text-white">
         <thead class="text-xs text-gray-300 uppercase bg-black bg-opacity-70">
            <tr>
               <th scope="col" class="py-3 px-6">
                  First Name
               </th>
               <th scope="col" class="py-3 px-6">
                  Last Name
               </th>
               <th scope="col" class="py-3 px-6">
                  Email
               </th>
               <th scope="col" class="py-3 px-6">
                  Age
               </th>
               <th scope="col" class="py-3 px-6">
                  Action
               </th>
            </tr>
         </thead>

         <tbody>
            @foreach ($students as $student)
            <tr class="bg-black bg-opacity-50 border-b text-white">
               <td class="py-4 px-6">
                  {{ $student-> first_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> last_name }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> email }}
               </td>
               <td class="py-4 px-6">
                  {{ $student-> age }}
               </td>   
               <td class="py-2 px-6">
                  <div>
                  <a href="/student/{{$student->id}}" class="bg-amber-600 hover:bg-amber-400 text-white px-4 py-1 rounded hover:shadow-xl transitionduration-200">Edit</a>
                  </div>
                  <form action="/student/{{$student->id}}" method="POST">
                     @method('delete')
                     @csrf
                     <button class="w-full mt-2 bg-red-600 hover:bg-red-400 text-white py-1 rounded shadow-lg hover:shadow-xl transitionduration-200" type="submit">Delete</button>
                  </form>

               </td>          
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="container px-28 py-3">
         {{$students->links()}}
      </div>
   </div>
</section>

@include('partials.footer')

