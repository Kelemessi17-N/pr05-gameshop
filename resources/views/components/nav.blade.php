@props(['disabled' => false])

{{--<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>--}}


<nav class="navbar">

    <a href="/home" class="logo"> Gamehub</a>

    <div class="nav-left">
        <a href="/home"> Welkom </a>
        <a href="/products">Producten </a>
        <a href="/reviews">Reviews </a>
        <a href="/contact"> Contact </a>
    </div>

    <div class="nav-right">
        <a href="/login" class="login"> Login </a>
        <a href="/register" class="register"> Register </a>
    </div>

    {{ $slot }}
</nav>
