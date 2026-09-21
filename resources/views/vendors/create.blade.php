<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Vendor</title>
<link rel="stylesheet" href="{{ asset('build/assets/app-DFkjFGaM.css') }}">
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto px-4 py-10">

    <div class="bg-white rounded-xl shadow p-8">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">
                Add New Vendor
            </h1>

            <p class="text-gray-500 mt-1">
                Register a new vendor into the system.
            </p>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-50 p-4 text-red-700">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('vendors.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="block mb-2 font-medium">
                        Vendor Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="w-full rounded-lg border-gray-300"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-lg border-gray-300"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Phone
                    </label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        class="w-full rounded-lg border-gray-300"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Company Name
                    </label>

                    <input
                        type="text"
                        name="company_name"
                        value="{{ old('company_name') }}"
                        class="w-full rounded-lg border-gray-300"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Vendor Type
                    </label>

                    <select
                        name="type"
                        class="w-full rounded-lg border-gray-300"
                        required
                    >
                        <option value="">Select Type</option>

                        <option
                            value="product"
                            @selected(old('type') === 'product')
                        >
                            Product
                        </option>

                        <option
                            value="consultant"
                            @selected(old('type') === 'consultant')
                        >
                            Consultant
                        </option>
                    </select>
                </div>

                <div>
                    <label class="block mb-2 font-medium">
                        Status
                    </label>

                    <select
                        name="status"
                        class="w-full rounded-lg border-gray-300"
                    >
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>

                <div class="md:col-span-2">

                    <label class="block mb-2 font-medium">
                        Address
                    </label>

                    <textarea
                        name="address"
                        rows="4"
                        class="w-full rounded-lg border-gray-300"
                    >{{ old('address') }}</textarea>

                </div>

            </div>

            <div class="flex justify-end gap-3 mt-8">

                <a
                    href="{{ route('vendors.index') }}"
                    class="px-5 py-2.5 rounded-lg border"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-5 py-2.5 rounded-lg bg-black text-white"
                >
                    Add Vendor
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>