{{-- One loan in a possession's "Every loan" list, as Erica draws it: the
     person's avatar, who it was lent to, its status, the dates, the purpose
     when there is one, then the condition when it left, the due date or the
     condition when it came back, and the deposit. The Edit and Delete
     buttons are left out. Reads the page's `$ui`, `$tones` and shared
     classes.

     @include('_partials.maintenance-loans.loan', ['name' => 'Joey Tribbiani', 'status' => 'With them now', 'tone' => 'warning', 'period' => '…', 'span' => '…', 'purpose' => null, 'facts' => [['Condition out', 'Like new', true]]]) --}}
<div class="{{ $panel }}">
    <div class="flex flex-wrap items-start gap-x-4 gap-y-3 p-4">
        @include('_partials.home.product.avatar', ['name' => $name, 'size' => 32])
        <div class="flex min-w-0 flex-1 flex-col gap-1">
            <div class="flex flex-wrap items-baseline gap-1.5">
                <span class="text-text"><span class="text-text-muted">{{ $ui['lentTo'] }}</span> <span class="font-semibold underline decoration-border-strong underline-offset-2">{{ $name }}</span></span>
                <span class="{{ $badge }} {{ $tones[$tone] }}">{{ $status }}</span>
            </div>
            <span class="text-small text-text-secondary">{{ $period }} <span class="text-text-muted">· {{ $span }}</span></span>
            @if ($purpose)
                <p class="text-small text-text-secondary text-pretty">{{ $purpose }}</p>
            @endif
        </div>
    </div>
    <dl class="grid grid-cols-3 border-t border-border">
        @foreach ($facts as [$label, $value, $isSet])
            <div class="flex min-w-0 flex-col gap-0.75 border-e border-border px-4 py-3 last:border-e-0">
                <dt class="{{ $term }}">{{ $label }}</dt>
                <dd class="text-small {{ $isSet ? 'text-text' : 'text-text-muted' }}">{{ $value }}</dd>
            </div>
        @endforeach
    </dl>
</div>
