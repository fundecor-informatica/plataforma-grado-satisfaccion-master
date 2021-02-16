<main class="py-4">
    @if (session('success'))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success py-3 mt-2 border-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger py-3 mt-2 border-danger alert-dismissible fade show" role="alert">
                    {!! session('error') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    @if (session('info'))
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info py-3 mt-2 border-info alert-dismissible fade show w-100" role="alert">
                        {!! session('info') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @yield('content')
</main>
