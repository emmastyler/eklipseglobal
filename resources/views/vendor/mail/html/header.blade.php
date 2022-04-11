<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Eclispe')
<img src="" class="logo" alt="eclipse Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
