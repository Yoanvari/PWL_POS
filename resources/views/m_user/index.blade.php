@extends('m_user/template')
@section('content')
<style>
    * {
        box-sizing: content-box;
    }
</style>
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD user</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('m_user.create') }}">Input User</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ @message }}</p>
    </div>
@endif
<table class="table table-bordered table-striped table-hover">
    <tr>
        <td class="font-weight-bold text-center">User ID</td>
        <td class="font-weight-bold text-center">Level ID</td>
        <td class="font-weight-bold text-center">Username</td>
        <td class="font-weight-bold text-center">Nama</td>
        <td class="font-weight-bold text-center">Password</td>
        <td class="font-weight-bold text-center" style="width: 300px">Actions</td>
    </tr>
    @foreach ($useri as $m_user)
        <tr>
            <td class="text-center">{{ $m_user->user_id }}</td>
            <td class="text-center">{{ $m_user->level_Id }}</td>
            <td class="text-center">{{ $m_user->username }}</td>
           <td class="text-center">{{ $m_user->nama }}</td>
            <td class="text-center">{{ $m_user->password }}</td>
            <td class="text-center">
                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">

                    <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection