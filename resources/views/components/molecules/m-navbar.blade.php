<li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <x-atoms.a-icdrop class="fas fa-expand-arrows-alt" style="color: white"></x-atoms.a-icdrop>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="">
        <x-atoms.a-btnnav>
            Admin
        </x-atoms.a-btnnav>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="/admin" class="dropdown-item">
            <x-atoms.a-icdrop class="fa-cog mr-2"></x-atoms.a-icdrop>Settings
        </a>
        <div class="dropdown-divider"></div>
        <a href="/" class="dropdown-item" data-toggle="modal" data-target="#logoutModal" style="color: black">
            <x-atoms.a-icdrop class="fa-sign-out-alt mr-2"></x-atoms.a-icdrop>Logout
        </a>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <x-atoms.a-h5manage id="logoutModalLabel">Logout</x-atoms.a-h5manage>
                    <x-atoms.a-btnclose></x-atoms.a-btnclose>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <x-atoms.a-button type="button" class="btn-secondary" data-dismiss="modal">Batal</x-atoms.a-button>
                    <x-atoms.a-btnlogin href="/" class="btn-primary">Logout</x-atoms.a-btnlogin>
                </div>
            </div>
        </div>
    </div>
</li>