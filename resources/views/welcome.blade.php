<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incident Management API</title>
    <!-- Using Tailwind CSS via CDN to ensure styles work immediately on Railway -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen py-10 px-4 flex items-center justify-center">

    <div class="max-w-4xl w-full bg-white p-8 rounded-xl shadow-lg border border-gray-200">
        
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-indigo-600 mb-2">Welcome to Laravel</h1>
            <h2 class="text-2xl font-semibold text-gray-700">Lets Get Started</h2>
            <p class="mt-4 text-gray-600">
                Heres our Custom API for Incident Management. To retreive such JSON Print Datas from our database, 
                Paste this Link on the search Bar.
            </p>
        </div>

        <!-- API Links Section -->
        <div class="space-y-4 mb-10">
            <h3 class="text-xl font-bold text-gray-800 border-b pb-2">API Endpoints</h3>
            
            <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
                <p class="font-bold text-sm text-gray-500 uppercase">Fetch all Users</p>
                <a href="https://incidentmanagementapi-production.up.railway.app/api/users" target="_blank" class="text-indigo-500 hover:text-indigo-700 hover:underline break-all">
                    https://incidentmanagementapi-production.up.railway.app/api/users
                </a>
            </div>

            <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
                <p class="font-bold text-sm text-gray-500 uppercase">Fetch all Incidents</p>
                <a href="https://incidentmanagementapi-production.up.railway.app/api/incidents" target="_blank" class="text-indigo-500 hover:text-indigo-700 hover:underline break-all">
                    https://incidentmanagementapi-production.up.railway.app/api/incidents
                </a>
            </div>

            <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
                <p class="font-bold text-sm text-gray-500 uppercase">Fetch all Incident Types</p>
                <a href="https://incidentmanagementapi-production.up.railway.app/api/incident-types" target="_blank" class="text-indigo-500 hover:text-indigo-700 hover:underline break-all">
                    https://incidentmanagementapi-production.up.railway.app/api/incident-types
                </a>
            </div>
        </div>

        <!-- Downloads Section -->
        <div class="border-t pt-8 text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-6">Project Resources</h3>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <!-- SQL Download Button -->
                <a href="https://drive.google.com/drive/folders/1zrKMa046u0QBpfUmCcKfpZdrt8hLkkN1?usp=sharing" target="_blank" class="flex items-center justify-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow hover:bg-green-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                    </svg>
                    Download SQL Dump
                </a>

                <!-- JSON Download Button -->
                <a href="https://drive.google.com/file/d/1L6nZ4ycRc6WfVHazCpNRQscaO9SmPwLo/view?usp=sharing" target="_blank" class="flex items-center justify-center px-6 py-3 bg-orange-600 text-white font-semibold rounded-lg shadow hover:bg-orange-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download JSON Schema
                </a>
            </div>
        </div>

        <div class="mt-10 text-center text-xs text-gray-400">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

    </div>
</body>
</html>