<?php

namespace App\Livewire\Forms;
use Livewire\Attributes\Rule;
use Livewire\Form;

class UrlForm extends Form
{
    #[Rule('required', message: 'You need to enter a URL.')]
    #[Rule('url', message: 'Your url needs to look like: "https://www.google.com".')]
    public $url = '';
}
