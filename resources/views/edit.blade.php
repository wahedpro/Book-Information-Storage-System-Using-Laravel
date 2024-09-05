<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <!-- import tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- This is header section -->
    <header class="w-4/5 mx-auto border-b-2 border-gray-400">
        <div class="py-8 flex justify-between items-center">
            <h1 class="text-3xl font-semibold">Book Information Storage System</h1>
            <a href="/" class="bg-gray-400 text-white py-2 px-5">Go to home</a>
        </div>
    </header>
    <!-- This is main section -->
    <main>
        <div class="w-4/5 mx-auto pt-5">
            <form method="post" action="{{ route('update',$bookStore->id) }}">
                @csrf
                <p class="text-base">Book Name:</p>
                <input class="border-2 border-gray-400 px-4" type="text" name="Title" value="{{ $bookStore->Title}}"> <br><br>
                @error('Title')
                    <p>{{ $message }}</p>
                @enderror

                <p class="text-base">Book Author Name:</p>
                <input class="border-2 border-gray-400 px-4" type="text" name="Author" value="{{ $bookStore->Author}}"> <br><br>
                @error('Author')
                    <p>{{ $message }}</p>
                @enderror

                <p class="text-base">Book Publisher Name:</p>
                <input class="border-2 border-gray-400 px-4" type="text" name="Publisher" value="{{ $bookStore->Publisher}}"> <br><br>
                @error('Publisher')
                    <p>{{ $message }}</p>
                @enderror

                <p class="text-base">Book Published Year:</p>
                <input class="border-2 border-gray-400 px-4" type="date" name="YearPublished" value="{{ $bookStore->YearPublished}}"> <br><br>
                @error('YearPublished')
                    <p>{{ $message }}</p>
                @enderror

                <input class="bg-gray-400 py-2 px-5 text-white" type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer class="pt-10">
        <div class="w-4/5 mx-auto border-t-2 border-gray-400 text-center pt-3">
            <h3 class="">Wahidul Islam</h3>
            <h3>Roll: 2104010202248</h3>
        </div>
    </footer>
</body>
</html>