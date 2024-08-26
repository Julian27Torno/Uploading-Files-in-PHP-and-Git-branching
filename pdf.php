<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF File Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="text-center mb-6">
        <div class="flex justify-center items-center space-x-4">
            <img class="h-24" src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/327428714_1413493536122002_8627891629068809818_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=3SbI3ETAyE0Q7kNvgFn4U3X&_nc_ht=scontent.fmnl3-4.fna&cb_e2o_trans=t&oh=00_AYAUP5SD5a9sweDFriKrbJQhjANY1Txl4Qgsf1I4JXZNww&oe=66D278A1" alt="Angeles University Foundation">
            <img class="h-24" src="https://www.auf.edu.ph/home/images/mascot/CCS.png" alt="AUF CCS">
        </div>
        <h1 class="mt-4 text-xl font-semibold">ANGELES UNIVERSITY FOUNDATION</h1>
    </div>

    <form action="pdf-upload.php" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 max-w-lg w-full">
        <h2 class="text-center text-lg font-semibold mb-6">PDF File Upload</h2>
        <div class="bg-gray-800 rounded-lg p-10 text-center text-white">
            <label for="pdf-upload" class="block mb-2">UPLOAD A PDF FILE</label>
            <input type="file" id="pdf-upload" name="pdf_file" accept=".pdf"  class="block w-full text-sm text-slate-500
      file:mr-4 file:py-2 file:px-4
      file:rounded-full file:border-0
      file:text-sm file:font-semibold
      file:bg-violet-50 file:text-violet-700
      hover:file:bg-violet-100
    ">
        </div>
        <div class="mt-6 text-center">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600">
                Upload
            </button>
        </div>
    </form>
</body>

</html>