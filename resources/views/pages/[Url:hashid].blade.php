<?php
    use function Livewire\Volt\{state, mount};
    use function Laravel\Folio\Name;
    use App\Models\Url;
    name('redirect');
    mount(function(Url $url){
        $url->increment('visits');
        redirect($url->url, 301);
    });
?>

@volt
    <div>
        <p>You should be redirected.</p>
    </div>
@endvolt
