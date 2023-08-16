@extends('layout')

@section('content')
    <x-card-section></x-card-section>

    <!-- Table Section -->
    <section class="py-1">
        <div class="w-full xl:w-9/12 mb-12 xl:mb-0 px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg">
                <div class="rounded-t mb-0 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h2 class="font-semibold text-base text-gray-500">Submission List</h2>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="window.location.assign('/form')">Create</button>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                                    ID
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                                    Date
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                                    Submitter
                                </th>
                                <th
                                    class="px-6 py-3 text-xs font-semibold text-left bg-blueGray-50 text-blueGray-500 border border-blueGray-100 whitespace-nowrap border-l-0 border-r-0 uppercase">
                                    Status
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                    1
                                </th>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                    2023-08-10
                                </td>
                                <td
                                    class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    UserA
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <p class="text-gray-600">Pending</p>
                                </td>
                            </tr>
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
                                    2
                                </th>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    2023-08-12
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    UserB
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <p class="text-red-600">Rejected</p>
                                </td>
                            </tr>
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
                                    3
                                </th>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    2023-07-05
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    UserC
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <p class="text-green-600">Approved</p>
                                </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection``
