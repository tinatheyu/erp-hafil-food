@extends('welcome')

@section('content')
    <div class="bg-gray-100 min-h-screen">
        <!-- Form -->
        <section class="max-w-screen-7xl mx-auto px-6 mt-10">

            <form class="bg-white rounded-xl shadow-sm p-8 w-full">

                <!-- Header Title -->
                <section class="max-w-screen-7xl mx-auto mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Product Name</h1>
                </section>

                <!-- Radio Options -->
                <section class="max-w-screen-7xl mx-auto mb-10">
                    <div class="flex items-center gap-8">

                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="radio" name="product_type" checked
                                class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Can be sold</span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="radio" name="product_type" class="w-4 h-4 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm text-gray-700">Can be purchased</span>
                        </label>

                    </div>
                </section>

                <!-- nav -->
                <div class="flex items-center gap-8">
                    <label class="text-sm font-medium text-gray-700 cursor-pointer">
                        General Information
                    </label>

                    <label class="text-sm font-medium text-gray-700 cursor-pointer">
                        Attributes & Variants
                    </label>

                    <label class="text-sm font-medium text-gray-700 cursor-pointer">
                        Inventory
                    </label>
                </div>

                <hr class="my-8 border-gray-200">

                <!-- Grid Form -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Product Type -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Product Type
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
                            Barcode
                        </label>
                        <input type="number" placeholder="Barcode"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Product Category -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Product Category
                        </label>
                        <select
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                            <option selected>Select Category</option>
                            <option>Category A</option>
                            <option>Category B</option>
                        </select>
                    </div>

                    <!-- Internal Reference -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Internal Reference
                        </label>
                        <input type="text" placeholder="Internal Reference"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Sales Price -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Sales Price
                        </label>
                        <input type="number" placeholder="Sales Price"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Product Tag -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Product Tag
                        </label>
                        <input type="text" placeholder="Product Tag"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Cost Price -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Cost Price
                        </label>
                        <input type="number" placeholder="Cost Price"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Company -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">
                            Company
                        </label>
                        <input type="text" placeholder="Company"
                            class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                </div>

                <!-- Notes -->
                <div class="mt-6">
                    <label class="block mb-2 text-sm font-medium text-gray-700">
                        Notes
                    </label>
                    <textarea rows="4"
                        class="w-full rounded-lg border border-gray-300 p-2.5 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Write notes here..."></textarea>
                </div>

                <!-- Submit -->
                <div class="mt-8">
                    <button type="submit"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                        Submit
                    </button>
                </div>

            </form>
        </section>
    </div>
@endsection
