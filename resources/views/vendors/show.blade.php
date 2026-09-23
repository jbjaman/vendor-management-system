<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $vendor->name }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-gray-50">

    <div class="mx-auto max-w-5xl px-4 py-8 sm:px-6 lg:px-8">

        <!-- Main Card -->
        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

            <!-- Header -->
            <div class="border-b border-gray-200 px-6 py-6 sm:px-8">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">

                    <div class="flex items-start gap-4">

                        <!-- Blue Accent -->
                        <div class="mt-1 h-14 w-1 rounded-full bg-blue-600"></div>

                        <div>

                            <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                                {{ $vendor->name }}
                            </h1>

                            <div class="mt-2 flex items-center gap-2 text-sm text-slate-500">

                                <i
                                    data-lucide="building-2"
                                    class="h-4 w-4"
                                ></i>

                                <span>
                                    {{ $vendor->company_name }}
                                </span>

                            </div>

                        </div>

                    </div>


                    <!-- Vendor Type -->
                    @if ($vendor->type === 'product')

                        <span class="inline-flex w-fit items-center gap-1.5 rounded-lg bg-blue-50 px-3 py-1.5 text-sm font-semibold text-blue-700">

                            <i
                                data-lucide="package"
                                class="h-4 w-4"
                            ></i>

                            Product

                        </span>

                    @else

                        <span class="inline-flex w-fit items-center gap-1.5 rounded-lg bg-purple-50 px-3 py-1.5 text-sm font-semibold text-purple-700">

                            <i
                                data-lucide="briefcase-business"
                                class="h-4 w-4"
                            ></i>

                            Consultant

                        </span>

                    @endif

                </div>

            </div>


            <!-- Vendor Details -->
            <div class="px-6 py-7 sm:px-8 sm:py-8">

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">


                    <!-- Email -->
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-600">

                                <i
                                    data-lucide="mail"
                                    class="h-5 w-5"
                                ></i>

                            </div>

                            <div class="min-w-0">

                                <p class="text-sm font-medium text-slate-500">
                                    Email
                                </p>

                                <p class="mt-1 break-all text-sm font-semibold text-slate-900">
                                    {{ $vendor->email }}
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Phone -->
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-600">

                                <i
                                    data-lucide="phone"
                                    class="h-5 w-5"
                                ></i>

                            </div>

                            <div>

                                <p class="text-sm font-medium text-slate-500">
                                    Phone
                                </p>

                                <p class="mt-1 text-sm font-semibold text-slate-900">
                                    {{ $vendor->phone }}
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Company -->
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-indigo-100 text-indigo-600">

                                <i
                                    data-lucide="building-2"
                                    class="h-5 w-5"
                                ></i>

                            </div>

                            <div>

                                <p class="text-sm font-medium text-slate-500">
                                    Company
                                </p>

                                <p class="mt-1 text-sm font-semibold text-slate-900">
                                    {{ $vendor->company_name }}
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Status -->
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg  {{ $vendor->status === 'active'
                                        ? 'bg-emerald-100 text-emerald-600'
                                        : 'bg-red-100 text-red-700'
                                    }}">
                                    @if ($vendor->status === 'active')

                                <i
                                    data-lucide="circle-check"
                                    class="h-5 w-5"
                                ></i>
                                @else
                                 <i
                                    data-lucide="circle-x"
                                    class="h-5 w-5"
                                ></i>
                                                                    @endif

                            </div>

                            <div>

                                <p class="text-sm font-medium text-slate-500">
                                    Status
                                </p>

                                <div class="">

                                    @if ($vendor->status === 'active')

                                        <span class="inline-flex items-center  py-1 text-xs font-semibold text-green-900">

                                            

                                            Active

                                        </span>

                                    @else

                                        <span class="inline-flex items-center  py-1 text-xs font-semibold text-red-900">

                                            

                                            Inactive

                                        </span>

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Address -->
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 md:col-span-2">

                        <div class="flex items-start gap-4">

                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-orange-100 text-orange-600">

                                <i
                                    data-lucide="map-pin"
                                    class="h-5 w-5"
                                ></i>

                            </div>

                            <div class="min-w-0">

                                <p class="text-sm font-medium text-slate-500">
                                    Address
                                </p>

                                <p class="mt-1 text-sm font-semibold leading-6 text-slate-900">
                                    {{ $vendor->address ?? 'Not provided' }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Actions -->
                <div class=" flex flex-col-reverse gap-3 border-gray-200 pt-6 sm:flex-row sm:justify-between">

                    <!-- Back -->
                    <a
                        href="{{ route('vendors.index') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                    >

                        <i
                            data-lucide="arrow-left"
                            class="h-4 w-4"
                        ></i>

                        Back to Vendors

                    </a>


                    <!-- Edit -->
                    <a
                        href="{{ route('vendors.edit', $vendor) }}"
                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >

                        <i
                            data-lucide="pencil"
                            class="h-4 w-4"
                        ></i>

                        Edit Vendor

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>