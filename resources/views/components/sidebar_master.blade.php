<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header" style="align-items: center">
      <a style="justify-content: center;display:flex;" href="{{ route('adminmaster') }}" class="brand-logo">
        <img src="{{ asset('assetmaster/images/admin.png') }}" alt="logo">
      </a>
    </div>
    <div class="mdc-drawer__content">
      <div class="user-info">
        <p class="name">{{ session('akun') }}</p>
        <p class="email">{{ session('email') }}</p>
      </div>
      <div class="mdc-list-group">
        <nav class="mdc-list mdc-drawer-menu">
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ route('adminmaster') }}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
              Dashboard
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="{{ route('daftar') }}">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
              Company Account
            </a>
          </div>
          <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
              <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
              Tables
              <i class="mdc-drawer-arrow material-icons">chevron_right</i>
            </a>
            <div class="mdc-expansion-panel" id="ui-sub-menu">
              <nav class="mdc-list mdc-drawer-submenu">
                <div class="mdc-list-item mdc-drawer-item">
                  <a class="mdc-drawer-link" href="{{ route('tables.index') }}">
                    Users
                  </a>
                </div>
              </nav>
            </div>
          </div>
        </nav>
      </div>
      <div class="profile-actions">
        <a href="javascript:;">Settings</a>
        <span class="divider"></span>
        <a href="javascript:;">Logout</a>
      </div>
      <div class="mdc-card premium-card">
        <div class="d-flex align-items-center">
          <div class="mdc-card icon-card box-shadow-0">
            <i class="mdi mdi-shield-outline"></i>
          </div>
          <div>
            <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">King Jobs</p>
            <p class="mt-0 mb-0 ml-2 tx-10">JOBS</p>
          </div>
        </div>
      </div>
    </div>
  </aside>
