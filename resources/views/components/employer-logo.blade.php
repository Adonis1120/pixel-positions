@props(['employer', 'width' => 90])

<img src="{{ Str::startsWith($employer->logo, 'http') ? $employer->logo : asset('storage/' . $employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
<!--<img src="http://picsum.photos/seed/{{ rand(0, 1000) }}/{{ $width }}" alt="" class="rounded-xl">-->