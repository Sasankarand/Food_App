<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="Student(user)/style.css">
    <!-- Font: Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- Icons: Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <!-- Header -->


    <div class="profile_">
        <div>
        <x-app-layout></x-app-layout>
        </div>
    </div>


    <h3 class="logo">UNIFOOD</h3>


    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="sidebar-menu">
            <span class="fas fa-home"></span>
            <a href="{{url('/userdashboard')}}">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-search"></span>
            <a href="{{url('/explore')}}">Explore</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-heart"></span>
            <a href="{{url('/oders')}}">Orders</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-user"></span>
            <a href="{{url('/profile')}}">Profile</a>
        </div>
    </nav>
    <div class="">
            <nav wire:snapshot="{&quot;data&quot;:[],&quot;memo&quot;:{&quot;id&quot;:&quot;adqMsjpRXHEwifet984R&quot;,&quot;name&quot;:&quot;navigation-menu&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;43fd5a2ba38cb7be6408d40f412e9389e71f5fe615795972308d5c6b672eb9a1&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;refresh-navigation-menu&quot;]}" wire:id="adqMsjpRXHEwifet984R" x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->


                <!-- Navigation Links -->

            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <!--[if BLOCK]><![endif]-->                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        sasanka

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </button>
                                </span>
                            <!--[if ENDBLOCK]><![endif]-->
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0 " style="display: none;" @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/user/profile">Profile</a>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="http://127.0.0.1:8000/logout" x-data="">
                                <input type="hidden" name="_token" value="dqhwFRleaP9bLwOa3TSrpRVQbwK5IhjuV9jPtH9H" autocomplete="off">
                                <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">Log Out</a>
                            </form>
        </div>
    </div>
</div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/dashboard">
    Dashboard
</a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <div>
                    <div class="font-medium text-base text-gray-800">sasanka</div>
                    <div class="font-medium text-sm text-gray-500">sasanka@gmail.com</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/user/profile">
    Profile
</a>

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!-- Authentication -->
                <form method="POST" action="http://127.0.0.1:8000/logout" x-data="">
                    <input type="hidden" name="_token" value="dqhwFRleaP9bLwOa3TSrpRVQbwK5IhjuV9jPtH9H" autocomplete="off">
                    <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">
    Log Out
</a>
                </form>

                <!-- Team Management -->
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</nav>

            <!-- Page Heading -->
                            <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profile
        </h2>
                    </div>
                </header>
            
            <!-- Page Content -->
            <main>
                <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                            <div wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;email&quot;:&quot;sasanka@gmail.com&quot;,&quot;id&quot;:1,&quot;name&quot;:&quot;sasanka&quot;,&quot;phone_number&quot;:&quot;0765641368&quot;,&quot;province&quot;:null,&quot;city&quot;:&quot;janaraja-mawatha&quot;,&quot;street&quot;:&quot;no 30&quot;,&quot;usertype&quot;:&quot;0&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:null,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2024-11-04T05:45:44.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-11-04T05:45:44.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=s&amp;color=7F9CF5&amp;background=EBF4FF&quot;},{&quot;s&quot;:&quot;arr&quot;}],&quot;photo&quot;:null,&quot;verificationLinkSent&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;G2IcknieGnwoq80pBgwo&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;5e6342795030f2fea3427dcd1b7245a21944e04403e3d4f331b98cf54c72e1be&quot;}" wire:effects="[]" wire:id="G2IcknieGnwoq80pBgwo" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>

        <p class="mt-1 text-sm text-gray-600">
            Update your account's profile information and email address.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit="updateProfileInformation">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Profile Photo -->
        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name">
    Name
</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" wire:model="state.name" required="required" autocomplete="name">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="email">
    Email
</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="email" type="email" wire:model="state.email" required="required" autocomplete="username">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>
                </div>
            </div>

            <!--[if BLOCK]><![endif]-->                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('G2IcknieGnwoq80pBgwo').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 me-3">
    Saved.
</div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
    Save
</button>
                </div>
            <!--[if ENDBLOCK]><![endif]-->
        </form>
    </div>
</div>

                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
            
                            <div class="mt-10 sm:mt-0">
                    <div wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;current_password&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;Z8ZHLarNaN7Mxzci5mCp&quot;,&quot;name&quot;:&quot;profile.update-password-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;a3b6a30dd19acb0396226a6b9141c4b6285b6ef22e532aa9cc1c807cb2dacda9&quot;}" wire:effects="[]" wire:id="Z8ZHLarNaN7Mxzci5mCp" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Update Password</h3>

        <p class="mt-1 text-sm text-gray-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit="updatePassword">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="current_password">
    Current Password
</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" wire:model="state.current_password" autocomplete="current-password">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
    New Password
</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" wire:model="state.password" autocomplete="new-password">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
    Confirm Password
</label>
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" wire:model="state.password_confirmation" autocomplete="new-password">
            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>
                </div>
            </div>

            <!--[if BLOCK]><![endif]-->                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('Z8ZHLarNaN7Mxzci5mCp').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 me-3">
    Saved.
</div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
    Save
</button>
                </div>
            <!--[if ENDBLOCK]><![endif]-->
        </form>
    </div>
</div>
                </div>

                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
            
                            <div class="mt-10 sm:mt-0">
                    <div wire:snapshot="{&quot;data&quot;:{&quot;showingQrCode&quot;:false,&quot;showingConfirmation&quot;:false,&quot;showingRecoveryCodes&quot;:false,&quot;code&quot;:null,&quot;confirmingPassword&quot;:false,&quot;confirmableId&quot;:null,&quot;confirmablePassword&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;DxP4kPSpkBn2n9mbyHL0&quot;,&quot;name&quot;:&quot;profile.two-factor-authentication-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;874876d843afd7e6cf81cccc41629739f838d5f78752635d8897bd404738aaa2&quot;}" wire:effects="[]" wire:id="DxP4kPSpkBn2n9mbyHL0" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Two Factor Authentication</h3>

        <p class="mt-1 text-sm text-gray-600">
            Add additional security to your account using two factor authentication.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <h3 class="text-lg font-medium text-gray-900">
            <!--[if BLOCK]><![endif]-->                You have not enabled two factor authentication.
            <!--[if ENDBLOCK]><![endif]-->
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.
            </p>
        </div>

        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

        <div class="mt-5">
            <!--[if BLOCK]><![endif]-->                <span wire:then="enableTwoFactorAuthentication" x-data="" x-ref="span" x-on:click="$wire.startConfirmingPassword('ab2d1de5297198533ed96f794eb99eac')" x-on:password-confirmed.window="setTimeout(() => $event.detail.id === 'ab2d1de5297198533ed96f794eb99eac' &amp;&amp; $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);">
    <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" wire:loading.attr="disabled">
    Enable
</button>
</span>

<div x-data="{ show: window.Livewire.find('DxP4kPSpkBn2n9mbyHL0').entangle('confirmingPassword').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="506a8cb247bad8f18658bdb3f794fabc" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900">
            Confirm Password
        </div>

        <div class="mt-4 text-sm text-gray-600">
            For your security, please confirm your password to continue.

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Password" autocomplete="current-password" x-ref="confirmable_password" wire:model="confirmablePassword" wire:keydown.enter="confirmPassword">

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
        </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
    Cancel
</button>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
    Confirm
</button>
    </div>
    </div>
</div>
            <!--[if ENDBLOCK]><![endif]-->
        </div>
        </div>
    </div>
</div>
                </div>

                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>
            
            <div class="mt-10 sm:mt-0">
                <div wire:snapshot="{&quot;data&quot;:{&quot;confirmingLogout&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;bKY2OpGAwdnDP8VSGj7F&quot;,&quot;name&quot;:&quot;profile.logout-other-browser-sessions-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;8dacc0247bebdd41c3c77df5761ebe505a17418e7a2a2ca67e3506cbd1a95a26&quot;}" wire:effects="[]" wire:id="bKY2OpGAwdnDP8VSGj7F" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Browser Sessions</h3>

        <p class="mt-1 text-sm text-gray-600">
            Manage and log out your active sessions on other browsers and devices.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl text-sm text-gray-600">
            If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.
        </div>

        <!--[if BLOCK]><![endif]-->            <div class="mt-5 space-y-6">
                <!-- Other Browser Sessions -->
                <!--[if BLOCK]><![endif]-->                    <div class="flex items-center">
                        <div>
                            <!--[if BLOCK]><![endif]-->                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                                </svg>
                            <!--[if ENDBLOCK]><![endif]-->
                        </div>

                        <div class="ms-3">
                            <div class="text-sm text-gray-600">
                                Windows - Chrome
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    127.0.0.1,

                                    <!--[if BLOCK]><![endif]-->                                        <span class="text-green-500 font-semibold">This device</span>
                                    <!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </div>
                        </div>
                    </div>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
        <!--[if ENDBLOCK]><![endif]-->

        <div class="flex items-center mt-5">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" wire:click="confirmLogout" wire:loading.attr="disabled">
                Log Out Other Browser Sessions
            </button>

            <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('bKY2OpGAwdnDP8VSGj7F').on('loggedOut', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 ms-3">
                Done.
            </div>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <div x-data="{ show: window.Livewire.find('bKY2OpGAwdnDP8VSGj7F').entangle('confirmingLogout').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="7bfef3bbc87b550e8528db202ce06cfb" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
            <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
                <div class="px-6 py-4">
                <div class="text-lg font-medium text-gray-900">Log Out Other Browser Sessions</div>

                <div class="mt-4 text-sm text-gray-600">Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Password" x-ref="password" wire:model="password" wire:keydown.enter="logoutOtherBrowserSessions">

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end">
            <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
                Cancel
            </button>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 ms-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
                Log Out Other Browser Sessions
            </button>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
            </div>

                            <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

                <div class="mt-10 sm:mt-0">
                    <div wire:snapshot="{&quot;data&quot;:{&quot;confirmingUserDeletion&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;CPYCxqKiU77MDe6Pdjbx&quot;,&quot;name&quot;:&quot;profile.delete-user-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;e7dc4e94c3e9795488d5a1e1b3631d3fa702886f158bc9e53f237fffbdd4b49c&quot;}" wire:effects="[]" wire:id="CPYCxqKiU77MDe6Pdjbx" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Delete Account</h3>

        <p class="mt-1 text-sm text-gray-600">
            Permanently delete your account.
        </p>
    </div>

    <div class="px-4 sm:px-0">
        
    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </div>

        <div class="mt-5">
            <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
    Delete Account
</button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <div x-data="{ show: window.Livewire.find('CPYCxqKiU77MDe6Pdjbx').entangle('confirmingUserDeletion').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="36ac91a8122577c7b197539ebb1a5123" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900">
            Delete Account
        </div>

        <div class="mt-4 text-sm text-gray-600">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Password" x-ref="password" wire:model="password" wire:keydown.enter="deleteUser">

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-end">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
    Cancel
</button>

                <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-3" wire:click="deleteUser" wire:loading.attr="disabled">
    Delete Account
</button>
    </div>
    </div>
</div>
        </div>
    </div>
</div>
                </div>
                    </div>
    </div>
            </main>
        </div>
</body>
</html>




