@php($compare = $copy['compare'])

{{-- Categories, not named products, so the table does not need updating
     every time somebody ships an MCP server. --}}
<section class="{{ $section }}">
    <div class="mx-auto flex w-full max-w-[880px] flex-col gap-5">
        <h2 class="{{ $title }}">{{ $compare['title'] }}</h2>
        <p class="{{ $paragraph }}">{{ $compare['lead'] }}</p>

        <div class="mt-5 overflow-x-auto rounded-lg border border-border">
            <table class="w-full text-left text-body">
                <caption class="sr-only">{{ $compare['caption'] }}</caption>
                <thead class="bg-surface-subtle text-xs font-semibold">
                    <tr>
                        <td class="px-4 py-3"></td>
                        <th scope="col" class="px-4 py-3 text-text-muted">{{ $compare['head'][0] }}</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="flex items-center gap-2"><img src="{{ $mark }}" alt="" width="32" height="29" loading="lazy" class="h-auto w-4.5">{{ $compare['head'][1] }}</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    @foreach ($compare['rows'] as [$capability, $standalone, $monica])
                        <tr>
                            <th scope="row" class="px-4 py-3 font-normal text-text">{{ $capability }}</th>
                            <td class="px-4 py-3 text-text-muted">{{ $standalone }}</td>
                            <td class="px-4 py-3">
                                <span class="flex items-center gap-2 font-medium"><span class="text-success">@include('_partials.icon', ['name' => 'check', 'size' => 15])</span>{{ $monica }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="{{ $note }} pt-1">{{ $compare['closing'] }}</p>
    </div>
</section>
