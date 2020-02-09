<html>
<head></head>
<body>
<form action="{{route('biodata.store')}}" method="post">
    @csrf
    <p>nama : </p>
    <input type="text" name="nama">
    <p>alamat : </p>
    <input type="text" name="alamat">
    <p>hobi : </p>
    <input type="text" name="hobi">
    <p>cita-cita : </p>
    <input type="text" name="cita">
    <button type="submit">simpan</button>
</form>
</body>
</html>
