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
                                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Manufacturing
                                        Orders</a>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Add
                                        Manufacturing Order</span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </section>

                <!-- progress-bar -->
                <div>
                    <nav aria-label="Progress">
                        <ol class="flex justify-between text-sm">
                            <li class="flex flex-col items-center flex-1">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-blue-600">
                                    <span class="w-3 h-3 bg-blue-600 rounded-full"></span>
                                </div>

                                <span class="mt-2 font-medium text-blue-600">
                                    Draft
                                </span>
                            </li>



                            <li class="flex flex-col items-center flex-1">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-gray-200">
                                    <span class="w-3 h-3 bg-gray-200 rounded-full"></span>
                                </div>
                                <span class="mt-2 font-medium text-gray-200">Confirmed</span>
                            </li>


                            <li class="flex flex-col items-center flex-1">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-gray-200">
                                    <span class="w-3 h-3 bg-gray-200 rounded-full"></span>
                                </div>
                                <span class="mt-2 font-medium text-gray-400">Check Availability</span>
                            </li>

                            <li class="flex flex-col items-center flex-1">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-gray-200">
                                    <span class="w-3 h-3 bg-gray-200 rounded-full"></span>
                                </div>
                                <span class="mt-2 font-medium text-gray-400">In Progress</span>
                            </li>
                            <li class="flex flex-col items-center flex-1">
                                <div class="w-8 h-8 flex items-center justify-center rounded-full border-2 border-gray-200">
                                    <span class="w-3 h-3 bg-gray-200 rounded-full"></span>
                                </div>
                                <span class="mt-2 font-medium text-gray-400">Done</span>
                            </li>
                        </ol>
                    </nav>
                </div>

                <!-- Grid Form -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
                    <!-- Product Type -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Product
                        </label>
                        <select
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Select Product Type</option>
                            <option>Product Type 1</option>
                            <option>Product Type 2</option>
                        </select>
                    </div>

                    <!-- Barcode -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Bill of Material
                        </label>
                        <input type="text" placeholder="Bill of Material Number"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Internal Reference -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Quantity
                        </label>
                        <input type="number" placeholder="Quantity"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                </div>
                <!-- Table -->
                <section class="">
                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full text-sm text-left text-gray-700 border border-blue-100 rounded-lg overflow-hidden">
                            <thead class="text-m bg-blue-50 text-blue-700">
                                <tr>
                                    <th class="px-6 py-3">Product</th>
                                    <th class="px-6 py-3">To Consume</th>
                                    <th class="px-6 py-3 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white hover:bg-blue-50 transition">
                                    <td class="px-6 py-4 font-medium">Apple MacBook Pro 17"</td>
                                    <td class="px-6 py-4">Silver</td>
                                    <td class="px-6 py-4 text-right">
                                        <button type="button">
                                            <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 hover:text-red-700" />
                                        </button>
                                    </td>
                                </tr>

                                <tr class="bg-blue-50/40 hover:bg-blue-100 transition">
                                    <td class="px-6 py-4 font-medium">Microsoft Surface Pro</td>
                                    <td class="px-6 py-4">White</td>
                                    <td class="px-6 py-4 text-right">
                                        <button type="button">
                                            <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 hover:text-red-700" />
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </section>

                <!-- button-->
                <div class="flex items-center gap-4 mt-8">
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white
               bg-blue-600 rounded-lg hover:bg-blue-700
               focus:ring-4 focus:ring-blue-300">
                        Save to Draft
                    </button>

                    <button type="button"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-blue-600
               border border-blue-600 rounded-lg hover:bg-blue-50
               focus:ring-4 focus:ring-blue-300">
                        Cancel to Order
                    </button>
                </div>

            </form>
        </section>
    </div>
@endsection
