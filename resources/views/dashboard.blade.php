<x-app-layout>
    <x-slot name="header">
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./test.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        />
        <link
            href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
            rel="stylesheet"
        />
        <title>پادمیرا</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="./index.css" />

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <br>
                        <br>
                        <table class="table" style="direction:ltr;">
                            <thead >
                            <tr>

                                <th scope="col">نام کالا</th>
                                <th scope="col">تعداد</th>
                                <th scope="col">حذف کردن</th>
                                <th scope="col">اتمام خرید</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($kalas as $kala)
                            <tr>


                                <td>{{$kala->id}}</td>
                                <td>{{$kala->name}}</td>


                                <td> <a href="{{url('del/'.$kala->id)}}"><button type="button" class="btn btn-danger">حذف</button></a></td>
                                <td><button type="button" class="btn btn-success">ثبت</button></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
