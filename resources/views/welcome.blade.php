<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Information Storage System</title>
    <!-- import tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="w-4/5 mx-auto">
        <div class="py-8 flex justify-between items-center">
            <h1 class="text-3xl font-semibold">Book Information Storage System</h1>
            <a href="/create" class="bg-gray-400 text-white py-2 px-5">Add new book</a>
        </div>
    </header>
    <main class="w-4/5 mx-auto">
        <div>
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-lg font-semibold  uppercase">Book Name</th>
                                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium  uppercase">Author</th>
                                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium  uppercase">Publisher</th>
                                        <th scope="col" class="px-6 py-3 text-start text-lg font-medium  uppercase">Published Year</th>
                                        <th scope="col" class="px-6 py-3 text-end text-lg font-medium  uppercase">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookstores as $bookstore)
                                        <tr class="odd:bg-white even:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"> {{ $bookstore->Title }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $bookstore->Author }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $bookstore->Publisher }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $bookstore->YearPublished }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <a href="{{ route('edit',$bookstore->id) }}">Edit</a>
                                                <a href="{{ route('delete',$bookstore->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $bookstores->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>