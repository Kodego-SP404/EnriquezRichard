<ul class="flex flex-col md:flex-row px-4">
   @auth
      <li>
         <a href="/add/student" class="block py-2 pr-4 pl-3 hover:shadow-xl">
            <div class="flex">
            <svg class="fill-current text-amber-400" xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M18 14v-3h-3V9h3V6h2v3h3v2h-3v3Zm-9-2q-1.65 0-2.825-1.175Q5 9.65 5 8q0-1.65 1.175-2.825Q7.35 4 9 4q1.65 0 2.825 1.175Q13 6.35 13 8q0 1.65-1.175 2.825Q10.65 12 9 12Zm-8 8v-2.8q0-.85.438-1.563.437-.712 1.162-1.087 1.55-.775 3.15-1.163Q7.35 13 9 13t3.25.387q1.6.388 3.15 1.163.725.375 1.162 1.087Q17 16.35 17 17.2V20Zm2-2h12v-.8q0-.275-.137-.5-.138-.225-.363-.35-1.35-.675-2.725-1.013Q10.4 15 9 15t-2.775.337Q4.85 15.675 3.5 16.35q-.225.125-.362.35-.138.225-.138.5Zm6-8q.825 0 1.413-.588Q11 8.825 11 8t-.587-1.412Q9.825 6 9 6q-.825 0-1.412.588Q7 7.175 7 8t.588 1.412Q8.175 10 9 10Zm0-2Zm0 10Z"/></svg>
            Add New
         </div>
      </a>
            
      </li>
      <li>
         <form action="/logout" method="POST">
            @csrf
            <button class="block py-2 pr-4 pl-3 hover:shadow-xl ">
               <div class="flex">
               <svg class="fill-current text-amber-400"xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="M5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h7v2H5v14h7v2Zm11-4-1.375-1.45 2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5Z"/></svg>
               Logout
               </div>
            </button>
         </form>
      </li>    
 
   @else
          
      <li>
         <a href="/login" class="block py-2 pr-4 pl-3">Sign In</a>
      </li>
      <li>
         <a href="/register" class="block py-2 pr-4 pl-3">Sign Up</a>
      </li>
   @endauth
</ul>