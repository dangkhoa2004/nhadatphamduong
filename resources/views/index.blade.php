<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Đây là trang web bán nhà đất khu vực Hải Phòng">
    <title>Nhà Đất Hải Phòng</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta property="og:title" content="Nhà đất Phạm Dương" />
    <meta property="og:description" content="Chuyên buôn bán, đầu tư, môi giới nhà đất tại hải phòng" />
    <meta property="og:image" content="URL của hình ảnh thumbnail" />
    <meta property="og:url" content="URL của trang web" />
    <style>
        html,
        body,
        * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body class="bg-white">
    <x-contact />
    @include('layouts.header')
    @include('partials.newfeed')
    @include('layouts.footer')
</body>

</html>