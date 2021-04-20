@extends('layouts.app')

@section('slot')
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($users as $user)
        <form method="POST" action="/symphonic-user-table">
            @csrf
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><input name="userId" value="{{ $user->id }}"></td>
                <td class="px-6 py-4 whitespace-nowrap"><input name="username" value="{{ $user->username }}"></td>
                <td class="px-6 py-4 whitespace-nowrap"><input name="email" value="{{ $user->email }}"></td>
                <td class="px-6 py-4 whitespace-nowrap"><button type="submit">Save</button></td>
            </tr>
        </form>
        @endforeach
    </tbody>

</table>
@endsection
