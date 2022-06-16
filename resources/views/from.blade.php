<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> örnek form sayafası</title>
    </head>

<body>
hos geldiniz
<form action="{{route('sonuci')}}" metdhod="post">
     @csrf


    <textarea name='metin'></textarea>
    <input type="submit" name="ilet" value="Gönder">
</form>
</body>
</html>
