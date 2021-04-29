<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="font-bold text-center">{!! $articleTitle !!}</div>
    <div class="text-sm font-bold text-center">{!! $articleContent !!}</div>
</x-dashboard-tile>
<style>
    img{
        padding:20px;
    }
    p{
        display: none;
    }
    p:first-child{
        display: block;
    }
    hr{
        display: none;
    }
</style>