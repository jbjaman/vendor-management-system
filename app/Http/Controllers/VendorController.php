<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(Request $request)
    {
        $query = Vendor::query();
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('company_name', 'like', "%{$search}%");
            });
        }
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $vendors = $query
            ->latest()
            ->paginate(10)
            ->withQueryString();
        $totalVendors = Vendor::count();
        $activeVendors = Vendor::where('status','active')->count();
        $inactiveVendors = Vendor::where('status','inactive')->count();
        $productVendors = Vendor::where('type', 'product')->count();
$consultantVendors = Vendor::where('type', 'consultant')->count();
        return view('vendors.index', compact('vendors','totalVendors','activeVendors', 'inactiveVendors', 'productVendors', 'consultantVendors'));
    }
    public function create()
    {
        return view('vendors.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:vendors,email'],
            'phone' => ['required', 'string', 'max:30'],
            'company_name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:product,consultant'],
            'address' => ['nullable', 'string'],
            'status' => ['required', 'in:active,inactive'],
        ]);
        Vendor::create($validated);
        return redirect()
            ->route('vendors.index')
            ->with('success', 'Vendor created successfully.');
    }
    public function show(Vendor $vendor)
    {
        return view('vendors.show', compact('vendor'));
    }
    public function edit(Vendor $vendor)
    {
        return view('vendors.edit', compact('vendor'));
    }
    public function update(Request $request, Vendor $vendor)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'unique:vendors,email,' . $vendor->id,
            ],
            'phone' => ['required', 'string', 'max:30'],
            'company_name' => [
                'required',
                'string',
                'max:255',
            ],
            'type' => [
                'required',
                'in:product,consultant',
            ],
            'address' => [
                'nullable',
                'string',
            ],
            'status' => [
                'required',
                'in:active,inactive',
            ],
        ]);
        $vendor->update($validated);
        return redirect()
            ->route('vendors.index')
            ->with('success', 'Vendor updated successfully.');
    }
    public function destroy(Vendor $vendor)
    {
        $vendor->delete();

        return redirect()
            ->route('vendors.index')
            ->with('success', 'Vendor deleted successfully.');
    }
}