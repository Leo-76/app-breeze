<?php
use Illuminate\View\Component;
?>
@props(['header' => null])
<x-layouts.app>
    <x-slot name="header">{{ $header }}</x-slot>
    {{ $slot }}
</x-layouts.app>
