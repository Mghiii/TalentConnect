<div>
    <div class="w-16 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-60 z-10">
        <a href="/trainee/dashboard"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt text-2xl"></i>
            <span class="hidden md:block font-bold">Dashboard</span>
        </a>
        <a href="/trainee/internships/search"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/internships/search') ? 'active' : '' }}">
            <i class="fas fa-search text-2xl"></i>
            <span class="hidden md:block font-bold">Search Internships</span>
        </a>
        <a href="/trainee/internships/progress"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/internships/progress') ? 'active' : '' }}">
            <i class="fas fa-chart-line text-2xl"></i>
            <span class="hidden md:block font-bold">Internship Progress</span>
        </a>
        <a href="/trainee/notifications"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/notifications') ? 'active' : '' }}">
            <i class="fas fa-bell text-2xl"></i>
            <span class="hidden md:block font-bold">Notifications</span>
        </a>
        <a href="/trainee/help-centre"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/help-centre') ? 'active' : '' }}">
            <i class="fas fa-question-circle text-2xl"></i>
            <span class="hidden md:block font-bold">Help</span>
        </a>
        <a href="/trainee/profile"
            class="sidebar-item text-gray-700 hover:text-gray-900 transition-colors {{ request()->is('trainee/profile') ? 'active' : '' }}">
            <img alt="image profile"
                src="https://static.vecteezy.com/system/resources/previews/000/390/524/original/modern-company-logo-design-vector.jpg"
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
</div>
