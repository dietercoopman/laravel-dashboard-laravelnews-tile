<x-dashboard-tile :position="$position" :refresh-interval="$refreshIntervalInSeconds">
    <div class="font-bold text-center">{!! $articleTitle !!}</div>
    <div class="text-sm font-bold text-center">{!! $articleContent !!}</div>

    <img src="{!! $articleQrCode !!}" alt="QR Code" id="qrcode" />
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
    #qrcode{
        position: absolute;
        background-color: white;
        bottom: 5px;
        left: 5px;
        width: 15%;
        padding:0px;
    }
</style>