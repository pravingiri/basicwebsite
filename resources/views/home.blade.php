@extends('layouts.app')

@section('content')

    <h1>Home</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias porro libero impedit blanditiis ut, facere illo veritatis voluptatum dolore accusantium nihil illum quidem hic! Nulla deleniti natus qui ea delectus.</p>  
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection