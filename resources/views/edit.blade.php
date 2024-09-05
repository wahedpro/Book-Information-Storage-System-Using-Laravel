<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <form method="post" action="{{ route('update',$bookStore->id) }}">
        @csrf
        <label for="">Book Name</label>
        <input type="text" name="Title" value="{{ $bookStore->Title}}"> <br><br>
        @error('Title')
            <p>{{ $message }}</p>
        @enderror

        <label for="">Book Author Name</label>
        <input type="text" name="Author" value="{{ $bookStore->Author}}"> <br><br>
        @error('Author')
            <p>{{ $message }}</p>
        @enderror

        <label for="">Book Publisher Name</label>
        <input type="text" name="Publisher" value="{{ $bookStore->Publisher}}"> <br><br>
        @error('Publisher')
            <p>{{ $message }}</p>
        @enderror

        <label for="">Book Published Year</label>
        <input type="date" name="YearPublished" value="{{ $bookStore->YearPublished}}"> <br><br>
        @error('YearPublished')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Submit">
    </form>
</body>
</html>