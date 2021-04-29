<?php

namespace DieterCoopman\LaravelNewsTile;

use Livewire\Component;

class LaravelNewsTileComponent extends Component
{
    /** @var string */
    public $position;

    /** @var string|null */
    public $title;

    /** @var integer */
    public $number = 0;

    /** @var string */
    public $configurationName;

    public $refreshIntervalInSeconds;

    public function mount(string $position, ?string $title = null, string $configurationName = 'default')
    {
        $this->position = $position;

        $this->title = $title;

        $this->refreshIntervalInSeconds = config('dashboard.tiles.laravelnews.refresh_interval_in_seconds',60);

        $this->configurationName = $configurationName;
    }

    public function render()
    {

        $xml   = \Illuminate\Support\Facades\Http::get("https://feed.laravel-news.com")->body();
        $array = \Mtownsend\XmlToArray\XmlToArray::convert($xml, false);

        if ($this->number == config('dashboard.tiles.laravelnews.number_of_articles',19)-1) {
            $this->number = 0;
        } else {
            $this->number++;
        }

        $articleContent =  \Illuminate\Support\Arr::get($array, 'channel.item.' . $this->number . '.description');
        $articleTitle   = \Illuminate\Support\Arr::get($array, 'channel.item.' . $this->number . '.title');
        return view('dashboard-laravelnews-tile::tile', compact('articleContent', 'articleTitle'));
    }
}
