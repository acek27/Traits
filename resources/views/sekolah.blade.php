<html>
<head></head>
<body>
<form action="{{route('sekolah.store')}}" method="post">
    @csrf
    <p>nama : </p>
    <input type="text" name="nama_sekolah">
    <p>alamat : </p>
    <input type="text" name="akreditasi">
    <button type="submit">simpan</button>
</form>
</body>
</html>
