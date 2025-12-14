@extends('welcome')

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <!-- Form -->
        <section class="max-w-screen-7xl mx-auto px-6 mt-10">

            <form class="bg-white rounded-xl shadow-sm p-8 w-full space-y-4">
                <section class="max-w-screen-7xl mx-auto mb-8">
                    @include('components.header')
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="#"
                                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a href="#"
                                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Bill
                                        of Material</a>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Add Bill
                                        of Material</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </section>

                <!-- Header Title -->
                <section class="max-w-screen-7xl mx-auto mb-2 gap-2">
                    <h1 class="text-3xl font-bold text-gray-900"> BoM Overview</h1>
                </section>

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                    <h1 class="text-3xl font-bold text-gray-900"> [PAN - 001] Pancake</h1>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">1.00</h1>
                        <p class="text-base text-heading text-gray-300">Quantity</p>
                    </div>
                </div>


                <section>
                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full text-sm text-left text-gray-700 border border-blue-100 rounded-lg overflow-hidden">
                            <thead class="font-medium text-blue-700 bg-blue-50">
                                <tr>
                                    <th class="px-6 py-3">Component</th>
                                    <th class="px-6 py-3">Quantity</th>
                                    <th class="px-6 py-3">BoM Cost</th>
                                    <th class="px-6 py-3">Product Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white hover:bg-blue-50 transition">
                                    <th class="px-6 py-4 font-medium text-gray-900">
                                        Apple MacBook Pro 17"
                                    </th>
                                    <td class="px-6 py-4">Silver</td>
                                    <td class="px-6 py-4">Silver</td>
                                    <td class="px-6 py-4">Silver</td>
                                </tr>

                                <tr class="bg-blue-50/40 hover:bg-blue-100 transition">
                                    <th class="px-6 py-4 font-medium text-gray-900">
                                        Microsoft Surface Pro
                                    </th>
                                    <td class="px-6 py-4">White</td>
                                    <td class="px-6 py-4">White</td>
                                    <td class="px-6 py-4">White</td>
                                </tr>

                                <tr class="bg-white hover:bg-blue-50 transition">
                                    <th class="px-6 py-4 font-medium text-gray-900">
                                        Magic Mouse 2
                                    </th>
                                    <td class="px-6 py-4">Black</td>
                                    <td class="px-6 py-4">Black</td>
                                    <td class="px-6 py-4">Black</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

            </form>
        </section>
    </div>
@endsection
