<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Blog</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <main class="max-w-4xl mx-auto px-4 py-8">

        <h1 class="text-3xl font-bold mb-6">
            Dev Blog
        </h1>

        <div class="space-y-4">

            @foreach ($posts as $post)
                <article class="bg-white p-6 rounded-lg shadow">

                    <h2 class="text-xl font-bold">
                        {{ $post->title }}
                    </h2>

                    <p class="text-gray-600 mt-3">
                        {{ $post->body }}
                    </p>

                </article>
            @endforeach

        </div>

        <div class="mt-8 overflow-x-auto">
            {{ $posts->links() }}
        </div>

    </main>

</body>
</html>
