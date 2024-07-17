<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('simple_card')]
class SimpleCardComponent
{
    public string $title;
    public string $content;
    public string $buttonText;
    public string $buttonUrl;
}