@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/ip-media-river-logo.svg') }}" class="logo" alt="IP Media River - Logo">
@else
<img src="{{ asset('img/ip-media-river-logo.svg') }}" class="logo" alt="IP Media River - Logo">
@endif
</a>
</td>
</tr>
