@php($reference = $copy['reference'])

{{-- The developer's anchor: what the server is, in one table, and the two
     endpoints to copy. No panda here, on purpose. --}}
<section id="reference" class="{{ $section }} scroll-mt-14">
    <div class="{{ $container }} flex flex-col gap-14">
        <div class="flex max-w-[760px] flex-col gap-5">
            <h2 class="{{ $title }}">{{ $reference['title'] }}</h2>
            <p class="{{ $paragraph }}">{{ $reference['lead'] }}</p>
        </div>

        <div class="grid items-start gap-6 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] lg:gap-10">
            <div class="overflow-x-auto rounded-lg border border-border">
                <table class="w-full text-left text-body">
                    <thead class="bg-surface-subtle text-xs font-semibold text-text-muted">
                        <tr>
                            <th scope="col" class="px-4 py-3">{{ $reference['head'][0] }}</th>
                            <th scope="col" class="px-4 py-3">{{ $reference['head'][1] }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border">
                        @foreach ($reference['rows'] as [$capability, $value])
                            <tr>
                                <th scope="row" class="px-4 py-3 align-top font-normal whitespace-nowrap text-text-muted">{{ $capability }}</th>
                                <td class="px-4 py-3 text-text text-pretty">{{ $value }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-4">
                @include('_partials.mcp-server.code', ['text' => $copy['endpoint'], 'caption' => $reference['hosted']])
                @include('_partials.mcp-server.code', ['text' => $copy['selfHosted'], 'caption' => $reference['pattern']])
                <p class="rounded-md border-l-2 border-border-strong py-1 pl-4 text-body text-text-secondary text-pretty">{{ $reference['note'] }}</p>
                <div class="flex flex-wrap items-center gap-x-5 gap-y-3 pt-1">
                    <a href="{{ $page->links['mcp'] }}" class="mn-btn mn-btn-primary no-underline hover:no-underline">{{ $reference['docs'] }}</a>
                    <a href="{{ $page->links['github'] }}" class="inline-flex items-center gap-1.5 text-body font-medium">{{ $reference['github'] }}@include('_partials.icon', ['name' => 'arrow-right', 'size' => 14])</a>
                </div>
            </div>
        </div>
    </div>
</section>
