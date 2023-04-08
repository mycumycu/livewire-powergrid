<?php

namespace PowerComponents\LivewirePowerGrid\Themes\Components;

class FilterContainsText
{
    public string $view = '';

    public string $inputClass = '';

    public string $baseClass = '';

    public string $baseStyle = '';

    public function base(string $attrClass = '', string $attrStyle = ''): FilterContainsText
    {
        $this->baseClass = $attrClass;

        $this->baseStyle = $attrStyle;

        return $this;
    }

    public function view(string $view): FilterContainsText
    {
        $this->view    = $view;

        return $this;
    }

    public function input(string $attrClass = ''): FilterContainsText
    {
        $this->inputClass = $attrClass;

        return $this;
    }

}
