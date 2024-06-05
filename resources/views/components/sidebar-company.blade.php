@props(['company'])
<div class="w-16 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-60 z-10">
    <a href="/company/dashboard"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard') ? 'active' : '' }}">
        <i class="fas fa-tachometer-alt text-2xl"></i>
        <span class="hidden md:block font-bold">Dashboard</span>
    </a>
    <a href="/company/dashboard/new-announcement"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard/new-announcement') ? 'active' : '' }}">
        <i class="fas fa-briefcase text-2xl"></i>
        <span class="hidden md:block font-bold">Internships</span>
    </a>
    <a href="/company/dashboard/intern-applicants"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard/intern-applicants') ? 'active' : '' }}">
        <i class="fas fa-file-alt text-2xl"></i>
        <span class="hidden md:block font-bold">Applications</span>
    </a>
    <a href="/company/dashboard/notifications"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard/notifications') ? 'active' : '' }}">
        <i class="fas fa-bell text-2xl"></i>
        <span class="hidden md:block font-bold">Notifications</span>
    </a>

    <a href="/company/dashboard/help-centre"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard/help-centre') ? 'active' : '' }}">
        <i class="fas fa-question-circle text-2xl"></i>
        <span class="hidden md:block font-bold">Help</span>
    </a>
    <a href="/company/dashboard/profile"
        class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('company/dashboard/profile') ? 'active' : '' }}">
        <img alt="image profile"
            src="{{ asset('storage/'. $company->company_image) }}"
            class="relative inline-block h-8 w-12 cursor-pointer rounded-full object-cover object-center"
            data-popover-target="profile-menu" />
        <span class="hidden md:block font-bold">Profile</span>
    </a>

</div>

<style>
    .sidebar-item:hover {
        transform: scale(1.1);
    }

    .sidebar-item span {
        display: none;
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translate(10px, -50%);
        padding: 4px 8px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 999;
    }

    .sidebar-item:hover span {
        display: block;
    }

    .sidebar-item.active {
        color: #4338ca;
        /* Indigo 600 */
        font-weight: bold;
    }

    .scroll {
        scroll-behavior: smooth;
    }
</style>
