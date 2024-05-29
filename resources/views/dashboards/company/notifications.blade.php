@extends('dashboards.layout')
@section('title', 'Company | Notifications')
@section('content')
    <div class="flex">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <div class="bg-white rounded-lg shadow-md overflow-y-auto">
                <table class="w-full table-auto border-collapse">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-3 text-left">Date</th>
                            <th class="px-4 py-3 text-left">Notification</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-01</td>
                            <td class="px-4 py-3">Your order #1234 has been shipped.</td>
                            <td class="px-4 py-3">
                                <span class="bg-green-200 text-green-800 px-2 py-1 rounded-full">Read</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Unread</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Your payment for invoice #5678 is due soon.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-3">2023-05-05</td>
                            <td class="px-4 py-3">Your account password has been changed.</td>
                            <td class="px-4 py-3">
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Unread</span>
                            </td>
                            <td class="px-4 py-3">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Mark as Read</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
