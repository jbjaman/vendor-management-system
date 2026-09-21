<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Vendors</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="max-w-7xl mx-auto px-4 py-10">

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

    <div class="bg-white rounded-xl shadow">

        <div class="p-5 border-b">

            <form
                action="{{ route('vendors.index') }}"
                method="GET"
                class="grid grid-cols-1 md:grid-cols-4 gap-4"
            >

                <div class="md:col-span-2">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search by name, email or company..."
                        class="w-full rounded-lg border-gray-300"
                    >

                </div>

                <div>

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

                <div>

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

                <div class="md:col-span-4 flex gap-3">

                    <button
                        type="submit"
                        class="px-5 py-2.5 rounded-lg bg-black text-white"
                    >
                        Search
                    </button>

                    <a
                        href="{{ route('vendors.index') }}"
                        class="px-5 py-2.5 rounded-lg border"
                    >
                        Reset
                    </a>

                </div>

            </form>

        </div>

        <div class="overflow-x-auto">

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