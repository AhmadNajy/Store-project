@extends('layouts.main')
@section('content')
    <style>
        /* From Uiverse.io by Shakil-Babu */
        .btnnnn {
            background-color: #00BFA6;
            padding: 10px 20px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            border-radius: 10px;
            border: 2px dashed #00BFA6;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            transition: .4s;
            font-weight: bold;
        }

        .btnnnn span:last-child {
            display: none;
        }

        .btnnnn:hover {
            transition: .4s;
            border: 2px dashed #00BFA6;
            background-color: #fff;
            color: #00BFA6;
            font-weight: bold;

        }

        .btnnnn:active {
            background-color: #87dbd0;
        }
    </style>
    <form action="{{ url('AddCategory') }}" method="post">
        @csrf
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم الصنف :">
        </div>

        <div class="mb-3">
            <input type="submit" value="اضافة صنف" class="btn btn-primary  btn-lg">
        </div>
    </form>
    <div  class="dropdown position-fixed bottom-0 end-0 mb-5 me-5 bd-mode-toggle">
        <button onclick="location.href='http://127.0.0.1:8000/categores'" class="btnnnn"> عرض الاصناف</button>
    </div>

@endsection
