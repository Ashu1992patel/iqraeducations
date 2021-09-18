<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                    @include("backend.layout.top_header_submenu.pages")
                    @include("backend.layout.top_header_submenu.features")
                    @include("backend.layout.top_header_submenu.apps")
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Search-->
            @include("backend.layout.top_header_submenu.search")
            <!--end::Search-->
            <!--begin::Notifications-->
            {{-- @include("backend.layout.top_header_submenu.notifications") --}}
            <!--end::Notifications-->
            <!--begin::Quick Actions-->
            {{-- @include("backend.layout.top_header_submenu.quick_actions") --}}
            <!--end::Quick Actions-->
            <!--begin::Cart-->
            {{-- @include("backend.layout.top_header_submenu.cart") --}}
            <!--end::Cart-->
            <!--begin::Quick panel-->
            {{-- @include("backend.layout.top_header_submenu.quick_actions") --}}
            <!--end::Quick panel-->
            <!--begin::Chat-->
            {{-- @include("backend.layout.top_header_submenu.chat") --}}
            <!--end::Chat-->
            <!--begin::Languages-->
            @include("backend.layout.top_header_submenu.languages")
            <!--end::Languages-->
            <!--begin::User-->
            @include("backend.layout.top_header_submenu.user")
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
