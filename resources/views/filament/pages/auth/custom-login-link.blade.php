@if (filament()->hasLogin())
    <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
        Already have an account? 
        <a class="text-primary-600 hover:text-primary-500 font-semibold" href="{{ filament()->getLoginUrl() }}">
            Sign in
        </a>
    </div>
@endif
