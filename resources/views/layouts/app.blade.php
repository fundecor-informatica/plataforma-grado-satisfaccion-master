<!DOCTYPE html>
<html lang="en">
@include('partials._cabecera')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('partials._navigation_bar');

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('partials._sidebar-1');
        </aside>

        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @include('partials._main-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark">
        @include('partials._sidebar-2');
    </aside>
    @include('partials._pie-pagina')
</body>
</html>
