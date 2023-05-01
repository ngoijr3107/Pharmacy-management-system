@extends('layouts.admin')
@section('content')
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Medicines
        </h2>

        <div>
            <button onclick="window.location='{{ route('admin.CreateMedicine') }}'"
                class="px-3 mb-2 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add medicine
            </button>
        </div>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Store box</th>
                            <th class="px-4 py-3">Purchase price</th>
                            <th class="px-4 py-3">Selling price</th>
                            <th class="px-4 py-3">Company</th>
                            <th class="px-4 py-3">Effects</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($medicines as $medicine)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">{{ $medicine->category->category_name }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->name }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->store_box }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->purchase_price }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->sell_price }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->company }}</td>
                                <td class="px-4 py-3 text-sm">{{ $medicine->effects }}</td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button
                                            onclick="window.location='{{ route('admin.EditMedicine', ['id' => $medicine->id]) }}'"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <i class="fa fa-pen"></i>
                                        </button>
                                        <form method="POST" action="{{ route('admin.DeleteMedicine', ['id' => $medicine->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12 p-2">
                    {{ $medicines->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection
