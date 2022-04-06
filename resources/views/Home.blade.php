<!DOCTYPE html>

<html lang="en">

<head>
    @include('Template.head')
    <title>Laravel & Vue Js</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <!-- Navbar -->
        @include('Template.navbar')

        <!-- Main Sidebar Container -->
        @include('Template.left-sidebar')

        <div class="content-wrapper">

            <div class="content">
                <router-view></router-view>

            </div>

        </div>

        <!-- Main Footer -->
        @include('Template.footer')




    </div>



    @include('Template.script')
</body>

</html>
