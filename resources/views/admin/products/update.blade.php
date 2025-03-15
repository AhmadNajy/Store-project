@extends('layouts.main')
@section('content')
<h1>تعديل بيانات المنتج</h1>
    <form action="{{url('update/'.$row->id)}}" method="post">
        @csrf
        @method('patch')
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label">اسم المنتج</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$row->name}}">
        </div>
        <div class="mb-3">
            <label for="quantityFormControlInput1" class="form-label">الكمية</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{$row->quantity}}">
        </div>
        <div class="mb-3">
            <label for="priceFormControlInput1" class="form-label">السعر</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$row->price}}">
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label">اختار نوع المنتج </label>
            <select class="form-select" name="category" id="vategory" value="{{$row->category}}">
                <option value="{{$row->category}}">{{$categoryName}}</option>
                @foreach ($categores as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="descriptionFormControlTextarea1" class="form-label">الوصف</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{$row->description}}">{{$row->description}}</textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="تعديل المنتج" class="btn btn-primary  btn-lg">
        </div>
    </form>
@endsection
