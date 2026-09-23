<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Vendors</title>
<!-- For Live Production -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-DFkjFGaM.css') }}">


    <!-- For Local -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>

<body class="max-w-7xl mx-auto bg-gray-100 ">

<div class="p-4">

    <!-- <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 border">

        <div>
            <h1 class="text-3xl font-bold text-gray-900">
                Vendor Management
            </h1>

            <p class="text-gray-500 mt-1">
                Manage your vendors efficiently and grow your business.
            </p>
        </div>

    </div> -->

    @if(session('success'))

        <div class="mb-6 rounded-lg bg-green-50 p-4 text-green-700">
            {{ session('success') }}
        </div>

    @endif

    <div class="rounded-lg bg-white  shadow">

    <div class="">
   
<!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between p-4 items-center max-md:gap-4 justify-between">
        <!-- left side -->
            <div class="border-l-4 pl-5 border-blue-700">
        <h1 class=" text-4xl  font-bold text-gray-900">Vendor Management</h1>
        <span class="text-sm text-gray-500 ">Manage your vendors efficiently and grow your business.</span>
</div>
<!-- vendor count card -->

<div class=" lg:flex items-center gap-3">

<!-- No -4 -->

<div class=" rounded-lg py-2 px-3 flex flex-col  shadow-inner shadow-slate-200 gap-2">
    <p class="text-xs text-gray-500">All Types </p>
    <div class="flex items-center gap-2">
    <div class="flex px-3 items-center gap-2 rounded-sm bg-purple-100">
    <span data-lucide="briefcase-business" class="w-4 h-4 text-purple-600  "></span>
        <p class="">{{$consultantVendors}}</p>
    </div>
    <div class="flex  px-3 items-center gap-2 rounded-sm bg-blue-100">
    <span data-lucide="package" class="w-4 h-4 text-blue-600"></span>
        <p class="">{{$productVendors}}</p>
    </div>
</div>
</div>
<div class=" rounded-lg py-2 px-3 flex flex-col  shadow-inner shadow-slate-200 gap-2">
    <p class="text-xs text-gray-500">All Status</p>
    <div class="flex items-center gap-3">
    <div class="flex  px-3 items-center gap-2 rounded-sm bg-green-100">
    <span data-lucide="CircleCheck" class="w-4 h-4 text-green-600  "></span>
        <p class=" ">{{$activeVendors}}</p>
    </div>
    <div class="flex  px-3 items-center gap-2 rounded-sm bg-red-100">
    <span data-lucide="CircleX" class="w-4 h-4 text-red-600"></span>
        <p class=" ">{{$inactiveVendors}}</p>
    </div>
</div>
</div>
<!-- End -->

</div>

<!-- vendor Add button -->
<div class="">
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
                class="grid  lg:grid-cols-6 gap-4"
            >

                <div class="lg:col-span-2 px-5 py-2.5  border p-2 shadow-xs rounded-md border-slate-300 flex gap-2 items-center hover:shadow-md duration-400">
                    <span data-lucide='Search' class="w-4 opacity-50"></span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Search by name, email or company..."
                        class="w-full outline-none"
                    >

                </div>

                

                    <select
                        name="type"
                        class="rounded-md border border-slate-300 w-full px-5 py-2.5 outline-none cursor-pointer shadow-xs hover:shadow-md duration-400  "
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

                    <select
                        name="status"
                        class="rounded-md border border-slate-300 w-full px-5 py-2.5 outline-none cursor-pointer shadow-xs hover:shadow-md duration-400  "
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

                

                
                    <a
                        href="{{ route('vendors.index') }}"
                        class="px-5 py-2.5 rounded-md  border border-slate-300 flex gap-2 items-center justify-center shadow-xs hover:shadow-md duration-400"
                    >
                      <span data-lucide="RotateCw" class="w-4 h-auto"></span>Clear Filters
                    </a>


                
                    <button
                        type="submit"
                        class="px-5 py-2.5 rounded-md  flex gap-2 items-center justify-center shadow-xs hover:shadow-md hover:shadow-slate-700 duration-400 cursor-pointer bg-slate-700 text-slate-50 "
                    >
                        Search
                    </button>
            </form>

        </div>

<!-- Down Side -->
        

        <div class="overflow-x-auto mx-4 mb-2  rounded-xl border border-slate-300">

            <table class="w-full text-left table-auto ">

                <thead class="bg-gray-100  border-slate-100">

                    <tr class="">

                        <th class="  px-4 py-3 font-semibold">
                            Vendor
                        </th>

                        <th class=" px-4 py-3 font-semibold">
                            Company
                        </th>

                        <th class=" px-4 py-3 font-semibold">
                            Type
                        </th>

                        <th class=" px-4 py-3 font-semibold">
                            Status
                        </th>
                        <th class=" px-4 py-3 font-semibold">
                            Contact
                        </th>

                        

                        <th class=" px-4 py-3 font-semibold">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody class="divide-y divide-slate-200 ">

                    @forelse($vendors as $vendor)

                        <tr class=" hover:bg-gray-50">

                            <td class=" px-4 py-3 flex items-center gap-3">

                                <a 
    href="{{ route('vendors.show', $vendor) }}" 
    class=" "
>
<div data-lucide="{{ $vendor->type === 'product'
                                        ? 'CircleUser'
                                        : 'CircleUserRound'
                                    }}" class="{{ $vendor->type === 'product'
                                        ? ' bg-blue-200 text-blue-500 rounded-full p-2.5 w-10 h-10'
                                        : 'bg-purple-200 text-purple-500 rounded-full p-2.5 w-10 h-10'
                                    }}"
                                >
</div>
                            <div>
                            <span
                                    class=" font-bold
                                    {{ $vendor->type === 'product'
                                        ? ' text-blue-900'
                                        : ' text-purple-900'
                                    }}"
                                >
                                {{ $vendor->name }}
                            </span>
    
</a>

                                <div class="font-semibold text-sm text-gray-400">
                                    {{ $vendor->email }}
                                </div>
                                </div>

                            </td>

                            <td class="font-semibold text-sm px-4 py-3">
                                {{ $vendor->company_name }}
                            </td>

                            <td class=" px-4 py-3">

                                <span
                                    class="px-3 py-1 rounded-md text-sm font-bold
                                    {{ $vendor->type === 'product'
                                        ? 'bg-blue-100 text-blue-700'
                                        : 'bg-purple-100 text-purple-700'
                                    }}"
                                >
                                    {{ ucfirst($vendor->type) }}
                                </span>

                            </td>

                            

                            <td class="px-4 py-3">

                                <span
                                    class="px-3 py-1 rounded-md text-sm font-bold
                                    {{ $vendor->status === 'active'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-red-100 text-red-700'
                                    }}"
                                >
                                • {{ ucfirst($vendor->status) }}</span>
                            </td>

                            <td class=" px-4 py-3 font-semibold text-sm" >
                                {{ $vendor->phone }}
                            </td>

                            <td class=" px-4 py-3">

                                <div class="flex gap-2">

                                <a
                                            href="{{ route('vendors.show', $vendor) }}"
                                        
                                    >

                                <div class="flex items-center gap-2 hover:shadow-lg border border-slate-300 px-3 hover:bg-cyan-50 py-1 rounded-md duration-300">
<span data-lucide="Eye" class="w-4 h-4 text-cyan-500" ></span>
                                    
                                       <p class="text-cyan-500 font-bold text-sm">View</p> 
                                    </div>
                                    </a>
                                    <a
                                        href="{{ route('vendors.edit', $vendor) }}"
                                        class="text-teal-700 font-bold text-sm cursor-pointer"
                                    >
                                    <div class="flex items-center gap-2 hover:shadow-lg border border-slate-300 px-3 bg-teal-50 hover:bg-teal-100 py-1 rounded-md duration-300">
<span data-lucide="PenLine" class="w-4 h-4 text-teal-700" ></span>
                                   
                                        Edit
                                    </div>
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
                                            class="text-red-600 font-bold text-sm cursor-pointer"
                                        >
                                        <div class="flex items-center gap-2 hover:shadow-lg border border-slate-300 px-3 bg-red-50 hover:bg-red-100 py-1 rounded-md duration-300">
<span data-lucide="Trash" class="w-4 h-4 text-red-700" ></span>
                                            Delete
                                            </div>
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

            <div class="px-4 py-2 pb-4 ">
                {{ $vendors->links() }}
            </div>

        @endif

    </div>

</div>




</div>



</body>
</html>