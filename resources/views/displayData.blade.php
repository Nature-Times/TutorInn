
@include('header')
<div>
    <h1>List Mahasiswa</h1>
    <table class="table table-bordered" style="text-align:center">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Age</td>
            <td>Phone Number</td>
            <td>Operation</td>
        </tr>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{$mahasiswa->name}}</td>
            <td>{{$mahasiswa->email}}</td>
            <td>{{$mahasiswa->age}}</td>
            <td>{{$mahasiswa->phones->phoneNum}}</td>
            <td><a href="{{'update/'.$mahasiswa->id}}">Update</a></td>
        </tr>
        @endforeach
    </table>
</div>