@extends('layouts.main')
@section('content')
    <br>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم المنتج</th>
                <th scope="col">الصنف</th>
                <th scope="col">الكمية</th>
                <th scope="col">السعر</th>
                <th scope="col">عمليات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datafromDB as $key => $product)
            @php
                if ($product !== null) {
                    echo $product->Name;
                }
            @endphp
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->Name}}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <form action="/delet/{{ $product->id }}" method="get" class="d-inline">
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash me-2"></i>حذف
                            </button>
                        </form>
                        <span>--</span>
                        <form action="/edit/{{ $product->id }}" method="get" class="d-inline">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-trash me-2"></i>تعديل
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$datafromDB->links()}}
    {{-- add button  --}}
    <style>
        /* From Uiverse.io by catraco */
        .cssbuttons-io-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .2em;
            font-family: inherit;
            font-weight: 600;
            font-size: 16px;
            padding: .5em 1.5em;
            color: white;
            background: linear-gradient(0deg, rgb(0, 150, 60), rgb(100, 250, 150));
            border: none;
            outline: none;
            border-bottom: 3px solid rgb(0, 130, 40);
            box-shadow: 0 .5em .5em -.4em rgb(0, 0, 0, .5);
            letter-spacing: 0.08em;
            border-radius: 20em;
            cursor: pointer;
            transition: .5s;
        }

        .cssbuttons-io-button:hover {
            filter: brightness(1.2);
            color: rgb(0, 0, 0, .5);
        }

        .cssbuttons-io-button:active {
            transition: 0s;
            transform: rotate(-10deg);
        }
    </style>
    <div class="dropdown position-fixed bottom-0 end-0 mb-5 me-5 bd-mode-toggle">
        <button onclick="location.href='http://127.0.0.1:8000/add'" title="Add" class=" cssbuttons-io-button ">
            <svg height="25" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
            </svg>
        </button>
    </div>
@endsection
