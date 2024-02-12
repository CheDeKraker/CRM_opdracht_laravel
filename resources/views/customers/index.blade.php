<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-semibold text-white">Customer Overview</h1>
    </x-slot>
    <div class="container mx-auto mt-4">
        <div class="mb-2">
            <a href="{{ route('customers.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-3 rounded">Add New Customer</a>
        </div>

        <div class="container mx-auto">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-black shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-900 text-white uppercase">
                        <tr>
                            <th class="py-2 px-3 text-left">Company</th>
                            <th class="py-2 px-3 text-left">Company Name</th>
                            <th class="py-2 px-3 text-left">KvK Number</th>
                            <th class="py-2 px-3 text-left">First Name</th>
                            <th class="py-2 px-3 text-left">Last Name</th>
                            <th class="py-2 px-3 text-left">Street</th>
                            <th class="py-2 px-3 text-left">House Number</th>
                            <th class="py-2 px-3 text-left">Postcode</th>
                            <th class="py-2 px-3 text-left">City</th>
                            <th class="py-2 px-3 text-left">Email</th>
                            <th class="py-2 px-3 text-left">Phone Number</th>
                            <th class="py-2 px-3 text-left">Function</th>
                            <th class="py-2 px-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach($customers as $customer)
                        <tr class="hover:bg-gray-800">
                        <td class="py-2 px-3 border-b">
                            <a href="{{ route('customers.show', $customer->id) }}">{{ $customer->company_name }}</a>
                        </td>
                            <td class="py-2 px-3 border-b">{{ $customer->company }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->kvk_number }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->first_name }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->last_name }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->street }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->house_number }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->postcode }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->city }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->email }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->phone_number }}</td>
                            <td class="py-2 px-3 border-b">{{ $customer->function }}</td>
                            <td class="py-2 px-3 border-b">
                                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded">Delete</button>
                                </form>
                                <a href="{{ route('customers.edit', $customer->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded ml-2">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
