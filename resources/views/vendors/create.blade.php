<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Vendor</title>

    <!-- For Live Production -->
<!-- 
    <link rel="stylesheet" href="{{ asset('build/assets/app-DFkjFGaM.css') }}"> 

    <script type="module" src="{{ asset('build/assets/app-B5rbnaEE.js') }}"></script> -->


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-gray-50">

    <div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Main Card -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

            <!-- Header -->
            <div class="border-b border-gray-200 px-6 py-6 sm:px-8">

                <div class="flex items-start gap-4">

                    <!-- Blue Accent -->
                    <div class="mt-1 h-14 w-1 rounded-full bg-blue-600"></div>

                    <div>
                        <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Add New Vendor
                        </h1>

                        <p class="mt-1 text-sm text-slate-500 sm:text-base">
                            Register a new vendor into the system.
                        </p>
                    </div>

                </div>

            </div>


            <!-- Form -->
            <div class="px-6 py-7 sm:px-8 sm:py-8">

                <!-- Validation Errors -->
                @if ($errors->any())

                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4">

                        <div class="flex gap-3">

                            <i
                                data-lucide="circle-alert"
                                class="mt-0.5 h-5 w-5 shrink-0 text-red-600"
                            ></i>

                            <div>

                                <p class="font-semibold text-red-800">
                                    Please fix the following errors:
                                </p>

                                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-red-700">

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif


                <form action="{{ route('vendors.store') }}" method="POST">

                    @csrf


                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">


                        <!-- Vendor Name -->
                        <div>

                            <label
                                for="name"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Vendor Name
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="user-round"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Enter vendor name"
                                    class="w-full rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Email -->
                        <div>

                            <label
                                for="email"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Email
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="mail"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="vendor@example.com"
                                    class="w-full rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Phone -->
                        <div>

                            <label
                                for="phone"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Phone
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="phone"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <input
                                    id="phone"
                                    type="text"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="+880 1XXXXXXXXX"
                                    class="w-full rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Company Name -->
                        <div>

                            <label
                                for="company_name"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Company Name
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="building-2"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <input
                                    id="company_name"
                                    type="text"
                                    name="company_name"
                                    value="{{ old('company_name') }}"
                                    placeholder="Enter company name"
                                    class="w-full rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Vendor Type -->
                        <div>

                            <label
                                for="type"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Vendor Type
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="briefcase-business"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <select
                                    id="type"
                                    name="type"
                                    class="w-full appearance-none rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-10 text-sm text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                    required
                                >

                                    <option value="">
                                        Select Type
                                    </option>

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

                                <i
                                    data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                            </div>

                        </div>


                        <!-- Status -->
                        <div>

                            <label
                                for="status"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Status
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="circle-check"
                                    class="pointer-events-none absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                                <select
                                    id="status"
                                    name="status"
                                    class="w-full appearance-none rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-10 text-sm text-slate-900 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                >

                                    <option value="active">
                                        Active
                                    </option>

                                    <option value="inactive">
                                        Inactive
                                    </option>

                                </select>

                                <i
                                    data-lucide="chevron-down"
                                    class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                ></i>

                            </div>

                        </div>


                        <!-- Address -->
                        <div class="md:col-span-2">

                            <label
                                for="address"
                                class="mb-2 block text-sm font-semibold text-slate-700"
                            >
                                Address
                            </label>

                            <div class="relative">

                                <i
                                    data-lucide="map-pin"
                                    class="pointer-events-none absolute left-3 top-3 h-4 w-4 text-slate-400"
                                ></i>

                                <textarea
                                    id="address"
                                    name="address"
                                    rows="4"
                                    placeholder="Enter vendor address"
                                    class="w-full resize-none rounded-lg border border-slate-300 bg-white py-2.5 pl-10 pr-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                                >{{ old('address') }}</textarea>

                            </div>

                        </div>

                    </div>


                    <!-- Actions -->
                    <div class=" flex flex-col-reverse gap-3  border-gray-200 pt-6 sm:flex-row sm:justify-end">

                        <a
                            href="{{ route('vendors.index') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                        >

                            <i
                                data-lucide="arrow-left"
                                class="h-4 w-4"
                            ></i>

                            Cancel

                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >

                            <i
                                data-lucide="plus"
                                class="h-4 w-4"
                            ></i>

                            Add Vendor

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</body>

</html>