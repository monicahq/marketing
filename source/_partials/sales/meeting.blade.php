@php($meeting = $copy['meeting'])

{{-- The meeting nobody books. The fields are disabled, because there is
     nothing to collect, and the form goes nowhere. The button is the summary
     of a native <details>, so pressing it shows the confirmation with no
     script, from the keyboard as well as the mouse. --}}
<section id="book-a-meeting" class="{{ $section }} scroll-mt-16">
    <div class="mx-auto flex w-full max-w-[560px] flex-col gap-8">
        <div class="flex flex-col gap-2">
            <h2 class="{{ $title }}">{{ $meeting['title'] }}</h2>
            <p class="{{ $lede }}">{{ $meeting['lede'] }}</p>
        </div>

        <div class="{{ $card }} overflow-hidden">
            <div class="flex flex-col gap-4 p-5" data-md-skip>
                @foreach ($meeting['fields'] as $field)
                    <div class="mn-field">
                        <label for="sales-field-{{ $loop->iteration }}" class="mn-label">{{ $field['label'] }}</label>
                        <input
                            id="sales-field-{{ $loop->iteration }}"
                            type="text"
                            class="mn-control"
                            placeholder="{{ $field['placeholder'] }}"
                            autocomplete="off"
                            disabled
                        >
                    </div>
                @endforeach
            </div>

            <details class="group border-t border-border bg-surface-subtle">
                <summary class="mn-focusable-inset flex cursor-pointer list-none flex-wrap items-center justify-between gap-4 px-5 py-3.5 [&::-webkit-details-marker]:hidden">
                    <span class="text-small text-text-muted">{{ $meeting['privacy'] }}</span>
                    <span class="mn-btn mn-btn-primary">{{ $meeting['button'] }}</span>
                </summary>

                <div class="px-5 pb-5">
                    <div class="flex items-start gap-3 rounded-lg border border-success-edge bg-success-subtle p-4">
                        <span class="flex pt-0.5 text-success">@include('_partials.icon', ['name' => 'check-circle', 'size' => 20])</span>
                        <div class="flex flex-col gap-0.5 text-body text-text-soft">
                            <strong class="font-semibold text-text">{{ $meeting['doneTitle'] }}</strong>
                            @foreach ($meeting['done'] as $line)
                                <span>{{ $line }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </details>
        </div>
    </div>
</section>
