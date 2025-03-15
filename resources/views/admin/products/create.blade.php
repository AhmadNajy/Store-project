@extends('layouts.main')
@section('content')
<style>
    /* From Uiverse.io by Shakil-Babu */
    .btnnnn {
        background-color: #fff;
        padding: 7px 15px;
        color: #00BFA6;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        border-radius: 10px;
        border: 2px solid #029682;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        transition: .4s;
        font-weight: bold;
    }

    .btnnnn span:last-child {
        display: none;
    }

    .btnnnn:hover {
        transition: .5s;
        border: 2px solid #00BFA6;
        background-color: #00BFA6;
        color: #fff;
        font-weight: bold;

    }

    .btnnnn:active {
        background-color: #87dbd0;
    }
</style>
    <form action="{{url('AddProduct')}}" method="post">
        @csrf
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="أدخل اسم المنتج :">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput1" class="form-label">الكمية</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput1" class="form-label">السعر</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label">اختار نوع المنتج </label>
            <select class="form-select" name="category" id="vategory" >
                <option selected>#</option>
                @foreach ($categores as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label">الوصف</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="اضافة المنتج" class="btn btn-primary  btn-lg">
        </div>
    </form>
    <div  class="dropdown position-fixed bottom-0 end-0 mb-3 me-4 bd-mode-toggle">
        <button onclick="location.href='http://127.0.0.1:8000/products  '" class="btnnnn"> عرض المنتجات</button>
    </div>
@endsection
