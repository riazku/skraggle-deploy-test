<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Laravel App</title>

</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body>
    <div class="flex ">


        <!-- Main Content -->
        <div class="flex-1">
            <div class="container mx-auto p-6">
                <!-- Overview Header -->
                <div class="flex gap-x-5 items-center mb-8 pb-4">
                    <h1 class="text-3xl font-bold">Overview</h1>
                    <div class="flex items-center space-x-4">

                        <div class="flex items-center bg-gray-100 rounded-md px-3 py-1">
                        <input type="date" 
                            class="bg-gray-100 rounded-md px-3 py-1 text-sm w-32 appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500"
                            value="{{ date('Y-m-d') }}"
                        >
                        </div>
        
                    
                        <span class="text-sm text-gray-600">To</span>

                        <div class="flex items-center bg-gray-100 rounded-md px-3 py-1">
                            
                        <input 
                            type="date" 
                            class="bg-gray-100 rounded-md px-3 py-1 text-sm w-32 appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500"
                            value="{{ date('Y-m-d') }}"
                        >

                        </div>
                    </div>
                </div>

                <!-- Numbered Sections -->
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class=" flex items-center gap-x-2 justify-between">
                             <div class="bg-[#551895] text-white rounded-lg h-14 w-10 flex items-center justify-center text-sm">1</div>

                            <div class="bg-[#EEEAFF] flex items-center w-full justify-between p-4 rounded">

                            <span class="font-medium ">Platform overview and how it works?</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-purple-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                              </svg>
                            </div>

                         
                    </div>



                    <div class=" flex items-center gap-x-2 justify-between">
                        <div class="bg-[#551895] text-white rounded-lg h-14 w-10 flex items-center justify-center text-sm">2</div>

                       <div class="bg-[#EEEAFF] flex items-center w-full justify-between p-4 rounded">

                       <span class="font-medium ">What can you do with us?</span>
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-purple-700">
                           <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                         </svg>
                       </div>

                    
               </div>



               <div class=" flex items-center gap-x-2 justify-between">
                <div class="bg-[#551895] text-white rounded-lg h-14 w-10 flex items-center justify-center text-sm">3</div>

               <div class="bg-[#EEEAFF] flex items-center w-full justify-between p-4 rounded">

               <span class="font-medium ">Getting started with campaigns</span>
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-purple-700">
                   <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                 </svg>
               </div>

            
       </div>




       <div class=" flex items-center gap-x-2 justify-between">
           <div class="bg-[#551895] text-white rounded-lg h-14 w-10 flex items-center justify-center text-sm">4</div>

          <div class="bg-[#EEEAFF] flex items-center w-full justify-between p-4 rounded">

          <span class="font-medium ">First  steps with our platform.</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-purple-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </div>


       </div>
                </div>

                <!-- Lets Start Section -->
                <h2 class="text-xl font-semibold mb-4">Lets Start</h2>
                <div class="border p-6 rounded-lg border-gray-200 mb-8">
                    <p class="mb-4">Learn how to get out of our software</p>
                    <div class="space-y-4">
                        <div class="bg-[#EEEAFF] p-4 rounded">
                            <p><span class="font-medium text-[#551895]">Import users. <br></span> Got to <a href="#" class="text-blue-600 underline">import users</a> where you can add existing emails from CSV files, Mailchimp, or manually copy-paste.</p>
                        </div>
                        <div class="bg-[#EEEAFF] p-4 rounded">
                            <p><span class="font-medium text-[#551895]">Send your first newsletter. <br></span> Having subscribers in our system allows you to send your <a href="#" class="text-blue-600 underline">first newsletter</a></p>
                        </div>
                        <div class="bg-[#EEEAFF] p-4 rounded">
                            <p><span class="font-medium text-[#551895]">Create your first automation. <br></span> Having subscribers in our system allows you to send your <a href="#" class="text-blue-600 underline">automation</a></p>
                        </div>
                        <div class="bg-[#EEEAFF] p-4 rounded">
                            <p><span class="font-medium text-[#551895]" >Setup your first email collector. <br></span> Having subscribers in our system allows you to send your <a href="#" class="text-blue-600 underline">email collector</a></p>
                        </div>
                    </div>
                </div>

                <!-- View Report Button -->
                <button class="bg-[#CABCF8] text-[#551895] px-4 py-2 rounded  ">View Report</button>
            </div>
        </div>
    </div>
</body>
</html>



















</body>
</html>