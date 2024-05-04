@extends('layouts.admin')
@section('content')
    <div class="container px-6 mx-auto">
        <div class="px-4 py-3 mb-8 mt-8 bg-white rounded-lg shadow-md dark:bg-gray-800 flex flex-col my-2">
            <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Edit Customer
            </h2>
            <form action="{{ route('admin.UpdateCustomer', ['customer' => $customer->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                                Customer Name
                            </span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="name" placeholder="enter customer name..." value="{{$customer->name}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Phone</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="phone" placeholder="enter customer phone..." value="{{$customer->phone}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Email</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="email" placeholder="customer's email..." value="{{$customer->email}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">TIN No</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="tin" placeholder="enter customer TIN..." value="{{$customer->tin}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">VRN</span>
                            <input
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="vrn" placeholder="enter customer VRN..." value="{{$customer->vrn}}" />
                        </label>
                    </div>
                </div>


                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">City</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="city" placeholder="customer's city..." value="{{$customer->city}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Country</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="country" placeholder="customer's Country..." value="{{$customer->country}}" />
                        </label>
                    </div>

                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Address</span>
                            <input type="text"
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                name="address" placeholder="customer's Address..." value="{{$customer->address}}" />
                        </label>
                    </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <button type="submit"
                            class="btn btn-primary px-3 mb-2 py-1 text-md font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
