<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
<!-- For Live Production -->
    <!-- <title>Vendors</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app-DFkjFGaM.css') }}"> -->


    <!-- For Local -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 ">

<div class="max-w-7xl mx-auto px-4 py-10 border-2 border-red-500">

    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

        <div>
            <h1 class="text-3xl font-bold text-gray-900">
                Vendors
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your product and consultant vendors.
            </p>
        </div>

        <a
            href="{{ route('vendors.create') }}"
            class="inline-flex justify-center px-5 py-3 rounded-lg bg-black text-white"
        >
            + Add Vendor
        </a>

    </div>

    @if(session('success'))

        <div class="mb-6 rounded-lg bg-green-50 p-4 text-green-700">
            {{ session('success') }}
        </div>

    @endif

    <div class="bg-white  rounded-xl shadow">

    <div class="">
   
<!-- Header -->
        <div class="flex p-7 items-center justify-between">
        <!-- left side -->
            <div class="border-l-4 pl-5 border-blue-700">
        <h1 class="text-3xl font-bold text-gray-900">Vendor Management</h1>
        <span class="text-gray-500 mt-1">Total vendors and active vendors at a glance</span>
</div>
<!-- vendor count card -->

<div class=" flex items-center gap-3">
<div class=" rounded-lg flex py-2 px-4   shadow-inner shadow-slate-200 items-center gap-3">
<span data-lucide="UsersRound" class="w-10 h-10 text-blue-600 bg-blue-100 p-2 rounded-lg"></span>
<div>
<p class="text-sm text-gray-500">Total Vendors</p>
    <p class="text-xl font-bold">{{$totalVendors}}</p>
</div>

</div>
<div class=" rounded-lg flex py-2 px-4   shadow-inner shadow-slate-200 items-center gap-3">
<span data-lucide="CircleCheck" class="w-10 h-10 text-green-600 bg-green-100 p-2 rounded-lg"></span>
<div>
<p class="text-sm text-gray-500">Active Vendors</p>
    <p class="text-xl font-bold">{{$activeVendors}}</p>
</div>
</div>
</div>
<!-- vendor Add button -->
<div>
<a
            href="{{ route('vendors.create') }}"
            class="inline-flex justify-center px-6 py-3 shadow-md shadow-slate-500 rounded-lg bg-blue-600 text-white  hover:shadow-lg duration-300"
        >
            + Add Vendor
        </a>
</div>
</div>

</div>



<div class="p-5 border-t-2  border-slate-200">

            <form
                action="{{ route('vendors.index') }}"
                method="GET"
                class="grid grid-cols-1 md:grid-cols-5 gap-4"
            >

                <div class="md:col-span-2 px-5 py-2.5  border p-2 shadow-xs rounded-md border-slate-300 flex gap-2 items-center hover:shadow-md duration-400">
                    <span data-lucide='Search' class="w-4 opacity-50"></span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search by name, email or company..."
                        class="w-full outline-none"
                    >

                </div>

                <div class=" px-5 py-2.5 rounded-md  border border-slate-300 shadow-xs hover:shadow-md duration-400">

                    <select
                        name="type"
                        class="w-full rounded-lg border-gray-300"
                    >

                        <option value="">All Types</option>

                        <option
                            value="product"
                            @selected(request('type') === 'product')
                        >
                            Product
                        </option>

                        <option
                            value="consultant"
                            @selected(request('type') === 'consultant')
                        >
                            Consultant
                        </option>

                    </select>

                </div>

                <div class="px-5 py-2.5 rounded-md  border border-slate-300 shadow-xs hover:shadow-md duration-400">

                    <select
                        name="status"
                        class="w-full rounded-lg border-gray-300"
                    >

                        <option value="">All Status</option>

                        <option
                            value="active"
                            @selected(request('status') === 'active')
                        >
                            Active
                        </option>

                        <option
                            value="inactive"
                            @selected(request('status') === 'inactive')
                        >
                            Inactive
                        </option>

                    </select>

                </div>

                
                    <a
                        href="{{ route('vendors.index') }}"
                        class="px-5 py-2.5 rounded-md  border border-slate-300 flex gap-2 items-center justify-center shadow-xs hover:shadow-md duration-400"
                    >
                      <span data-lucide="RotateCw" class="w-4 h-auto"></span>Clear Filters
                    </a>


                <div class="md:col-span-4 flex gap-3">

                    <button
                        type="submit"
                        class="px-5 py-2.5 rounded-lg bg-black text-white"
                    >
                        Search
                    </button>

                </div>

            </form>

        </div>
</div>

<!-- Down Side -->
        

        <div class="overflow-x-auto ">

            <table class="w-full text-left">

                <thead class="bg-gray-50 border-b">

                    <tr>

                        <th class="px-6 py-4 font-semibold">
                            Vendor
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Company
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Type
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Contact
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Status
                        </th>

                        <th class="px-6 py-4 font-semibold">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody class="divide-y">

                    @forelse($vendors as $vendor)

                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4">

                                <a 
    href="{{ route('vendors.show', $vendor) }}" 
    class="font-medium text-blue-600 hover:underline"
>
    {{ $vendor->name }}
</a>

                                <div class="text-sm text-gray-500">
                                    {{ $vendor->email }}
                                </div>

                            </td>

                            <td class="px-6 py-4">
                                {{ $vendor->company_name }}
                            </td>

                            <td class="px-6 py-4">

                                <span
                                    class="px-3 py-1 rounded-full text-sm
                                    {{ $vendor->type === 'product'
                                        ? 'bg-blue-100 text-blue-700'
                                        : 'bg-purple-100 text-purple-700'
                                    }}"
                                >
                                    {{ ucfirst($vendor->type) }}
                                </span>

                            </td>

                            <td class="px-6 py-4">
                                {{ $vendor->phone }}
                            </td>

                            <td class="px-6 py-4">

                                <span
                                    class="px-3 py-1 rounded-full text-sm
                                    {{ $vendor->status === 'active'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-gray-100 text-gray-700'
                                    }}"
                                >
                                    {{ ucfirst($vendor->status) }}
                                </span>

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex gap-2">

                                    <a
                                        href="{{ route('vendors.edit', $vendor) }}"
                                        class="text-blue-600 hover:underline"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('vendors.destroy', $vendor) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="text-red-600 hover:underline"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="6"
                                class="px-6 py-12 text-center text-gray-500"
                            >
                                No vendors found.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        @if($vendors->hasPages())

            <div class="p-5 border-t">
                {{ $vendors->links() }}
            </div>

        @endif

    </div>

</div>

</body>
</html>