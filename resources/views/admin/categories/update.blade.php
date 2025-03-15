@extends('layouts.main')
@section('content')
<h1>تعديل بيانات الصنف</h1>
    <form action="{{url('updateCategory/'.$row->id)}}" method="post">
        @csrf
        @method('patch')
        <br>
        <div class="mb-3">
            <label for="nameFormControlInput1" class="form-label">اسم الصنف</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$row->name}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="تعديل الصنف" class="btn btn-primary  btn-lg">
        </div>
    </form>
@endsection
