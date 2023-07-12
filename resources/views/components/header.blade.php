<?php
use App\Models\TextWidget;
?>

<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            {{ TextWidget::getTitle('header') }}
        </a>
        <p class="text-lg text-gray-600">
            {{ TextWidget::getTitle('subheader') }}
        </p>
    </div>
</header>