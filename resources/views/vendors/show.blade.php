<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $vendor->name }}</title>
<link rel="stylesheet" href="{{ asset('build/assets/app-DFkjFGaM.css') }}">
</head>

<body class="bg-gray-100">

<div class="max-w-3xl mx-auto px-4 py-10">

    <div class="bg-white rounded-xl shadow p-8">

        <div class="flex justify-between items-start mb-8">

            <div>

                <h1 class="text-3xl font-bold">
                    {{ $vendor->name }}
                </h1>

                <p class="text-gray-500">
                    {{ $vendor->company_name }}
                </p>

            </div>

            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700">
                {{ ucfirst($vendor->type) }}
            </span>

        </div>

        <div class="space-y-5">

            <div>
                <p class="text-sm text-gray-500">
                    Email
                </p>

                <p class="font-medium">
                    {{ $vendor->email }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Phone
                </p>

                <p class="font-medium">
                    {{ $vendor->phone }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Address
                </p>

                <p class="font-medium">
                    {{ $vendor->address ?? 'Not provided' }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">
                    Status
                </p>

                <p class="font-medium">
                    {{ ucfirst($vendor->status) }}
                </p>
            </div>

        </div>

        <div class="mt-8">

            <a
                href="{{ route('vendors.index') }}"
                class="px-5 py-2.5 rounded-lg border"
            >
                Back to Vendors
            </a>

        </div>

    </div>

</div>

</body>

</html>