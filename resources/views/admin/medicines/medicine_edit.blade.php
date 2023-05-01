@extends('layouts.admin')
@section('content')
    <div class="container px-6 mx-auto">
        <div class="px-4 py-3 mb-8 mt-8 bg-white rounded-lg shadow-md dark:bg-gray-800 flex flex-col my-2">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit medicine
            </h2>
            <form action="{{ route('admin.UpdateMedicine', ['medicine' => $medicine->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                                Category
                            </span>
                            <select name="category_id" id="category_id"
                                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                                <option value="" disabled>Select Category</option>
                                @foreach (\App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $medicine->category_id) selected @endif>
                                        {{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Name</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="name" value="{{ $medicine->name }}" placeholder="enter medicine name..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Store box</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="store_box" value="{{ $medicine->store_box }}" placeholder="store box..." />
                        </label>
                    </div>
                </div>


                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Purchase price</span>
                            <input type="number"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="purchase_price" value="{{ $medicine->purchase_price }}"
                                placeholder="Purchase price..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Selling price</span>
                            <input type="number"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="sell_price" value="{{ $medicine->sell_price }}" placeholder="Selling price..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Quantity</span>
                            <input type="number"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="qty" value="{{ $medicine->qty }}" placeholder="quantity..." />
                        </label>
                    </div>
                </div>


                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Generic name</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="generic_name" value="{{ $medicine->generic_name }}" placeholder="Generic name..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Company</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="company" value="{{ $medicine->company }}" placeholder="Company..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Effects</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="effects" value="{{ $medicine->effects }}" placeholder="effects..." />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Expire date</span>
                            <input type="date"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="expiry_date" value="{{ $medicine->expiry_date }}" placeholder="Expire date..." />
                        </label>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <button type="submit"
                            class="btn btn-primary px-3 mb-2 py-1 text-md font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
