@extends('admin.layout')
@section('content')
{{--    <div class="table-wrapper">--}}
{{--        <div class="table-title">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-6">--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <a href="" class="btn btn-success"><i class="material-icons"></i> <span>Add New Employee</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <table class="table table-striped table-hover">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Id</th>--}}
{{--                <th>Số đăng ký</th>--}}
{{--                <th>Số hiệu</th>--}}
{{--                <th>Action</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($datas as $data)--}}
{{--                <tr>--}}
{{--                    <td>{{$data->id}}</td>--}}
{{--                    <td>{{$data->registration_number}}</td>--}}

{{--                    <td>{{$data->serial_number}}</td>--}}
{{--                    <td>--}}
{{--                        <a href="" class="edit btn btn-warning"><i class="material-icons">Sửa</i></a>--}}
{{--                        <a href="" class="delete btn btn-danger"><i class="material-icons" >Xóa</i></a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            <!-- {{$datas->links('vendor.pagination.bootstrap-4')}} -->--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--<div class="relative overflow-x-auto">--}}
{{--    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">--}}
{{--        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--        <tr>--}}
{{--            <th scope="col" class="px-6 py-3">--}}
{{--                Id--}}
{{--            </th>--}}
{{--            <th scope="col" class="px-6 py-3">--}}
{{--                Số đăng ký--}}
{{--            </th>--}}
{{--            <th scope="col" class="px-6 py-3">--}}
{{--                Số hiệu--}}
{{--            </th>--}}
{{--            <th scope="col" class="px-6 py-3">--}}
{{--                Action--}}
{{--            </th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($datas as $data )--}}
{{--            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
{{--                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                    {{$data->id}}--}}
{{--                </th>--}}
{{--                <td class="px-6 py-4">--}}
{{--                    {{$data->registration_number}}--}}

{{--                </td>--}}
{{--                <td class="px-6 py-4">--}}
{{--                    {{$data->serial_number}}--}}

{{--                </td>--}}
{{--                <td class="px-6 py-4">--}}
{{--                    $2999--}}
{{--                </td>--}}
{{--            </tr>--}}

{{--        @endforeach--}}

{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
<!-- component -->
@if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<a href={{route('admin.addList')}}>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Thêm mới</button>

</a>

<table class="min-w-full border-collapse block md:table">
    <thead class="block md:table-header-group">
    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">ID</th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Số đăng ký</th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Số hiệu </th>
        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
    </tr>
    </thead>
    <tbody class="block md:table-row-group">
    @foreach($datas as $data)
        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{$data->id}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>{{$data->registration_number}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>{{$data->serial_number}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <a href={{route('admin.edit',['id'=>$data->id])}}>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>

                </a>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>
@endsection




