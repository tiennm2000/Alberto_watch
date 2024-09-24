@props(['active'=>false])

<li>
    <a  class="{{$active?'bg-primary-700':''}} flex text-sm font-medium text-gray-900 hover:bg-primary-700 dark:text-white dark:hover:text-primary-500 rounded-lg p-2 hover:animate-fadein"
    {{$attributes}} aria-current="{{$active?'page':'false'}}">
        {{ $slot}}
    </a>
</li>
