    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('maid.dashboard') }}"><img src="{{ URL::to('public/backend/images/logo.png') }}" alt="Logo"></a>
            </div>
            <div id="nav" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('maid.dashboard') }}"><i class="menu-icon fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('maid.setting') }}"><i class="menu-icon fa fa-cogs"></i> Settings</a>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>