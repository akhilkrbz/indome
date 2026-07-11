
@if(session('warning'))
<div class="alert_box warning m_bottom_10 relative fw_light">
    <b>Warning!</b> {{ session('warning') }}
    <i class="fa fa-times clickable tr_all fs_large"></i>
</div>
@endif

@if(session('error'))
<div class="alert_box error relative m_bottom_10 fw_light">
    <b>Oh snap!</b> {{ session('error') }}
    <i class="fa fa-times clickable tr_all fs_large"></i>
</div>
@endif

@if(session('success'))
<div class="alert_box success m_bottom_10 relative fw_light">
    <b>Well done!</b> {{ session('success') }}
    <i class="fa fa-times clickable tr_all fs_large"></i>
</div>
@endif

@if(session('info'))
<div class="alert_box info relative m_bottom_10 fw_light">
    <b>Heads up!</b> {{ session('info') }}
    <i class="fa fa-times clickable tr_all fs_large"></i>
</div>
@endif