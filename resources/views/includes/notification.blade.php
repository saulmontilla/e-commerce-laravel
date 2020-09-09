<div class="notification-container">
    @if(session('n-success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('n-success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('n-error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('n-error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>