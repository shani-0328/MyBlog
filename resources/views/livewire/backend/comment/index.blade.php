<div wire:loading.class="opacity-50">
    <x-backend.table>
        <x-slot name="head">
            <tr>
                <x-backend.table.th>Comment</x-backend.table.th>
                <x-backend.table.th>By</x-backend.table.th>
                <x-backend.table.th>Article</x-backend.table.th>
                <x-backend.table.th>Status</x-backend.table.th>
                <x-backend.table.th></x-backend.table.th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach($comments as $comment)
                <livewire:backend.comment.index-row :comment="$comment" wire:key="{{$comment->id}}"/>
            @endforeach
        </x-slot>
    </x-backend.table>

    <div class="pt-3">
        {{$comments->links()}}
    </div>
</div>
