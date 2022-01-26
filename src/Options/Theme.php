<?php

namespace Akaunting\Apexcharts\Options;

use Akaunting\Apexcharts\Charts;

trait Theme
{
    /**
     * Stores the mode of the theme.
     *
     * @var string
     */
    public $themeMode = 'light';

    /**
     * Stores the palette of the theme.
     *
     * @var string
     */
    public $themePalette = 'palette1';

    /**
     * Stores the monochrome of the theme.
     *
     * @var array
     */
    public $themeMonochrome = [];

    /**
     * Set the theme mode.
     *
     * @param string $themeMode
     *
     * @return this
     */
    public function setThemeMode($themeMode) :Charts
    {
        $this->themeMode = $themeMode;

        $this->setOption([
            'theme' => [
                'mode' => $themeMode,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getThemeMode()
    {
        return $this->themeMode;
    }

    /**
     * Set the theme palette.
     *
     * @param string $themePalette
     *
     * @return this
     */
    public function setThemePalette($themePalette) :Charts
    {
        $this->themePalette = $themePalette;

        $this->setOption([
            'theme' => [
                'palette' => $themePalette,
            ],
        ]);

        return $this;
    }

    /**
     * @return string
     */
    public function getThemePalette()
    {
        return $this->themePalette;
    }

    /**
     * Set the theme monochrome.
     *
     * @param array $themeMonochrome
     *
     * @return this
     */
    public function setThemeMonochrome($themeMonochrome) :Charts
    {
        $this->themeMonochrome = $themeMonochrome;

        $this->setOption([
            'theme' => [
                'monochrome' => $themeMonochrome,
            ],
        ]);

        return $this;
    }

    /**
     * @return array
     */
    public function getThemeMonochrome()
    {
        return $this->themeMonochrome;
    }
}
