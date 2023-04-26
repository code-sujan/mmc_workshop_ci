<?php ?>

<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="<?= base_url('assets/brand/coreui.svg#full') ?>"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="<?= base_url('assets/brand/coreui.svg#signet') ?>"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url('vendors/@coreui/icons/svg/free.svg#cil-speedometer') ?>"></use>
                </svg>
                Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Theme</li>
        <li class="nav-item"><a class="nav-link" href="/student">
                <svg class="nav-icon">
                    <use xlink:href="<?= base_url('vendors/@coreui/icons/svg/free.svg#cil-user') ?>"></use>
                </svg>
                Student</a></li>
        <li class="nav-item"><a class="nav-link" href="/faculty">
                <i class="fa fa-list"></i> <span class="mx-2">Faculty</span></a>
        </li>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
